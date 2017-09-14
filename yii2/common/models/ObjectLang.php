<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "object_lang".
 *
 * @property integer $object_id
 * @property string $lang_id
 * @property string $object_name
 * @property string $object_description
 * @property string $object_street
 *
 * @property Object $object
 * @property Lang $lang
 */
class ObjectLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'object_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['object_id', 'lang_id', 'object_name', 'object_description', 'object_street'], 'required'],
            [['object_id'], 'integer'],
            [['lang_id'], 'string', 'max' => 2],
            [['object_name'], 'string', 'max' => 250],
            [['object_description'], 'string', 'max' => 1000],
            [['object_street'], 'string', 'max' => 500],
            [['object_id'], 'exist', 'skipOnError' => true, 'targetClass' => Object::className(), 'targetAttribute' => ['object_id' => 'id']],
            [['lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lang::className(), 'targetAttribute' => ['lang_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'object_id' => 'Object ID',
            'lang_id' => 'Lang ID',
            'object_name' => 'Object Name',
            'object_description' => 'Object Description',
            'object_street' => 'Object Street',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObject()
    {
        return $this->hasOne(Object::className(), ['id' => 'object_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLang()
    {
        return $this->hasOne(Lang::className(), ['id' => 'lang_id']);
    }
}
