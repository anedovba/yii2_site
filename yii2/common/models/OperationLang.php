<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "operation_lang".
 *
 * @property integer $operation_id
 * @property string $lang_id
 * @property string $operation_name
 *
 * @property Operation $operation
 * @property Lang $lang
 */
class OperationLang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'operation_lang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['operation_id', 'lang_id', 'operation_name'], 'required'],
            [['operation_id'], 'integer'],
            [['lang_id'], 'string', 'max' => 2],
            [['operation_name'], 'string', 'max' => 100],
            [['operation_id'], 'exist', 'skipOnError' => true, 'targetClass' => Operation::className(), 'targetAttribute' => ['operation_id' => 'id']],
            [['lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lang::className(), 'targetAttribute' => ['lang_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'operation_id' => 'Operation ID',
            'lang_id' => 'Lang ID',
            'operation_name' => 'Operation Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOperation()
    {
        return $this->hasOne(Operation::className(), ['id' => 'operation_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLang()
    {
        return $this->hasOne(Lang::className(), ['id' => 'lang_id']);
    }
}
