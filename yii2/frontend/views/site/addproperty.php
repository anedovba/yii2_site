<?php

/* @var $this yii\web\View */
/* @var $model common\models\Object */


use common\models\Tag;
use dosamigos\multiselect\MultiSelect;
use kartik\file\FileInput;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use \yii\helpers\Url;
use yii\widgets\Pjax;


$this->title = Yii::t('app', 'Добавить объект');
?>
<style>
    section, select, select option{
        background-color: #eee !important;
        font-size: 15px !important;
        font-weight: normal !important;
        color: #333 !important;
        min-height: 44px !important;
    }
    h4{
       text-transform: uppercase;    font-weight: 700;    margin-bottom: 20px;
    }
</style>
        <div class="divide70"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <h3><?= Yii::t('app', 'Добавьте ваш объект')?></h3>
                    <?php if(Yii::$app->user->isGuest):?>
                    <div class="alert alert-warning"><?= Yii::t('app', 'Вы должны авторизоваться, прежде чем добавить ваш объект')?></div>
                    <?php endif;?>
                </div>
            </div> <div class="divide70"></div>
            <?php Pjax::begin(); ?>
            <?php $form = ActiveForm::begin(
                [
                    'id' => 'addprop_form',
                    'class' => 'addprop_form',
                ]
            ); ?>

            <h4>
                <?= Yii::t('app', 'Детали объекта')?>
            </h4>
                <div class="row margin30">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <?= $form->field($model, 'object_name')->textInput()->input('text', ['placeholder' => Yii::t('app', 'Название'), 'style'=>['min-height'=>'44px']])->label(false)?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <?= $form->field($model, 'object_street')->textInput()->input('text', ['placeholder' => Yii::t('app', 'Улица, дом, квартира'), 'style'=>['min-height'=>'44px']])->label(false)?>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <?= $form->field($model, 'city_id')->dropDownList(\common\models\City::getCityList(), ['prompt'=>Yii::t('app', 'Город')])->label(false) ?>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <?= $form->field($model, 'country_id')->dropDownList(\common\models\Country::getCountryList(), ['prompt'=>Yii::t('app', 'Страна')])->label(false) ?>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <?= $form->field($model, 'region_id')->dropDownList(\common\models\Region::getRegionList(), ['prompt'=>Yii::t('app', 'Регион')])->label(false) ?>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <?= $form->field($model, 'area')->textInput()->input('text', ['placeholder' => Yii::t('app', 'Площадь'), 'style'=>['min-height'=>'44px']])->label(false)?>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <?= $form->field($model, 'area_kitch')->textInput()->input('text', ['placeholder' => Yii::t('app', 'Площадь кухни'), 'style'=>['min-height'=>'44px']])->label(false) ?>

                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <?= $form->field($model, 'area_live')->textInput()->input('text', ['placeholder' => Yii::t('app', 'Площадь жилая'), 'style'=>['min-height'=>'44px']])->label(false) ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <?= $form->field($model, 'ceiling_height')->textInput()->input('text', ['placeholder' => Yii::t('app', 'Высота потолков'), 'style'=>['min-height'=>'44px']])->label(false) ?>

                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-sm-4">
                        <div class="form-group">
                            <?= $form->field($model, 'floor')->textInput()->input('text', ['placeholder' => Yii::t('app', 'Этаж'), 'style'=>['min-height'=>'44px']])->label(false) ?>

                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <?= $form->field($model, 'total_floor')->textInput()->input('text', ['placeholder' => Yii::t('app', 'Этажность'), 'style'=>['min-height'=>'44px']])->label(false) ?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">

                                    <?= $form->field($model, 'rooms')->textInput()->input('text', ['placeholder' => Yii::t('app', 'Количество комнат'), 'style'=>['min-height'=>'44px']])->label(false) ?>

                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-sm-4">

                        <div class="form-group">
                            <?= $form->field($model, 'year')->textInput()->input('text', ['placeholder' => Yii::t('app', 'Год'), 'style'=>['min-height'=>'44px']])->label(false) ?>

                         </div>
                         </div>


                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <?= $form->field($model, 'lt')->textInput(['maxlength' => true])->input('text', ['placeholder' => Yii::t('app', 'Координаты').', lat', 'style'=>['min-height'=>'44px']])->label(false) ?>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <?= $form->field($model, 'lg')->textInput(['maxlength' => true])->input('text', ['placeholder' => Yii::t('app', 'Координаты').', lgt', 'style'=>['min-height'=>'44px']])->label(false) ?>

                                </div>
                            </div>

                        </div>

                    </div>



                    <div class="col-sm-12">
                        <div class="form-group">
                            <?= $form->field($model, 'object_description')->textarea(['placeholder' => Yii::t('app', 'Описание'), 'style'=>['min-height'=>'44px'], 'rows'=>'1','cols'=>'10' ])->label(false)?>
                        </div>
                    </div>

                </div>
            <h4>
                <?= Yii::t('app', 'Дополнительная информация')?>
            </h4>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <?= $form->field($model, 'price')->textInput()->input('text', ['placeholder' => Yii::t('app', 'Цена'), 'style'=>['min-height'=>'44px']])->label(false)?>
                    </div>
                </div>
                <div class="col-sm-4 select-option">
                    <div class="form-group">
                        <section>
                        <?= $form->field($model, 'object_type_id', ['options'=>['style'=>['background-color'=>'#eee', 'font-size'=>'15px', 'font-weight'=>'normal', 'color'=>'#333', 'min-height'=>'44px']]])->dropDownList(\common\models\ObjectType::getTypeList(),['prompt'=>Yii::t('app', 'Тип объекта'), 'options'=>['style'=>['background-color'=>'#eee', 'font-size'=>'15px', 'font-weight'=>'normal', 'color'=>'#333', 'min-height'=>'44px'], 'class'=>'cs-select cs-skin-elastic']])->label(false)?>
                        </section>
                    </div>
                </div>

                <div class="col-sm-4 select-option">
                    <div class="form-group">
                        <section>
                            <?= $form->field($model, 'operation_id', ['options'=>['style'=>['background-color'=>'#eee', 'font-size'=>'15px', 'font-weight'=>'normal', 'color'=>'#333', 'min-height'=>'44px']]])->dropDownList(\common\models\Operation::getOperationList(),['prompt'=>Yii::t('app', 'Тип операции'), 'options'=>['style'=>['background-color'=>'#eee', 'font-size'=>'15px', 'font-weight'=>'normal', 'color'=>'#333', 'min-height'=>'44px'], 'class'=>'cs-select cs-skin-elastic']])->label(false)?>

                        </section>
                    </div>
                </div>
            </div>
<!--            <h4>--><?//= Yii::t('app', 'Загрузка фото')?><!--</h4>-->

            <h4><?= Yii::t('app', 'Удобства')?></h4>
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                    <?= $form->field($model, 'top') ->checkbox(['label' => Yii::t('app', 'Эксклюзив'),]) ?>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                    <?= $form->field($model, 'coditioning')->checkbox(['label' => Yii::t('app', 'Кондиционер'),])?>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                    <?= $form->field($model, 'heating')->checkbox(['label' => Yii::t('app', 'Отопление'),]) ?>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                    <?= $form->field($model, 'balcony')->checkbox(['label' => Yii::t('app', 'Балкон'),]) ?>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                    <?= $form->field($model, 'dishwasher')->checkbox(['label' => Yii::t('app', 'Посудомоечная машина'),]) ?>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                    <?= $form->field($model, 'pool')->checkbox(['label' => Yii::t('app', 'Бассейн'),]) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                    <?= $form->field($model, 'internet')->checkbox(['label' => Yii::t('app', 'Интернет'),]) ?>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                    <?= $form->field($model, 'terrace')->checkbox(['label' => Yii::t('app', 'Терраса'),]) ?>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                    <?= $form->field($model, 'microwave')->checkbox(['label' => Yii::t('app', 'Микроволновая печь'),]) ?>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                    <?= $form->field($model, 'fridge')->checkbox(['label' => Yii::t('app', 'Холодильник'),]) ?>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                    <?= $form->field($model, 'cable_tv')->checkbox(['label' => Yii::t('app', 'Кабельное тв'),]) ?>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                    <?= $form->field($model, 'security_camera')->checkbox(['label' => Yii::t('app', 'Видео наблюдение'),]) ?>
                </div>
            </div>
            <div class="divide60"></div>
<!--            <div class="row ">-->
<!--                <div class="col-sm-8">-->
<!--                    <label class="checkbox">-->
<!--                        <input type="checkbox">--><?//= Yii::t('app', 'Подписаться на рассылку')?>
<!--                    </label>-->
<!--                </div>-->
<!--            </div>-->
            <?php if(!Yii::$app->user->isGuest):?>



                <div class="form-group text-right">
                    <?= Html::submitButton(Yii::t('app', 'Добавить объект'), ['class' => 'btn btn-red btn-lg']) ?>
                </div>
            <?php endif;?>

            <?php ActiveForm::end(); ?>
            <?php Pjax::end(); ?>

        </div>
        <div class="divide70"></div>
<?php if(Yii::$app->user->isGuest):?>
        <div class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <h3><?= Yii::t('app', 'Присоединяйтесь к нашим довольным клиентам')?> </h3>
                    </div>
                    <div class="col-sm-4 text-center">
                        <a href="/site/login"><?= Yii::t('app', 'Присоединиться')?></a>
                    </div>
                </div>
            </div>
        </div>
<?php endif;?>