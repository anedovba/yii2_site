<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use lav45\translate\TranslatedTrait;
use lav45\translate\TranslatedBehavior;

/**
 * This is the model class for table "tag".
 *
 * @property integer $id
 * @property string $created_at
 * @property string $tag_name
 *
 * @property ObjectTag[] $objectTags
 * @property TagLang[] $tagLangs
 * @property Lang[] $langs
 */
class Tag extends \yii\db\ActiveRecord
{
    use TranslatedTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at'], 'safe'],
            [['tag_name'], 'required'],
            [['tag_name'], 'string', 'max' => 100],
        ];
    }
    public function behaviors()
    {
        return [
            [
                'class' => TranslatedBehavior::className(),
                'translateRelation' => 'tagLangs', // Specify the name of the connection that will store transfers
//                'languageAttribute' => 'lang_id' // post_lang field from the table that will store the target language
                'translateAttributes' => [
                    'tag_name',
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
            'tag_name' => 'Tag',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjectTags()
    {
        return $this->hasMany(ObjectTag::className(), ['tag_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTagLangs()
    {
        return $this->hasMany(TagLang::className(), ['tag_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLangs()
    {
        return $this->hasMany(Lang::className(), ['id' => 'lang_id'])->viaTable('tag_lang', ['tag_id' => 'id']);
    }
}
