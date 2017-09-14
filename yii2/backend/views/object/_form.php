<?php


use common\models\Tag;
use dosamigos\multiselect\MultiSelect;
use kartik\widgets\Select2;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Object */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="object-form">
    <?php if(!$model->isNewRecord):?>
    <lable>Фотографии объекта</lable>
    <?= kartik\widgets\FileInput::widget([
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
//                    'ImageManager[class]' => $model->formName(),
                    'ObjectImage[object_id]' => $model->id
                ],
                'maxFileCount' => 10
            ],
            'pluginEvents' => [
                'filesorted' => new \yii\web\JsExpression('function(event, params){
                  $.post("'.Url::toRoute(["/object/sort-img","id"=>$model->id]).'",{sort: params});
            }')
            ],
    ]);
    endif;
    ?>
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
    <?= $form->field($model, 'object_type_id', ['options'=>['class'=>'col-xs-3']])->dropDownList(\common\models\ObjectType::getTypeList())?>

    <?= $form->field($model, 'operation_id', ['options'=>['class'=>'col-xs-3']])->dropDownList(\common\models\Operation::getOperationList()) ?>

        <?php    $data = ArrayHelper::map(Tag::find()->where([])->all(),'id','tag_name');?>
    <lable class="col-xs-6" style="font-weight: bold">Tags</lable>
    <?= $form->field($model, 'tags_array', ['options'=>['class'=>'col-xs-6']])->widget(MultiSelect::classname(),[
        'data' => $data,
        "options" => ['multiple'=>"multiple"],
        'name'=>'tags',
        "clientOptions" =>
            [
                "includeSelectAllOption" => true,
                'enableFiltering'=>true,
                'numberDisplayed' => 5,
                'delimiterText' => ' | ',
                'inheritClass' => true,


            ],
    ])->label(false) ?>

    </div>
    <div class="row">

    <?= $form->field($model, 'status', ['options'=>['class'=>'col-xs-3']])->dropDownList(\common\models\Object::getStatusList()) ?>

    <?= $form->field($model, 'price', ['options'=>['class'=>'col-xs-3']])->textInput()?>

    <?= $form->field($model, 'area', ['options'=>['class'=>'col-xs-3']])->textInput()?>

    <?= $form->field($model, 'area_kitch', ['options'=>['class'=>'col-xs-3']])->textInput() ?>

    <?= $form->field($model, 'area_live', ['options'=>['class'=>'col-xs-3']])->textInput() ?>

    <?= $form->field($model, 'ceiling_height', ['options'=>['class'=>'col-xs-3']])->textInput() ?>

    <?= $form->field($model, 'floor', ['options'=>['class'=>'col-xs-3']])->textInput() ?>

    <?= $form->field($model, 'total_floor', ['options'=>['class'=>'col-xs-3']])->textInput() ?>

    <?= $form->field($model, 'rooms', ['options'=>['class'=>'col-xs-3']])->textInput() ?>

    <?= $form->field($model, 'year', ['options'=>['class'=>'col-xs-3']])->textInput() ?>

    <?= $form->field($model, 'lt', ['options'=>['class'=>'col-xs-3']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lg', ['options'=>['class'=>'col-xs-3']])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country_id', ['options'=>['class'=>'col-xs-3']])->dropDownList(\common\models\Country::getCountryList()) ?>

    <?= $form->field($model, 'region_id', ['options'=>['class'=>'col-xs-3']])->dropDownList(\common\models\Region::getRegionList()) ?>

    <?= $form->field($model, 'city_id', ['options'=>['class'=>'col-xs-3']])->dropDownList(\common\models\City::getCityList()) ?>
        <?= $form->field($model, 'agent_id', ['options'=>['class'=>'col-xs-3']])->dropDownList(\common\models\Agent::getAgentList()) ?>
        <?= $form->field($model, 'object_street', ['options'=>['class'=>'col-xs-6']])->textInput(['maxlength' => true]) ?>


        <?= $form->field($model, 'object_name', ['options'=>['class'=>'col-xs-6']])->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'object_description', ['options'=>['class'=>'col-xs-12']])->textarea(['maxlength' => true]) ?>
        <div class='col-xs-3'>
            <label>Эксклюзив</label>
            <?= $form->field($model, 'top') ->checkbox(['label' => 'Да',]) ?>
        </div>
        <div class='col-xs-3'>
            <label>Кондиционер</label>
            <?= $form->field($model, 'coditioning')->checkbox(['label' => 'Да',])?>
        </div>
        <div class='col-xs-3'>
            <label>Отопление</label>
            <?= $form->field($model, 'heating')->checkbox(['label' => 'Да',]) ?>
        </div>
        <div class='col-xs-3'>
            <label>Балкон</label>
            <?= $form->field($model, 'balcony')->checkbox(['label' => 'Да',]) ?>
        </div>
        <div class='col-xs-3'>
            <label>Посудомоечная машина</label>

            <?= $form->field($model, 'dishwasher')->checkbox(['label' => 'Да',]) ?>
        </div>
        <div class='col-xs-3'>
            <label>Бассейн</label>
            <?= $form->field($model, 'pool')->checkbox(['label' => 'Да',]) ?>
        </div>
        <div class='col-xs-3'>
            <label>Интернет</label>
            <?= $form->field($model, 'internet')->checkbox(['label' => 'Да',]) ?>
        </div>
        <div class='col-xs-3'>
            <label>Терраса</label>
            <?= $form->field($model, 'terrace')->checkbox(['label' => 'Да',]) ?>
        </div>
        <div class='col-xs-3'>
            <label>Микроволновая печь</label>
            <?= $form->field($model, 'microwave')->checkbox(['label' => 'Да',]) ?>
        </div>
        <div class='col-xs-3'>
            <label>Холодильник</label>
            <?= $form->field($model, 'fridge')->checkbox(['label' => 'Да',]) ?>
        </div>
        <div class='col-xs-3'>
            <label>Кабельное тв</label>
            <?= $form->field($model, 'cable_tv')->checkbox(['label' => 'Да',]) ?>
        </div>
        <div class='col-xs-3'>
            <label>Видео наблюдение</label>
            <?= $form->field($model, 'security_camera')->checkbox(['label' => 'Да',]) ?>
        </div>

    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
