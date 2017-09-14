<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ObjectSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$model=new \common\models\Object();
$this->title = 'Objects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="object-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Object ('.$model->language.')', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'id',
                'options' => ['width' => '10'],
            ],
//            'created_at',
//            'status',
            [
                    'attribute'=>'object_name',
//                'options' => ['style' => ' max-width: 150px;'],
//                'contentOptions' => ['style' => 'width: 150px; max-width: 150px; word-wrap: break-word; overflow-wrap:  break-word; '],
            ],
            [
                'attribute'=>'price',
                'options' => ['style' => 'width: 30px; max-width: 30px;'],
                'contentOptions' => ['style' => 'width: 30px; max-width: 30px;'],
            ],

//            'top',
            // 'coditioning',
            // 'heating',
            // 'balcony',
            // 'dishwasher',
            // 'pool',
            // 'internet',
            // 'terrace',
            // 'microwave',
            // 'fridge',
            // 'cable_tv',
            // 'security_camera',
            // 'area',
            // 'area_kitch',
            // 'area_live',
            // 'ceiling_height',
            // 'floor',
            // 'total_floor',
            // 'rooms',
            // 'year',
            // 'lt',
            // 'lg',
//            ['attribute'=>'country_name',
//                'value'=>'country.country_name',],
            ['attribute'=>'region_name',
                'value'=>'region.region_name',],
            ['attribute'=>'city_name',
                'value'=>'city.city_name',],
             'object_street',
//             'agent_id',
            // 'object_type_id',
            // 'operation_id',
            [
                'class' => 'lav45\translate\grid\ActionColumn',
                'languages' => $langList,

            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}{delete}'
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
