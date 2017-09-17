<?php

/* @var $this yii\web\View */
/* @var $obj \common\models\Object */
/* @var $newobjects \common\models\Object */
/* @var $agents \common\models\Agent */

use yii\helpers\Html;
use \yii\helpers\Url;

$this->title = Yii::t('app', 'Объект');
?>
        <div class="divide70"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <h3><?= $obj->country->country_name?>, <?= $obj->region->region_name?>, <?= $obj->city->city_name?>, <?= $obj->object_street?> </h3>
                    <div class="thumb-slider">
                        <div id="slider" class="flexslider">
                            <ul class="slides">
                                <?php foreach ($obj->objectImages as $img):?>
                                <li>
                                    <img src="/uploads/images/property/<?=$img->image?>" alt="" class="img-responsive">
                                </li>
                               <?php endforeach; ?>
                            </ul>
                        </div>
                        <div id="carousel" class="flexslider">
                            <ul class="slides">
                                <?php foreach ($obj->objectImages as $img):?>
                                    <li>
                                        <img src="/uploads/images/property/<?=$img->image?>" alt="" class="img-responsive">
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div><!--thumb slider-->
                    <div class="property-meta clearfix margin20">
                        <span><?= $obj->operation->operation_name?></span>
                        <span><?= Yii::t('app', 'Площадь').' '.$obj->area?> m<sup>2</sup></span>
                        <span> <?=number_format($obj->price, '0', ',', ' ') ?> грн</span>
                        <?php if(isset($obj->area_kitch)&&$obj->area_kitch!=0){?>
                            <span>Кухня <?= $obj->area_kitch ?></span>
                        <?php }?>
                        <?php if(isset($obj->area_live)&&$obj->area_live!=0){?>
                            <span><?= Yii::t('app', 'Жилая')?> <?= $obj->area_live ?></span>
                        <?php }?>
                        <?php if(isset($obj->ceiling_height)&&$obj->ceiling_height!=0){?>
                            <span><?= Yii::t('app', 'Потолок')?> <?= $obj->ceiling_height ?> m</span>
                        <?php }?>
                        <?php if(isset($obj->floor)&&$obj->floor!=0){?>
                            <span><?= Yii::t('app', 'Этаж')?> <?= $obj->floor ?> </span>
                        <?php }?>
                        <?php if(isset($obj->total_floor)&&$obj->total_floor!=0){?>
                            <span><?= Yii::t('app', 'Всего этажей')?> <?= $obj->total_floor ?> </span>
                        <?php }?>
                        <?php if(isset($obj->rooms)&&$obj->rooms!=0){?>
                            <span><?= Yii::t('app', 'Комнаты')?> <?= $obj->rooms ?> </span>
                        <?php }?>
                        <?php foreach ($obj->tags as $tag):?>
                        <span><?= $tag->tag->tag_name?></span>
                        <?php endforeach; ?>
                    </div><!--property meta-->
                    <div class="property-description margin20">
                        <p>
                            <?= $obj->object_description?>

                        </p>
                    </div><!--description-->
                    <div class="additional-amenities">
                      <?=$obj->coditioning?'<span class="available"><i class="fa fa-check-square"></i>':'<span class="navailable"><i class="fa fa fa-times"></i>'?> <?= Yii::t('app', 'Кондиционер')?></span>
                        <?=$obj->heating?'<span class="available"><i class="fa fa-check-square"></i>':'<span class="navailable"><i class="fa fa fa-times"></i>'?> <?= Yii::t('app', 'Отопление')?></span>
                        <?=$obj->balcony?'<span class="available"><i class="fa fa-check-square"></i>':'<span class="navailable"><i class="fa fa fa-times"></i>'?>  <?= Yii::t('app', 'Балкон')?></span>
                        <?=$obj->dishwasher?'<span class="available"><i class="fa fa-check-square"></i>':'<span class="navailable"><i class="fa fa fa-times"></i>'?>  <?= Yii::t('app', 'Посудомойная машина')?></span>
                        <?=$obj->pool?'<span class="available"><i class="fa fa-check-square"></i>':'<span class="navailable"><i class="fa fa fa-times"></i>'?> <?= Yii::t('app', 'Басейн')?></span>
                        <?=$obj->internet?'<span class="available"><i class="fa fa-check-square"></i>':'<span class="navailable"><i class="fa fa fa-times"></i>'?>  <?= Yii::t('app', 'Интернет')?></span>
                        <?=$obj->terrace?'<span class="available"><i class="fa fa-check-square"></i>':'<span class="navailable"><i class="fa fa fa-times"></i>'?>  <?= Yii::t('app', 'Терасса')?></span>
                        <?=$obj->microwave?'<span class="available"><i class="fa fa-check-square"></i>':'<span class="navailable"><i class="fa fa fa-times"></i>'?>  <?= Yii::t('app', 'Микроволновка')?></span>
                        <?=$obj->fridge?'<span class="available"><i class="fa fa-check-square"></i>':'<span class="navailable"><i class="fa fa fa-times"></i>'?> <?= Yii::t('app', 'Холодильник')?></span>
                        <?=$obj->cable_tv?'<span class="available"><i class="fa fa-check-square"></i>':'<span class="navailable"><i class="fa fa fa-times"></i>'?>  <?= Yii::t('app', 'Кабельное ТВ')?></span>
                        <?=$obj->security_camera?'<span class="available"><i class="fa fa-check-square"></i>':'<span class="navailable"><i class="fa fa fa-times"></i>'?>  <?= Yii::t('app', 'Видеонаблюдение')?></span>
                    </div>

                    <div class="divide30"></div>
                    <h3><?= Yii::t('app', 'Карта')?></h3>
                    <?php
//                    $markers = [];

                        $carousel=[];
                        foreach ($obj->objectImages as $one){
                            $carousel[]=[
                                'content' => '<img class="img-responsive" data-bgposition="center center" style="max-height: 175px; margin: 0 auto" style="width:225px;height:175px" src="/uploads/images/property/'.$one->image.'"/>',
                            ];
                        }
                        $c= \yii\bootstrap\Carousel::widget ( [
                            'items' => $carousel,
                            'options' => ['class' => 'carousel slide']
                        ]);
                        $marker = new \dosamigos\google\maps\overlays\Marker(['title' => $obj->object_name, 'position' => new \dosamigos\google\maps\LatLng(['lat' => $obj->lt, 'lng' => $obj->lg]), 'icon'=>'/img/estate/pin.png']);
                        $content = '<h4>' . \yii\helpers\Html::a($obj->object_name, ['/location/view', 'id' => $obj->id]) .'</h4><hr><p>'.$obj->operation->operation_name.'</p>'. $c;
                        $marker->attachInfoWindow(new \dosamigos\google\maps\overlays\InfoWindow(['content' => $content]));
//                        $markers[] = $marker;
                    $coord = new \dosamigos\google\maps\LatLng(['lat' => $obj->lt, 'lng' => $obj->lg]);
//                    $bounds = \dosamigos\google\maps\LatLngBounds::getBoundsOfMarkers($marker);
                    $map = new \dosamigos\google\maps\Map(['center' => $coord, 'zoom' => 14, 'width' => '100%', 'height' => '100%']);
//                    foreach ($markers as $marker) {
                        $map->addOverlay($marker);
//                    }
                    echo $map->display();
                    ?>
                    <div class="divide60"></div>

                </div><!--content col-->
                <div class="col-md-3">
                    <div class="sidebar-box">
                        <h3><?= Yii::t('app', 'Реклама')?></h3>
                        <img src="/img/estate/ad.jpg" class="img-responsive" alt="">
                    </div><!--sidebar box-->
                    <div class="sidebar-box">
                        <h3><?= Yii::t('app', 'Недавно добавили')?></h3>
                        <?php foreach ($newobjects as $one):?>
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
                            <?php endforeach; ?>

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
            </div>
        </div>
        <div class="divide40"></div>

