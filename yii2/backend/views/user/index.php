<?php

use backend\models\User;
use backend\models\UserRole;
use kartik\widgets\DatePicker;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\datecontrol\DateControl;
/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пользователи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
<!--    --><?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать нового пользователя', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'smallImage:image',
            'username',
//            'auth_key',
//            'password_hash',
//            'password_reset_token',
             'email:email',
             ['attribute'=>'status',
                 'filter'=>\backend\models\UserStatus::getStatusList(),
                 'value'=>'status0.name' ],
//             ['attribute'=>'created_at',
//                 'format'=> 'date',
//                'filter'=>\kartik\field\FieldRange::widget([
//                    'type'=>\kartik\field\FieldRange::INPUT_WIDGET,
//                    'model'=>$searchModel,
//                    'label' =>false,
//                    'separator'=>false,
//                    'widgetClass' => DateControl::classname(),
//                    'widgetOptions1' => [
//                        'saveFormat' => 'php:U'
//                    ],
//                    'widgetOptions2' => [
//                        'saveFormat' => 'php:U'
//                    ],
//                    'attribute1'=>'from',
//                    'attribute2'=>'to',
//                ]),
//
//                         'value'=>'created_at',
//                 ],
            ['attribute'=>'created_at',
                'format'=> 'date',
                'filter'=>DatePicker::widget([
                    'model'=>$searchModel,
                    'options' => ['placeholder' => 'Start date'],
                    'options2' => ['placeholder' => 'End date'],
                    'type'=>DatePicker::TYPE_RANGE,
                    'separator' => '<i class="glyphicon glyphicon-resize-horizontal"></i>',
                    'pluginOptions' => [
                        'autoclose'=>true,
                        'format' => 'dd.mm.yy',
                        'todayHighlight'=>true,
                    ],
                    'attribute'=>'from',
                    'attribute2'=>'to',
                ]),
                'value'=>'created_at',
            ],
            ['attribute'=>'updated_at',
                'format'=> 'date',
                'filter'=>DatePicker::widget([
                    'model'=>$searchModel,
                    'options' => ['placeholder' => 'Start date'],
                    'options2' => ['placeholder' => 'End date'],
                    'type'=>DatePicker::TYPE_RANGE,
                    'separator' => '<i class="glyphicon glyphicon-resize-horizontal"></i>',
                    'pluginOptions' => [
                        'autoclose'=>true,
                        'format' => 'dd.mm.yy',
                        'todayHighlight'=>true,
                    ],
                    'attribute'=>'from_up',
                    'attribute2'=>'to_up',
                ]),
                'value'=>'updated_at',
            ],
//             'updated_at:date',
             ['attribute'=>'subscribe',
                 'filter'=>User::getSubscribeList(),
                 'value'=>'subscribeName'],
            ['attribute'=>'role',
                'filter'=>UserRole::getRoleList(),
                'value'=>'role0.role' ],

            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Действия',
                'headerOptions' => ['width' => '80'],
                'template' => '{view} {update} {delete}{link}',
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
