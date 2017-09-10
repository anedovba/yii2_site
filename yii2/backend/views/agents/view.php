<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Agents */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Агенты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agents-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
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
            'name',
            'phone',
            [
                'attribute'=>'user_id',
                'value'=>$model->user->username,
            ],
//            'user_id',
            'position',
            'description',
            'name_ru',
            'position_ru',
            'description_ru',
        ],
    ]) ?>

</div>
