<?php

namespace common\models;

use Yii;
use yii\base\Object;
use yii\db\ActiveRecord;
use lav45\translate\TranslatedTrait;
use lav45\translate\TranslatedBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "country".
 *
 * @property integer $id
 * @property string $created_at
 * @property string $country_name
 *
 * @property CountryLang[] $countryLangs
 * @property Lang[] $langs
 * @property Object[] $objects
 */
class Country extends \yii\db\ActiveRecord
{
    use TranslatedTrait;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at'], 'safe'],
            [['country_name'], 'required'],
            [['country_name'], 'string', 'max' => 100],
        ];
    }
    public function behaviors()
    {
        return [
            [
                'class' => TranslatedBehavior::className(),
                'translateRelation' => 'countryLangs', // Specify the name of the connection that will store transfers
//                'languageAttribute' => 'lang_id' // post_lang field from the table that will store the target language
                'translateAttributes' => [
                    'country_name',
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
            'country_name' => 'Country Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountryLangs()
    {
        return $this->hasMany(CountryLang::className(), ['country_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLangs()
    {
        return $this->hasMany(Lang::className(), ['id' => 'lang_id'])->viaTable('country_lang', ['country_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjects()
    {
        return $this->hasMany(Object::className(), ['country_id' => 'id']);
    }
    public static function getCountryList(){

        return ArrayHelper::map(self::find()->all(),'id', 'country_name');
    }
}
