<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "agent_lang".
 *
 * @property integer $id
 * @property integer $agent_id
 * @property string $lang_id
 * @property string $name
 * @property string $position
 * @property string $description
 *
 * @property Agent $agent
 * @property Lang $lang
 */
class AgentLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agent_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['agent_id', 'lang_id', 'name', 'position', 'description'], 'required'],
            [['agent_id'], 'integer'],
            [['lang_id'], 'string', 'max' => 2],
            [['name'], 'string', 'max' => 100],
            [['position'], 'string', 'max' => 250],
            [['description'], 'string', 'max' => 1000],
            [['agent_id'], 'exist', 'skipOnError' => true, 'targetClass' => Agent::className(), 'targetAttribute' => ['agent_id' => 'id']],
            [['lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lang::className(), 'targetAttribute' => ['lang_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'agent_id' => Yii::t('app', 'Agent ID'),
            'lang_id' => Yii::t('app', 'Lang ID'),
            'name' => Yii::t('app', 'Name'),
            'position' => Yii::t('app', 'Position'),
            'description' => Yii::t('app', 'Description'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgent()
    {
        return $this->hasOne(Agent::className(), ['id' => 'agent_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLang()
    {
        return $this->hasOne(Lang::className(), ['id' => 'lang_id']);
    }
}
