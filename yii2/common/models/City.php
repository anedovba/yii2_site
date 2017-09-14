<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use lav45\translate\TranslatedTrait;
use lav45\translate\TranslatedBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "city".
 *
 * @property integer $id
 * @property string $created_at
 * @property string $city_name
 *
 * @property CityLang[] $cityLangs
 * @property Lang[] $langs
 * @property Object[] $objects
 */
class City extends \yii\db\ActiveRecord
{
    use TranslatedTrait;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at'], 'safe'],
            [['city_name'], 'required'],
            [['city_name'], 'string', 'max' => 100],
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TranslatedBehavior::className(),
                'translateRelation' => 'cityLangs', // Specify the name of the connection that will store transfers
//                'languageAttribute' => 'lang_id' // post_lang field from the table that will store the target language
                'translateAttributes' => [
                    'city_name',
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
            'city_name' => 'City',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCityLangs()
    {
        return $this->hasMany(CityLang::className(), ['city_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLangs()
    {
        return $this->hasMany(Lang::className(), ['id' => 'lang_id'])->viaTable('city_lang', ['city_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjects()
    {
        return $this->hasMany(Object::className(), ['city_id' => 'id']);
    }

    public static function getCityList(){

        return ArrayHelper::map(self::find()->all(),'id', 'city_name');
    }
}
