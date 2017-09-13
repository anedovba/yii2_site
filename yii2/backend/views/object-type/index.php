<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ObjectTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Object Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="object-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Object Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <div class="col-xs-6">
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'id',
                'options' => ['width' => '30'],
            ],
//            'created_at',
            'object_type_name',
            [
                'class' => 'lav45\translate\grid\ActionColumn',
                'languages' => $langList,
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{delete}'
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div></div>
