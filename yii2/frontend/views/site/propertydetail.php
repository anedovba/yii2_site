<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use \yii\helpers\Url;

$this->title = Yii::t('app', 'Объект');
?>
        <div class="divide70"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <h3><?= Yii::t('app', 'Адрес')?></h3>
                    <div class="thumb-slider">
                        <div id="slider" class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img src="/img/estate/img-1.jpg" alt="" class="img-responsive">
                                </li>
                                <li>
                                    <img src="/img/estate/img-2.jpg"  alt="" class="img-responsive">
                                </li>
                                <li>
                                    <img src="/img/estate/img-3.jpg"  alt="" class="img-responsive">
                                </li>
                                <li>
                                    <img src="/img/estate/img-4.jpg"  alt="" class="img-responsive">
                                </li>
                                <li>
                                    <img src="/img/estate/img-5.jpg"  alt="" class="img-responsive">
                                </li>
                                <li>
                                    <img src="/img/estate/img-6.jpg"  alt="" class="img-responsive">
                                </li>
                            </ul>
                        </div>
                        <div id="carousel" class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img src="/img/estate/img-1.jpg" alt="" class="img-responsive">
                                </li>
                                <li>
                                    <img src="/img/estate/img-2.jpg"  alt="" class="img-responsive">
                                </li>
                                <li>
                                    <img src="/img/estate/img-3.jpg"  alt="" class="img-responsive">
                                </li>
                                <li>
                                    <img src="/img/estate/img-4.jpg"  alt="" class="img-responsive">
                                </li>
                                <li>
                                    <img src="/img/estate/img-5.jpg"  alt="" class="img-responsive">
                                </li>
                                <li>
                                    <img src="/img/estate/img-6.jpg"  alt="" class="img-responsive">
                                </li>
                            </ul>
                        </div>
                    </div><!--thumb slider-->
                    <div class="property-meta clearfix margin20">
                        <span><?= Yii::t('app', 'Аренда')?></span>
                        <span><?= Yii::t('app', 'Площадь')?> 5000</span>
                        <span>1 <?= Yii::t('app', 'ванные')?></span>
                        <span>3 <?= Yii::t('app', 'спальни')?></span>
                        <span>1 <?= Yii::t('app', 'парковка')?></span>
                    </div><!--property meta-->
                    <div class="property-description margin20">
                        <p>
                            <?= Yii::t('app', 'В квартире сделан дорогой, качественный евроремонт.')?>
                        </p>
                        <p>
                           <?= Yii::t('app', 'Кондиционер, две плазмы, холодильник, стиральная машина, встроенный духовой шкаф, варочная поверхность, вытяжка. Установлен двухконтурный котёл. Оборудован тёплый пол. Проведено кабельное и интернет - есть WI-FI. Ведётся видеонаблюение. Полностью укомплектована дорогой мебелью и техникой. Есть сигнализация и встроенный сейф. Квартира свободна - можно заселяться!')?>
                        </p>
                    </div><!--description-->
                    <div class="additional-amenities">
                        <span class="available"><i class="fa fa-check-square"></i> <?= Yii::t('app', 'Кондиционер')?></span>
                        <span class="available"><i class="fa fa-check-square"></i> <?= Yii::t('app', 'Отопление')?></span>
                        <span class="navailable"><i class="fa fa-times"></i> <?= Yii::t('app', 'Балкон')?></span>
                        <span class="available"><i class="fa fa-check-square"></i> <?= Yii::t('app', 'Посудомойная машина')?></span>
                        <span class="navailable"><i class="fa fa-times"></i> <?= Yii::t('app', 'Басейн')?></span>
                        <span class="available"><i class="fa fa-check-square"></i> <?= Yii::t('app', 'Интернет')?></span>
                        <span class="navailable"><i class="fa fa-times"></i> <?= Yii::t('app', 'Терасса')?></span>
                        <span class="available"><i class="fa fa-check-square"></i> <?= Yii::t('app', 'Микроволновка')?></span>
                        <span class="navailable"><i class="fa fa-times"></i> <?= Yii::t('app', 'Холодильник')?></span>
                        <span class="navailable"><i class="fa fa-check-square"></i> <?= Yii::t('app', 'Кабельное ТВ')?></span>
                        <span class="available"><i class="fa fa-check-square"></i> <?= Yii::t('app', 'Видеонаблюдение')?></span>
<!--                        <span class="available"><i class="fa fa-check-square"></i> Toaster</span>-->
<!--                        <span class="navailable"><i class="fa fa-times"></i> Grill</span>-->
<!--                        <span class="navailable"><i class="fa fa-times"></i> Oven</span>-->
<!--                        <span class="available"><i class="fa fa-check-square"></i> Fans</span>-->
                    </div>

                    <div class="divide30"></div>
                    <h3><?= Yii::t('app', 'Карта')?></h3>
                    <div id="property-map" style="width:100%;height: 400px;">
                    </div>
                    <div class="divide60"></div>

                </div><!--content col-->
                <div class="col-md-3">
                    <div class="sidebar-box">
                        <h3><?= Yii::t('app', 'Реклама')?></h3>
                        <img src="/img/estate/ad.jpg" class="img-responsive" alt="">
                    </div><!--sidebar box-->
                    <div class="sidebar-box">
                        <h3><?= Yii::t('app', 'Недавно добавили')?></h3>
                        <div class="media">
                            <div class="media-left">
                                <div class="image">
                                    <div class="content">
                                        <a href="#"><i class="fa fa-search-plus"></i></a>
                                        <img src="/img/estate/sm-1.jpg" width="100" alt="propety">
                                    </div><!--content-->
                                </div><!--image-->
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#"><?= Yii::t('app', 'Адрес')?></a></h4>
                                <em><?= Yii::t('app', 'Город')?></em>
                                <a href="/site/propertydetail" class="btn btn-default btn-red"><?= Yii::t('app', 'Детали')?></a>
                            </div>
                        </div><!--media-->
                        <div class="media">
                            <div class="media-left">
                                <div class="image">
                                    <div class="content">
                                        <a href="#"><i class="fa fa-search-plus"></i></a>
                                        <img src="/img/estate/sm-1.jpg" width="100" alt="propety">
                                    </div><!--content-->
                                </div><!--image-->
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#"><?= Yii::t('app', 'Адрес')?></a></h4>
                                <em><?= Yii::t('app', 'Город')?></em>
                                <a href="/site/propertydetail" class="btn btn-default btn-red"><?= Yii::t('app', 'Детали')?></a>
                            </div>
                        </div><!--media-->
                        <div class="media">
                            <div class="media-left">
                                <div class="image">
                                    <div class="content">
                                        <a href="#"><i class="fa fa-search-plus"></i></a>
                                        <img src="/img/estate/sm-1.jpg" width="100" alt="propety">
                                    </div><!--content-->
                                </div><!--image-->
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#"><?= Yii::t('app', 'Адрес')?></a></h4>
                                <em><?= Yii::t('app', 'Город')?></em>
                                <a href="/site/propertydetail" class="btn btn-default btn-red"><?= Yii::t('app', 'Детали')?></a>
                            </div>
                        </div><!--media-->
                    </div><!--sidebar box-->
                    <div class="sidebar-box">
                        <h3><?= Yii::t('app', 'Лучшие агенты')?></h3>
                        <div class="media">
                            <div class="media-left">
                                <div class="image">
                                    <div class="content">
                                        <a href="#"><i class="fa fa-search-plus"></i></a>
                                        <img src="/img/team-3.jpg" width="70" alt="agent">
                                    </div><!--content-->
                                </div><!--image-->
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="/r-agent-detail.php"><?= Yii::t('app', 'Имя')?></a></h4>
                                <em>+38 050 999 99 99</em>
                                <a href="#"><i class="fa fa-envelope"></i> name@red.kiev.ua</a>
                            </div>
                        </div><!--media-->
                        <div class="media">
                            <div class="media-left">
                                <div class="image">
                                    <div class="content">
                                        <a href="#"><i class="fa fa-search-plus"></i></a>
                                        <img src="/img/team-1.jpg" width="70" alt="agent">
                                    </div><!--content-->
                                </div><!--image-->
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="/r-agent-detail.php"><?= Yii::t('app', 'Имя')?></a></h4>
                                <em>+38 067 111 11 11</em>
                                <a href="#"><i class="fa fa-envelope"></i> name@red.kiev.ua</a>
                            </div>
                        </div><!--media-->
                    </div><!--sidebar box-->
                </div><!--sidebar-->
            </div>
        </div>
        <div class="divide40"></div>

