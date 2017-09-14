<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ObjectType */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Object Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="object-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update ('.$model->language.')', ['update', 'id' => $model->id,  'lang_id'=>$model->language], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'object_type_name',
            'created_at',
        ],
    ]) ?>

</div>
