<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ObjectSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="object-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'created_at') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'top') ?>

    <?php // echo $form->field($model, 'coditioning') ?>

    <?php // echo $form->field($model, 'heating') ?>

    <?php // echo $form->field($model, 'balcony') ?>

    <?php // echo $form->field($model, 'dishwasher') ?>

    <?php // echo $form->field($model, 'pool') ?>

    <?php // echo $form->field($model, 'internet') ?>

    <?php // echo $form->field($model, 'terrace') ?>

    <?php // echo $form->field($model, 'microwave') ?>

    <?php // echo $form->field($model, 'fridge') ?>

    <?php // echo $form->field($model, 'cable_tv') ?>

    <?php // echo $form->field($model, 'security_camera') ?>

    <?php // echo $form->field($model, 'area') ?>

    <?php // echo $form->field($model, 'area_kitch') ?>

    <?php // echo $form->field($model, 'area_live') ?>

    <?php // echo $form->field($model, 'ceiling_height') ?>

    <?php // echo $form->field($model, 'floor') ?>

    <?php // echo $form->field($model, 'total_floor') ?>

    <?php // echo $form->field($model, 'rooms') ?>

    <?php // echo $form->field($model, 'year') ?>

    <?php // echo $form->field($model, 'lt') ?>

    <?php // echo $form->field($model, 'lg') ?>

    <?php // echo $form->field($model, 'country_id') ?>

    <?php // echo $form->field($model, 'region_id') ?>

    <?php // echo $form->field($model, 'city_id') ?>

    <?php // echo $form->field($model, 'agent_id') ?>

    <?php // echo $form->field($model, 'object_type_id') ?>

    <?php // echo $form->field($model, 'operation_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
