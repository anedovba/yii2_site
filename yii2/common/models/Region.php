<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use lav45\translate\TranslatedTrait;
use lav45\translate\TranslatedBehavior;

/**
 * This is the model class for table "region".
 *
 * @property integer $id
 * @property string $created_at
 * @property string $region_name
 *
 * @property Object[] $objects
 * @property RegionLang[] $regionLangs
 */
class Region extends \yii\db\ActiveRecord
{
    use TranslatedTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'region';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at'], 'safe'],
            [['region_name'], 'required'],
            [['region_name'], 'string', 'max' => 120],
        ];
    }
    public function behaviors()
    {
        return [
            [
                'class' => TranslatedBehavior::className(),
                'translateRelation' => 'regionLangs', // Specify the name of the connection that will store transfers
//                'languageAttribute' => 'lang_id' // post_lang field from the table that will store the target language
                'translateAttributes' => [
                    'region_name',
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
            'region_name' => 'Region',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjects()
    {
        return $this->hasMany(Object::className(), ['region_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegionLangs()
    {
        return $this->hasMany(RegionLang::className(), ['region_id' => 'id']);
    }
}
