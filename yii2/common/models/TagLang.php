<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tag_lang".
 *
 * @property integer $tag_id
 * @property string $lang_id
 * @property string $tag_name
 *
 * @property Lang $lang
 * @property Tag $tag
 */
class TagLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tag_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tag_id', 'lang_id', 'tag_name'], 'required'],
            [['tag_id'], 'integer'],
            [['lang_id'], 'string', 'max' => 2],
            [['tag_name'], 'string', 'max' => 100],
            [['lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lang::className(), 'targetAttribute' => ['lang_id' => 'id']],
            [['tag_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tag::className(), 'targetAttribute' => ['tag_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tag_id' => 'Tag ID',
            'lang_id' => 'Lang ID',
            'tag_name' => 'Tag Name',
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
    public function getTag()
    {
        return $this->hasOne(Tag::className(), ['id' => 'tag_id']);
    }
}
