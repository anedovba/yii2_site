<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AgentLang */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Agent Lang',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Agent Langs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="agent-lang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
