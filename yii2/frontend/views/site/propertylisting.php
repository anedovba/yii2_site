<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use \yii\helpers\Url;

$this->title = Yii::t('app', 'Объекты');
?>
        <div class="divide70"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar-box">
                        <h3><?= Yii::t('app', 'Категории')?></h3>
                        <ul class="list-unstyled cat-list">
                            <li><a href="/site/propertylisting"><?= Yii::t('app', 'Аренда')?> (5)</a></li>
                            <li><a href="/site/propertylisting"><?= Yii::t('app', 'Продажа')?> (3)</a></li>
                            <li><a href="/site/propertylisting"><?= Yii::t('app', 'Новые места')?> (17)</a></li>
                            <li><a href="/site/propertylisting"><?= Yii::t('app', 'Последние размещения')?> (20)</a></li>
                        </ul>
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
                                <h4 class="media-heading"><a href="#"><?= Yii::t('app', 'Название')?></a></h4>
                                <em><?= Yii::t('app', 'Адрес')?></em>
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
                                <h4 class="media-heading"><a href="#"><?= Yii::t('app', 'Название')?></a></h4>
                                <em><?= Yii::t('app', 'Адрес')?></em>
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
                                <h4 class="media-heading"><a href="#"><?= Yii::t('app', 'Название')?></a></h4>
                                <em><?= Yii::t('app', 'Адрес')?></em>
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
                                <h4 class="media-heading"><a href="/site/agentdetail"><?= Yii::t('app', 'Имя')?></a></h4>
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
                                <h4 class="media-heading"><a href="/site/agentdetail"><?= Yii::t('app', 'Имя')?></a></h4>
                                <em>+38 067 111 11 11</em>
                                <a href="#"><i class="fa fa-envelope"></i> name@red.kiev.ua</a>
                            </div>
                        </div><!--media-->
                    </div><!--sidebar box-->
                </div><!--sidebar-->
                <div class="col-md-9">
                    <h3 class="title-section"><?= Yii::t('app', 'Список объектов')?></h3>
                    <div class="row property-listing">
                        <div class="col-sm-4 margin30">
                            <div class="image">
                                <div class="content">
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <img src="/img/estate/sm-1.jpg" class="img-responsive" alt="propety">
                                    <span class="label-property"><?= Yii::t('app', 'Продажа')?></span>                                    <span class="label-price">$150000</span>
                                </div><!--content-->
                            </div><!--image-->
                        </div><!--image col-->
                        <div class="col-sm-8">
                            <h3><a href="#"><?= Yii::t('app', 'Название')?></a></h3>
                            <em><?= Yii::t('app', 'Адрес')?>, 4549</em><br>
                            <a href="/site/agentdetail#contactform" class="btn btn-default"><?= Yii::t('app', 'Свяжитесь с нами')?></a>
                            <p>
                                <?= Yii::t('app', 'Детальное описание')?>
                            </p>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <span><img src="/img//estate/bedrooms.png" alt=""> 4</span>
                                    <span><img src="/img/estate/bathrooms.png" alt=""> 3</span>
                                </div>
                                <div class="pull-right">
                                    <a href="/site/propertydetail"><i class="fa fa-chevron-circle-right"></i> <?= Yii::t('app', 'Больше информации')?></a>
                                </div>
                            </div>
                        </div>
                    </div><!--property listing row-->
                    <div class="row property-listing">
                        <div class="col-sm-4 margin30">
                            <div class="image">
                                <div class="content">
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <img src="/img/estate/sm-1.jpg" class="img-responsive" alt="propety">
                                    <span class="label-property"><?= Yii::t('app', 'Аренда')?></span>                                    <span class="label-price">$150000</span>
                                </div><!--content-->
                            </div><!--image-->
                        </div><!--image col-->
                        <div class="col-sm-8">
                            <h3><a href="#"><?= Yii::t('app', 'Название')?></a></h3>
                            <em><?= Yii::t('app', 'Адрес')?>, 4549</em><br>
                            <a href="#" class="btn btn-default"><?= Yii::t('app', 'Свяжитесь с нами')?></a>
                            <p>
                                <?= Yii::t('app', 'Детальное описание')?>
                            </p>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <span><img src="/img//estate/bedrooms.png" alt=""> 4</span>
                                    <span><img src="/img/estate/bathrooms.png" alt=""> 3</span>
                                </div>
                                <div class="pull-right">
                                    <a href="/site/propertydetail"><i class="fa fa-chevron-circle-right"></i> <?= Yii::t('app', 'Больше информации')?></a>
                                </div>
                            </div>
                        </div>
                    </div><!--property listing row-->
                    <div class="row property-listing">
                        <div class="col-sm-4 margin30">
                            <div class="image">
                                <div class="content">
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <img src="/img/estate/sm-1.jpg" class="img-responsive" alt="propety">
                                    <span class="label-property"><?= Yii::t('app', 'Аренда')?></span>                                    <span class="label-price">$150000</span>
                                </div><!--content-->
                            </div><!--image-->
                        </div><!--image col-->
                        <div class="col-sm-8">
                            <h3><a href="#"><?= Yii::t('app', 'Название')?></a></h3>
                            <em><?= Yii::t('app', 'Адрес')?>, 4549</em><br>
                            <a href="#" class="btn btn-default"><?= Yii::t('app', 'Свяжитесь с нами')?></a>
                            <p>
                                <?= Yii::t('app', 'Детальное описание')?>
                            </p>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <span><img src="/img//estate/bedrooms.png" alt=""> 4</span>
                                    <span><img src="/img/estate/bathrooms.png" alt=""> 3</span>
                                </div>
                                <div class="pull-right">
                                    <a href="/site/propertydetail"><i class="fa fa-chevron-circle-right"></i> <?= Yii::t('app', 'Больше информации')?></a>
                                </div>
                            </div>
                        </div>
                    </div><!--property listing row-->
                    <div class="row property-listing">
                        <div class="col-sm-4 margin30">
                            <div class="image">
                                <div class="content">
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <img src="/img/estate/sm-1.jpg" class="img-responsive" alt="propety">
                                    <span class="label-property"><?= Yii::t('app', 'Продажа')?></span>                                    <span class="label-price">$150000</span>
                                </div><!--content-->
                            </div><!--image-->
                        </div><!--image col-->
                        <div class="col-sm-8">
                            <h3><a href="#"><?= Yii::t('app', 'Название')?></a></h3>
                            <em><?= Yii::t('app', 'Адрес')?>, 4549</em><br>
                            <a href="#" class="btn btn-default"><?= Yii::t('app', 'Свяжитесь с нами')?></a>
                            <p>
                                <?= Yii::t('app', 'Детальное описание')?>
                            </p>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <span><img src="/img//estate/bedrooms.png" alt=""> 4</span>
                                    <span><img src="/img/estate/bathrooms.png" alt=""> 3</span>
                                </div>
                                <div class="pull-right">
                                    <a href="/site/propertydetail"><i class="fa fa-chevron-circle-right"></i> <?= Yii::t('app', 'Больше информации')?></a>
                                </div>
                            </div>
                        </div>
                    </div><!--property listing row-->
                    <div class="row property-listing">
                        <div class="col-sm-4 margin30">
                            <div class="image">
                                <div class="content">
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <img src="/img/estate/sm-1.jpg" class="img-responsive" alt="propety">
                                    <span class="label-property"><?= Yii::t('app', 'Аренда')?></span>                                    <span class="label-price">$150000</span>
                                </div><!--content-->
                            </div><!--image-->
                        </div><!--image col-->
                        <div class="col-sm-8">
                            <h3><a href="#"><?= Yii::t('app', 'Название')?></a></h3>
                            <em><?= Yii::t('app', 'Адрес')?>, 4549</em><br>
                            <a href="#" class="btn btn-default"><?= Yii::t('app', 'Свяжитесь с нами')?></a>
                            <p>
                                <?= Yii::t('app', 'Детальное описание')?>
                            </p>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <span><img src="/img//estate/bedrooms.png" alt=""> 4</span>
                                    <span><img src="/img/estate/bathrooms.png" alt=""> 3</span>
                                </div>
                                <div class="pull-right">
                                    <a href="/site/propertydetail"><i class="fa fa-chevron-circle-right"></i> <?= Yii::t('app', 'Больше информации')?></a>
                                </div>
                            </div>
                        </div>
                    </div><!--property listing row-->
                    <div class="row property-listing">
                        <div class="col-sm-4 margin30">
                            <div class="image">
                                <div class="content">
                                    <a href="#"><i class="fa fa-search-plus"></i></a>
                                    <img src="/img/estate/sm-1.jpg" class="img-responsive" alt="propety">
                                    <span class="label-property"><?= Yii::t('app', 'Аренда')?></span>                                    <span class="label-price">$150000</span>
                                </div><!--content-->
                            </div><!--image-->
                        </div><!--image col-->
                        <div class="col-sm-8">
                            <h3><a href="#"><?= Yii::t('app', 'Название')?></a></h3>
                            <em><?= Yii::t('app', 'Адрес')?>, 4549</em><br>
                            <a href="#" class="btn btn-default"><?= Yii::t('app', 'Свяжитесь с нами')?></a>
                            <p>
                                <?= Yii::t('app', 'Детальное описание')?>
                            </p>
                            <div class="clearfix">
                                <div class="pull-left">
                                    <span><img src="/img//estate/bedrooms.png" alt=""> 4</span>
                                    <span><img src="/img/estate/bathrooms.png" alt=""> 3</span>
                                </div>
                                <div class="pull-right">
                                    <a href="/site/propertydetail"><i class="fa fa-chevron-circle-right"></i> <?= Yii::t('app', 'Больше информации')?></a>
                                </div>
                            </div>
                        </div>
                    </div><!--property listing row-->
                    <nav>
                        <ul class="pagination pull-right">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav><!--pagination-->
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="divide40"></div>