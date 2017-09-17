<?php

/* @var $this yii\web\View */
/* @var $agent \common\models\Agent */
/* @var $newobjects \common\models\Object */
/* @var $agentobjects \common\models\Object */

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use \yii\helpers\Url;

$this->title = Yii::t('app', 'Карта агента');
?>
<div class="divide70"></div>
        <div class="container">
            <div class="row">
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
                  
                </div><!--sidebar-->
                <div class="col-md-9">
                    <div class="row property-listing">
                        <div class="col-sm-4 margin30">
                            <div class="image">
                                <div class="content">
                                    <img src="/uploads/images/800x/<?=$agent->user->image?>" class="img-responsive" alt="propety">

                                </div><!--content-->
                            </div><!--image-->
                        </div><!--image col-->
                        <div class="col-sm-8">
                            <h3><a href="#"><?= $agent->name?></a></h3>
                            <em><?= $agent->phone?></em><br>
                            <a href="#contactform" class="btn btn-default"><?= Yii::t('app', 'Связаться со мной')?></a>
                            <p>
                                <?= $agent->position?>
                            </p>
                            <p class="agent-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </p> 
                            <p>
                                <a href="#"><?= $agent->user->email?></a>
                            </p>
                        </div>
                    </div><!--property listing row-->
                    <div class="clearfix margin20"></div>
                    <h3><?= Yii::t('app', 'Объекты')?></h3>
                    <div class="row">
                        <div class="all-property-slider">

                            <div id="property-slider" class="owl-carousel owl-theme">
                                <?php foreach ($agentobjects as $one):?>
                                <div class="item">
                                    <div class="property clearfix">
                                        <div class="image">
                                            <div class="content">
                                                <img src="/uploads/images/property/<?=$one->mainImage->image?>" class="img-responsive" alt="propety">
                                                <span class="label-property"><?= $one->operation->operation_name?></span>

                                            </div><!--content-->
                                        </div><!--image-->
                                        <div class="property-detail">
                                            <h5 class="title"><a href="<?=Url::to(['/site/propertydetail', 'id'=>$one->id])?>"><?= $one->object_name?></a></h5>
                                            <span class="location"><?=number_format($one->price, '0', ',', ' ') ?> грн</span>
                                            <div class="pull-left">
                                                <p><b><?= Yii::t('app', 'Площадь')?>:</b> <?=$one->area?><sup>2</sup></p>
                                            </div>
<!--                                            <div class="pull-right">-->
<!--                                                <span><img src="/img/estate/bedrooms.png" alt=""> 4</span>-->
<!--                                                <span><img src="/img/estate/bathrooms.png" alt=""> 3</span>-->
<!--                                            </div>-->
                                        </div><!--property details-->
                                    </div><!--property-->
                                </div>
                                <?php endforeach; ?>
                            </div><!--owl slider-->
                            <a name="contactform"></a>
                        </div><!--all property slider-->
                    </div><!--all property row-->
                    <div class="divide50"></div>

                    <h4 class="margin20"><?= Yii::t('app', 'Оставить сообщение')?></h4>
                     
                        <form role="form" class="agent-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="<?= Yii::t('app', 'Имя')?>">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email">   
                            </div>
                            <div class="form-group">

                                <section class=" select-option">
                                    <?= Html::activeDropDownList($agent, 'name',
                                        ArrayHelper::map(\common\models\Agent::find()->all(), 'id', 'name'), ['class'=>"cs-select cs-skin-elastic"]) ?>

                                </section>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" placeholder="<?= Yii::t('app', 'Сообщение')?>"></textarea>
                            </div>
                            <div class="form-group text-right">
                                <!--                                <button type="submit" class="btn btn-red btn-lg">Send</button>-->
                                <a href="#" class="btn btn-red btn-lg"><?= Yii::t('app', 'Отправить')?></a>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        <div class="divide40"></div>
