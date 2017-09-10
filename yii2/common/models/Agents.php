<?php

namespace common\models;

use Yii;
use yii\helpers\Url;

/**
 * This is the model class for table "agents".
 *
 * @property integer $id
 * @property string $name
 * @property integer $user_id
 * @property string $position
 * @property string $description
 * @property string $name_ru
 * @property string $position_ru
 * @property string $description_ru
 * @property string $phone
 *
 *
 * @property User $user
 */
class Agents extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agents';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'user_id', 'position', 'description', 'name_ru', 'position_ru', 'description_ru'], 'required'],
            [['user_id'], 'integer'],
            [['name', 'name_ru'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 20],
            [['position', 'position_ru'], 'string', 'max' => 250],
            [['description', 'description_ru'], 'string', 'max' => 1000],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image'=>'Фото',
            'name' => 'Имя',
            'phone'=>'Телефон',
            'user_id' => 'User ID',
            'position' => 'Направление',
            'description' => 'Описание',
            'name_ru' => 'Имя Ru',
            'position_ru' => 'Направление Ru',
            'description_ru' => 'Описание Ru',
        ];
    }

     /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
