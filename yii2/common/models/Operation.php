<?php

namespace common\models;

use Yii;
use yii\base\Object;
use yii\db\ActiveRecord;
use lav45\translate\TranslatedTrait;
use lav45\translate\TranslatedBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "operation".
 *
 * @property integer $id
 * @property string $created_at
 * @property string $operation_name
 *
 * @property Object[] $objects
 * @property OperationLang[] $operationLangs
 * @property Lang[] $langs
 */
class Operation extends \yii\db\ActiveRecord
{
    use TranslatedTrait;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'operation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at'], 'safe'],
            [['operation_name'], 'required'],
            [['operation_name'], 'string', 'max' => 120],
        ];
    }
    public function behaviors()
    {
        return [
            [
                'class' => TranslatedBehavior::className(),
                'translateRelation' => 'operationLangs', // Specify the name of the connection that will store transfers
//                'languageAttribute' => 'lang_id' // post_lang field from the table that will store the target language
                'translateAttributes' => [
                    'operation_name',
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
            'operation_name' => 'Operation',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjects()
    {
        return $this->hasMany(Object::className(), ['operation_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOperationLangs()
    {
        return $this->hasMany(OperationLang::className(), ['operation_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLangs()
    {
        return $this->hasMany(Lang::className(), ['id' => 'lang_id'])->viaTable('operation_lang', ['operation_id' => 'id']);
    }
    public static function getOperationList(){

        return ArrayHelper::map(self::find()->all(),'id', 'operation_name');
    }
}
