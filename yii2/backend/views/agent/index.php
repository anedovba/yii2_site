<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use common\models\Agent;
/* @var $this yii\web\View */
/* @var $searchModel common\models\AgentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model common\models\Agent*/
$model=new Agent();
$this->title = 'Агенты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agent-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Новый агент (' . $model->language . ')', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'id',
                'options' => ['width' => '30'],
            ],
            ['attribute'=>'smallImage',
                'format'=>'image',
//                'filter'=>'image',
                'value'=>'user.smallImage',
//                'value'=>\common\models\Agents::getImg('user.image'),
            ],
//            'user_id',
//            [
//                'attribute'=>'user_id',
//                'value'=>'user.username'
//            ],
            'name',
            'phone',
            'position',
            'description',
            [
                'class' => 'lav45\translate\grid\ActionColumn',
                'languages' => $langList,
            ],
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{delete}'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
