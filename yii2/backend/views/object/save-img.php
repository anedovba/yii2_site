<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Object */
/* @var $form yii\widgets\ActiveForm */
$model=new \common\models\Object();
$model->id= Yii::$app->request->get('id');
?>

<div class="object-form">

    <lable>Фотографии объекта</lable>
    <?= \kartik\file\FileInput::widget([
        'name' => 'ObjectImage[attachment]',
        'options'=>[
            'multiple'=>true
        ],
        'pluginOptions' => [
            'deleteUrl' => Url::toRoute(['/object/delete-img']),
            'initialPreview'=> $model->imagesLinks,
            'initialPreviewAsData'=>true,
            'overwriteInitial'=>false,
            'initialPreviewConfig'=>$model->imagesLinksData,
            'uploadUrl' => Url::to(['/object/save-img']),
            'uploadExtraData' => [
//                'ImageManager[class]' => $model->formName(),
                'ObjectImage[object_id]' => $model->id
            ],
            'maxFileCount' => 10
        ],
        'pluginEvents' => [
            'filesorted' => new \yii\web\JsExpression('function(event, params){
                  $.post("'.Url::toRoute(["/object/sort-img","id"=>$model->id]).'",{sort: params});
            }')
        ],
    ]);?>
    <?= Html::a( 'Update', '/object/view?id='.Yii::$app->request->get('id'), ['class' => 'btn btn-primary']) ?>
</div>
