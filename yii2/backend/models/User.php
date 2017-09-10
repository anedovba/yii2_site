<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\web\UploadedFile;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $subscribe
 * @property integer $role
 * @property integer $image
 *
 * @property UserRole $role0
 * @property UserStatus $status0
 */
class User extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at', 'subscribe', 'role'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['image'], 'string', 'max' => 100],
            [['file'], 'image'],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
            [['role'], 'exist', 'skipOnError' => true, 'targetClass' => UserRole::className(), 'targetAttribute' => ['role' => 'id']],
            [['status'], 'exist', 'skipOnError' => true, 'targetClass' => UserStatus::className(), 'targetAttribute' => ['status' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return bool
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Имя пользователя',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Статус',
            'created_at' => 'Создан',
            'updated_at' => 'Изменен',
            'subscribe' => 'Подписка на новости',
            'role' => 'Роль',
            'image'=>'Картинка',
            'file'=>'Картинка',
        ];
    }

    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRole0()
    {
        return $this->hasOne(UserRole::className(), ['id' => 'role']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(UserStatus::className(), ['id' => 'status']);
    }

    public static function getSubscribeList(){

        return ['да', 'нет'];
    }

    public function getSubscribeName(){
        $list=$this->getSubscribeList();
        return $list[$this->subscribe];
    }

    public function getSmallImage(){
        $dir=str_replace('.admin','', Url::home(true). 'uploads/images/50x50/' );
        return $dir.$this->image;
    }
    public function beforeSave($insert)
    {

        if($file = UploadedFile::getInstance($this, 'file')){
            $dir = Yii::getAlias('@images').'/';

            if (!is_dir($dir . $this->image)) {
                if(!file_exists($dir)){
                    mkdir($dir, 0777);
                    chmod($dir, 0777);
                }
                if(!file_exists($dir. '50x50/')){
                    mkdir($dir. '50x50/', 0777);
                    chmod($dir. '50x50/', 0777);
                }
                if(!is_dir($dir. '800x/')){
                    mkdir($dir. '800x/', 0777);
                    chmod($dir. '800x/', 0777);
                }
                if (is_file($dir . $this->image)) {
                    unlink($dir . $this->image);
                }
                if (is_file($dir . '50x50/' . $this->image)) {
                    unlink($dir . '50x50/' . $this->image);
                }
                if (is_file($dir . '800x/' . $this->image)) {
                    unlink($dir . '800x/' . $this->image);
                }
            }
            $this->image=strtotime('now').'_'.Yii::$app->getSecurity()->generateRandomString(6).'.'.$file->extension;
            $file->saveAs($dir.$this->image);
            $imag=Yii::$app->image->load($dir . $this->image);
            $imag->background('#fff',0);
            $imag->resize('50', '50', Yii\image\drivers\Image::INVERSE);
            $imag->crop('50','50');
            $imag->save($dir.'50x50/'.$this->image, 90);
            $imag=Yii::$app->image->load($dir . $this->image);
            $imag->background('#fff',0);
            $imag->resize('800', '800', Yii\image\drivers\Image::INVERSE);
            $imag->save($dir.'800x/'.$this->image, 90);

        }
        return parent::beforeSave($insert);
    }

}
