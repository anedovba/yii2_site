<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "object_image".
 *
 * @property integer $id
 * @property integer $object_id
 * @property string $image
 * @property integer $sort
 *
 * @property Object $object
 */
class ObjectImage extends \yii\db\ActiveRecord
{
    public $attachment;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'object_image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['object_id', 'image'], 'required'],
            [['object_id', 'sort'], 'integer'],
            [['sort'], 'default', 'value'=>function($model){
            $count=ObjectImage::find()->count();
            return ($count>0)?$count++:0;
            }],
            [['attachment'], 'image'],
            [['image'], 'string', 'max' => 100],
            [['object_id'], 'exist', 'skipOnError' => true, 'targetClass' => Object::className(), 'targetAttribute' => ['object_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'object_id' => 'Object ID',
            'image' => 'Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObject()
    {
        return $this->hasOne(Object::className(), ['id' => 'object_id']);
    }

    public function getImageAll(){
        $path=str_replace('.admin','', \yii\helpers\Url::home(true). 'uploads/images/property/'.$this->image );
        return $path;
    }
    public function beforeDelete()
    {
        $dir = Yii::getAlias('@images').'/property/';
        if(file_exists($dir.$this->image)) {
            @unlink($dir.$this->image);
        }
        return true;
    }
}
