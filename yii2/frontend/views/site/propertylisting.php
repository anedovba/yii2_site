<?php

/* @var $this yii\web\View */
/* @var $types \common\models\ObjectType */
/* @var $operations \common\models\Operation */
/* @var $objects \common\models\Object */
/* @var $newobjects \common\models\Object */
/* @var $agents \common\models\Agent */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use \yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = Yii::t('app', 'Объекты');
?>
<style>
    .page_size {
        font-size: 14px !important;
        font-weight: normal !important;
        color: #EA0000 !important;
        min-height: 34px !important;
        margin-top: 20px;
        border-radius: 4px;
        background-color: #eee !important;
    }

</style>
        <div class="divide70"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar-box">
                        <h3><?= Yii::t('app', 'Категории')?></h3>
                        <ul class="list-unstyled cat-list">
<?php foreach ($operations as $operation):?>
                            <li><a href="/site/propertylisting"><?= $operation->operation_name?> (<?=\common\models\Object::objectsCountOper($operation->id)?>)</a></li>
<?php endforeach; ?>
                            <?php foreach ($types as $type):?>
                            <li><a href="/site/propertylisting"><?= $type->object_type_name?> (<?=\common\models\Object::objectsCountType($type->id)?>)</a></li>
                            <?php endforeach; ?>
                            <li><a href="/site/propertylisting"><?= Yii::t('app', 'Последние размещения')?> (<?=count($newobjects)?>)</a></li>
                        </ul>
                    </div><!--sidebar box-->
                    <div class="sidebar-box">
                        <h3><?= Yii::t('app', 'Недавно добавили')?></h3>
                       <?php $i=0; foreach ($newobjects as $one):
                           if($i==3) break;?>
                        <div class="media">
                            <div class="media-left">
                                <div class="image">
                                    <div class="content">
                                      <img src="/uploads/images/property/<?=$one->mainImage->image?>" width="100px"/>
                                    </div><!--content-->
                                </div><!--image-->
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><?= $one->operation->operation_name ?></h4>
                                <em><?= $one->objectType->object_type_name?></em>
                                <a href="<?=Url::to(['/site/propertydetail', 'id'=>$one->id])?>" class="btn btn-default btn-red"><?= Yii::t('app', 'Детали')?></a>
                            </div>
                        </div><!--media-->
                        <?php $i++; endforeach; ?>
                    </div><!--sidebar box-->
                    <div class="sidebar-box">
                        <h3><?= Yii::t('app', 'Лучшие агенты')?></h3>
                       <?php $i=0; foreach ($agents as $agent):
                           if($i==2) break;?>
                        <div class="media">
                            <div class="media-left">
                                <div class="image">
                                    <div class="content">
<!--                                        <a href="#"><i class="fa fa-search-plus"></i></a>-->
                                        <img src="/uploads/images/800x/<?=$agent->user->image?>" width="70" alt="agent">
                                    </div><!--content-->
                                </div><!--image-->
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="<?=\yii\helpers\Url::to(['/site/agentdetail', 'id'=>$agent->id])?>"><?= $agent->name?></a></h4>
                                <em><?= $agent->phone?></em>
                                <a href="#"><i class="fa fa-envelope"></i> <?= $agent->user->email?></a>
                            </div>
                        </div><!--media-->
                        <?php $i++; endforeach; ?>

                    </div><!--sidebar box-->
                </div><!--sidebar-->
                <div class="col-md-9">
                    <h3 class="title-section"><?= Yii::t('app', 'Список объектов')?></h3>
                    <?php foreach ($objects as $object):?>
                    <div class="row property-listing">
                        <div class="col-sm-4 margin30">
                            <div class="image">
                                <div class="content">
                                    <?php

                                    $carousel1=[];
                                    foreach ($object->objectImages as $one){
                                        $carousel1[]=[
                                            'content' => '<img class="img-responsive" data-bgposition="center center" style="max-height: 175px; margin: 0 auto" style="width:300px;" src="/uploads/images/property/'.$one->image.'"/>',
                                        ];
                                    }
                                    echo \yii\bootstrap\Carousel::widget ( [
                                        'items' => $carousel1,
                                        'options' => ['class' => 'carousel slide'],
                                    ]);
                                    ?>
                                    <span class="label-property"><?= $object->operation->operation_name?></span>
                                    <span class="label-price"><?=number_format($object->price, '0', ',', ' ') ?> грн</span>
                                </div><!--content-->
                            </div><!--image-->
                        </div><!--image col-->
                        <div class="col-sm-8">
                            <h3><a href="<?=Url::to(['/site/propertydetail', 'id'=>$object->id])?>"><?= $object->object_name?></a></h3>
                            <em><?= $object->country->country_name?>, <?= $object->region->region_name?>, <?= $object->city->city_name?>, <?= $object->object_street?> </em><br>
                            <a href="/site/agentdetail#contactform" class="btn btn-default"><?= Yii::t('app', 'Свяжитесь с нами')?></a>
                            <p>
<!--                                --><?//= Yii::t('app', 'Детальное описание')?>
                            </p>
                            <div class="clearfix">
<!--                                <div class="pull-left">-->
<!--                                    <span><img src="/img//estate/bedrooms.png" alt=""> 4</span>-->
<!--                                    <span><img src="/img/estate/bathrooms.png" alt=""> 3</span>-->
<!--                                </div>-->
                                <div class="pull-left">
                                    <p><b><?= Yii::t('app', 'Площадь')?>:</b> <?= $object->area?> m<sup>2</sup></p>
                                </div>
                                <div class="pull-right">
                                    <a href="<?=Url::to(['/site/propertydetail', 'id'=>$object->id])?>"><i class="fa fa-chevron-circle-right"></i> <?= Yii::t('app', 'Больше информации')?></a>
                                </div>
                            </div>
                        </div>
                    </div><!--property listing row-->


                    <nav>

                            <?php endforeach;
                            echo LinkPager::widget([
                                'pagination' => $pages,
                                'options'=>['class'=>'pagination pull-right']
                            ]);
                            ?>
<?php $form= ActiveForm::begin(['action' => [''],'method' => 'get']); ?>
<?=Html::dropDownList('page_size', $pages->pageSize,  [
    '1' => '1',
    '2' => '2',
    '3' => '3',
    '4' => '4',
], ['prompt' => '--- per page ---', 'onchange'=>'this.form.submit()', 'class'=>'page_size'])?>



<?php ActiveForm::end();?>

</nav><!--pagination-->
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="divide40"></div>