<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AgentLang */

$this->title = Yii::t('app', 'Create Agent Lang');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Agent Langs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agent-lang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
