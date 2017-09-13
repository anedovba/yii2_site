<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "object_type_lang".
 *
 * @property integer $object_type_id
 * @property string $lang_id
 * @property string $object_type_name
 *
 * @property ObjectType $objectType
 * @property Lang $lang
 */
class ObjectTypeLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'object_type_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['object_type_id', 'lang_id', 'object_type_name'], 'required'],
            [['object_type_id'], 'integer'],
            [['lang_id'], 'string', 'max' => 2],
            [['object_type_name'], 'string', 'max' => 100],
            [['object_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => ObjectType::className(), 'targetAttribute' => ['object_type_id' => 'id']],
            [['lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lang::className(), 'targetAttribute' => ['lang_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'object_type_id' => 'Object Type ID',
            'lang_id' => 'Lang ID',
            'object_type_name' => 'Object Type Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjectType()
    {
        return $this->hasOne(ObjectType::className(), ['id' => 'object_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLang()
    {
        return $this->hasOne(Lang::className(), ['id' => 'lang_id']);
    }
}
