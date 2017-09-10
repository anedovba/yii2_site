<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model common\models\Agents */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="agents-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
    <?= $form->field($model, 'name', ['options'=>['class'=>'col-xs-6']])->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'phone', ['options'=>['class'=>'col-xs-6']])->widget(MaskedInput::className(),['mask' => '+38 (099) 999 99 99'])->textInput(); ?>
    <?= $form->field($model, 'user_id', ['options'=>['class'=>'col-xs-6']])->dropDownList(\common\models\User::getUserList())?>

    <?= $form->field($model, 'position', ['options'=>['class'=>'col-xs-6']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description', ['options'=>['class'=>'col-xs-6']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_ru', ['options'=>['class'=>'col-xs-6']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position_ru', ['options'=>['class'=>'col-xs-6']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description_ru', ['options'=>['class'=>'col-xs-6']])->textInput(['maxlength' => true]) ?>
</div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
