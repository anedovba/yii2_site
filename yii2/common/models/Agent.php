<?php

namespace common\models;

use yii\db\ActiveRecord;
use lav45\translate\TranslatedTrait;
use lav45\translate\TranslatedBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "agent".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $phone
 * @property string $name
 * @property string $position
 * @property string $description
 *
 * @property User $user
 * @property AgentLang[] $agentLangs
 */
class Agent extends ActiveRecord
{
    use TranslatedTrait;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agent';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'phone'], 'required'],
            [['user_id'], 'integer'],
            [['phone'], 'string', 'max' => 20],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100],
            [['position'], 'required'],
            [['position'], 'string', 'max' => 250],
            [['description'], 'required'],
            [['description'], 'string', 'max' => 1000],
        ];
    }
    public function behaviors()
    {
        return [
            [
                'class' => TranslatedBehavior::className(),
                'translateRelation' => 'agentLangs', // Specify the name of the connection that will store transfers
//                'languageAttribute' => 'lang_id' // post_lang field from the table that will store the target language
                'translateAttributes' => [
                    'name',
                    'position',
                    'description',
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
            'smallImage'=> 'Фото',
            'user_id' => 'Логин',
            'phone' =>'Телефон',
            'name' => 'Имя',
            'position' => 'Направление',
            'description' => 'Описание',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgentLangs()
    {
        return $this->hasMany(AgentLang::className(), ['agent_id' => 'id']);
    }
    public static function getAgentList(){

        return ArrayHelper::map(self::find()->all(),'id', 'name');
    }
}
