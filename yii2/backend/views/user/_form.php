<?php

use backend\models\UserRole;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>


    <?= $form->field($model, 'username', ['options'=>['class'=>'col-xs-6']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email', ['options'=>['class'=>'col-xs-6']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status', ['options'=>['class'=>'col-xs-6']])->dropDownList(\backend\models\UserStatus::getStatusList()) ?>

    <?= $form->field($model, 'created_at', ['inputOptions' => ['value'=>$model->isNewRecord ?$_SERVER['REQUEST_TIME']:$model->created_at]] , ['options'=>['class'=>'col-xs-6']])->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'updated_at', ['options'=>['class'=>'col-xs-6']], ['inputOptions' => ['value'=>$_SERVER['REQUEST_TIME']]])->hiddenInput()->label(false) ?>

    <?= $form->field($model, 'subscribe', ['options'=>['class'=>'col-xs-6']])->dropDownList(\backend\models\User::getSubscribeList()) ?>

    <?= $form->field($model, 'role', ['options'=>['class'=>'col-xs-6']])->dropDownList(UserRole::getRoleList()) ?>

    <?= $form->field($model, 'file', ['options'=>['class'=>'col-xs-6']])->widget(FileInput::classname(), [
    'language' => 'ru',
        'options' => ['accept' => 'image/*'],
    ]);
    ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
