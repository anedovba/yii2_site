<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Object */

$this->title = $model->object_name;
$this->params['breadcrumbs'][] = ['label' => 'Objects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="object-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update('.$model->language.')', ['update', 'id' => $model->id, 'lang_id'=>$model->language], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Add pictures', ['save-img', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>
    <lable>Фотографии</lable>
    <?php
    $fotorama = \metalguardian\fotorama\Fotorama::begin(
        [
            'options' => [
                'loop' => true,
                'hash' => true,
                'ratio' => 150/50,
            ],
            'spinner' => [
                'lines' => 20,
            ],
            'tagName' => 'span',
            'useHtmlData' => false,
            'htmlOptions' => [
                'class' => 'custom-class',
                'id' => 'custom-id',
            ],
        ]
    );

    foreach ($model->objectImages as $one) {
        echo Html::img($one->getImageAll());
    }

    $fotorama->end(); ?>
    <div class="row">
<div class="col-xs-6">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'object_name',
            'object_description',
            'created_at',
//            'status',
            ['attribute'=>'status',
                'value'=>$model->getStatusName()],
            'price',
            ['attribute'=>'top',
                'value'=>$model->getTopName()],
            ['attribute'=>'coditioning',
                'value'=>$model->getCondName()],
            ['attribute'=>'heating',
                'value'=>$model->getHeatName()],
            ['attribute'=>'balcony',
                'value'=>$model->getBalcName()],
            ['attribute'=>'dishwasher',
                'value'=>$model->getDWashName()],

            ['attribute'=> 'pool',
                'value'=>$model->getPoolName()],

            ['attribute'=> 'internet',
                'value'=>$model->getIntName()],
            ['attribute'=> 'terrace',
                'value'=>$model->getTerName()],
            ['attribute'=> 'microwave',
                'value'=>$model->getMWavName()],
            ['attribute'=> 'fridge',
                'value'=>$model->getFrName()],
            ['attribute'=> 'cable_tv',
                'value'=>$model->getTvtName()],
            ['attribute'=> 'cable_tv',
                'value'=>$model->getTvtName()],
        ],
    ])
    ?>
    <lable style="font-weight: bold">Tags</lable>
<div class="well">
    <?php foreach ($model->tags as $one):?>
    <?= $one->tag->tag_name;?> <br>
    <?php endforeach; ?>
</div>
</div>
        <div class="col-xs-6">
            <?= DetailView::widget([
                  'model'=>$model,
                'attributes'=>[
                    ['attribute'=> 'security_camera',
                        'value'=>$model->getCameraName()],
                    'area',
                    'area_kitch',
                    'area_live',
                    'ceiling_height',
                    'floor',
                    'total_floor',
                    'rooms',
                    'year',
                    'lt',
                    'lg',
                    ['attribute'=> 'country_id',
                        'value'=>$model->country->country_name],

                    ['attribute'=> 'region_id',
                        'value'=>$model->region->region_name],

                    ['attribute'=> 'city_id',
                        'value'=>$model->city->city_name],
                    'object_street',
                    ['attribute'=> 'agent_id',
                        'value'=>$model->agent->name],
                    ['attribute'=> 'object_type_id',
                        'value'=>$model->objectType->object_type_name],
                    ['attribute'=> 'operation_id',
                        'value'=>$model->operation->operation_name],
                ]
]) ?>
        </div>
</div>

</div>
