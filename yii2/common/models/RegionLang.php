<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "region_lang".
 *
 * @property integer $region_id
 * @property string $lang_id
 * @property string $region_name
 *
 * @property Lang $lang
 * @property Region $region
 */
class RegionLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'region_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region_id', 'lang_id', 'region_name'], 'required'],
            [['region_id'], 'integer'],
            [['lang_id'], 'string', 'max' => 2],
            [['region_name'], 'string', 'max' => 100],
            [['lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lang::className(), 'targetAttribute' => ['lang_id' => 'id']],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['region_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'region_id' => 'Region ID',
            'lang_id' => 'Lang ID',
            'region_name' => 'Region Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLang()
    {
        return $this->hasOne(Lang::className(), ['id' => 'lang_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Region::className(), ['id' => 'region_id']);
    }
}
