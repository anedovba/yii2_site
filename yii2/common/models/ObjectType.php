<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use lav45\translate\TranslatedTrait;
use lav45\translate\TranslatedBehavior;

/**
 * This is the model class for table "object_type".
 *
 * @property integer $id
 * @property string $created_at
 * @property string $object_type_name
 *
 * @property Object[] $objects
 * @property ObjectTypeLang[] $objectTypeLangs
 * @property Lang[] $langs
 */
class ObjectType extends \yii\db\ActiveRecord
{
    use TranslatedTrait;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'object_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at'], 'safe'],
            [['object_type_name'], 'required'],
            [['object_type_name'], 'string', 'max' => 100],
        ];
    }
    public function behaviors()
    {
        return [
            [
                'class' => TranslatedBehavior::className(),
                'translateRelation' => 'objectTypeLangs', // Specify the name of the connection that will store transfers
//                'languageAttribute' => 'lang_id' // post_lang field from the table that will store the target language
                'translateAttributes' => [
                    'object_type_name',
                ]
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'created_at' => 'Created At',
            'object_type_name' => 'Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjects()
    {
        return $this->hasMany(Object::className(), ['object_type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjectTypeLangs()
    {
        return $this->hasMany(ObjectTypeLang::className(), ['object_type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLangs()
    {
        return $this->hasMany(Lang::className(), ['id' => 'lang_id'])->viaTable('object_type_lang', ['object_type_id' => 'id']);
    }
}
