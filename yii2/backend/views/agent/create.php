<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Agent */

$this->title = 'Новий агент ('.$model->language.')';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Агенты'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agent-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
