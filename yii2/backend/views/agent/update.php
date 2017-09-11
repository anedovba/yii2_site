<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Agent */

$this->title = 'Редактировать агента: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Агент'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Редактировать');
?>
<div class="agent-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
