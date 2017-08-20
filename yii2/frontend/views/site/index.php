<?php

/* @var $this yii\web\View */
/* @var $blogs \common\models\Blog */

$this->title = Yii::t('app', 'Главная');
?>
<div class="fullwidthbanner">
    <div class="tp-banner">
        <ul>
            <!-- SLIDE -->
            <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Good Morning">
                <!-- MAIN IMAGE -->
                <img src="img/estate/img-7.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                <div class="caption slider-title sft"
                     data-x="50"
                     data-y="160"
                     data-speed="1000"
                     data-start="1000"
                     data-easing="easeOutExpo">
                    27523 Pacific Coast
                </div>
                <div class="caption slider-text sfl"
                     data-x="50"
                     data-y="214"
                     data-speed="1000"
                     data-start="1800"
                     data-easing="easeOutExpo">
                    124, Munna wali
                </div>
                <div class="caption sfb slider-price tp-resizeme"
                     data-x="50"
                     data-y="258"
                     data-speed="500"
                     data-start="1800"
                     data-easing="Sine.easeOut">
                    $16000
                </div>
            </li>
            <!-- SLIDE -->
            <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Real Real Estate">
                <!-- MAIN IMAGE -->
                <img src="img/estate/img-14.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                <div class="caption slider-title sft"
                     data-x="50"
                     data-y="160"
                     data-speed="1000"
                     data-start="1000"
                     data-easing="easeOutExpo">
                    27523 Pacific Coast
                </div>
                <div class="caption slider-text sfl"
                     data-x="50"
                     data-y="214"
                     data-speed="1000"
                     data-start="1800"
                     data-easing="easeOutExpo">
                    124, Munna wali
                </div>
                <div class="caption sfb slider-price tp-resizeme"
                     data-x="50"
                     data-y="258"
                     data-speed="500"
                     data-start="1800"
                     data-easing="Sine.easeOut">
                    $16000
                </div>
            </li>
            <!-- SLIDE -->
            <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Everything you need">
                <!-- MAIN IMAGE -->
                <img src="img/estate/img-6.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                <div class="caption slider-title sft"
                     data-x="50"
                     data-y="160"
                     data-speed="1000"
                     data-start="1000"
                     data-easing="easeOutExpo">
                    27523 Pacific Coast
                </div>
                <div class="caption slider-text sfl"
                     data-x="50"
                     data-y="214"
                     data-speed="1000"
                     data-start="1800"
                     data-easing="easeOutExpo">
                    124, Munna wali
                </div>
                <div class="caption sfb slider-price tp-resizeme"
                     data-x="50"
                     data-y="258"
                     data-speed="500"
                     data-start="1800"
                     data-easing="Sine.easeOut">
                    $16000
                </div>
            </li>
        </ul>
    </div>
</div><!--full width banner-->
<!--revolution end-->
<div class="search-filter">
    <div class="container">
        <form role="form">
            <div class="row">
                <div class="col-md-3 col-sm-6 margin20 select-option">
                    <section>
                        <select class="cs-select cs-skin-elastic">
                            <option value="" disabled selected><?= Yii::t('app', 'Размещение')?></option>
                            <option value="">Niwaru, 302012</option>
                            <option value="">Vaishali, 302021</option>
                            <option value="">Vidhadhar Nagar, 302039</option>
                            <option value="">Mansarover, 302024</option>
                        </select>
                    </section>
                </div>
                <div class="col-md-3 col-sm-6 margin20 select-option">
                    <section>
                        <select class="cs-select cs-skin-elastic">
                            <option value="" disabled selected><?= Yii::t('app', 'Вид помещения')?></option>
                            <option value="">Apartment</option>
                            <option value="">Condo</option>
                        </select>
                    </section>
                </div>
                <div class="col-md-3 col-sm-6 margin20 select-option">
                    <section>
                        <select class="cs-select cs-skin-elastic">
                            <option value="" disabled selected><?= Yii::t('app', 'Тип операции')?></option>
                            <option value="">For Rent</option>
                            <option value="">For Buy</option>
                        </select>
                    </section>
                </div>
                <div class="col-md-3 col-sm-6 margin20">
                    <a href="#" class="btn btn-red btn-lg btn-block"><i class="fa fa-search"></i><?= Yii::t('app', 'Поиск')?></a>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="divide70"></div>
<div class="container">
    <h3 class="title-section clearfix"><?= Yii::t('app', 'Эксклюзивные предложения')?> <a href="/site/propertylisting" class="link-arrow"><?= Yii::t('app', 'Посмотреть все')?></a></h3>
    <div class="row">
        <div class="col-sm-6 col-md-3 margin30">
            <div class="property clearfix">
                <div class="image">
                    <div class="content">
                        <a href="#"><i class="fa fa-search-plus"></i></a>
                        <img src="img/estate/img-1.jpg" class="img-responsive" alt="propety">
                        <span class="label-property"><?= Yii::t('app', 'Аренда')?></span>                        <span class="label-price">$150000</span>
                    </div><!--content-->
                </div><!--image-->
                <div class="property-detail">
                    <h5 class="title"><a href="#"><?= Yii::t('app', 'Название')?></a></h5>
                    <span class="location"><?= Yii::t('app', 'Адрес')?></span>
                    <div class="pull-left">
                        <p><b><?= Yii::t('app', 'Площадь')?>:</b> 120m<sup>2</sup></p>
                    </div>
                    <div class="pull-right">
                        <span><img src="img/estate/bedrooms.png" alt=""> 4</span>
                        <span><img src="img/estate/bathrooms.png" alt=""> 3</span>
                    </div>
                </div><!--property details-->
            </div><!--property-->
        </div><!--property columns-->
        <div class="col-sm-6 col-md-3 margin30">
            <div class="property clearfix">
                <div class="image">
                    <div class="content">
                        <a href="#"><i class="fa fa-search-plus"></i></a>
                        <img src="img/estate/img-1.jpg" class="img-responsive" alt="propety">
                        <span class="label-property"><?= Yii::t('app', 'Продажа')?></span>
                        <span class="label-price">$150000</span>
                    </div><!--content-->
                </div><!--image-->
                <div class="property-detail">
                    <h5 class="title"><a href="#"><?= Yii::t('app', 'Название')?></a></h5>
                    <span class="location"><?= Yii::t('app', 'Адрес')?></span>
                    <div class="pull-left">
                        <p><b><?= Yii::t('app', 'Площадь')?>:</b> 120m<sup>2</sup></p>
                    </div>
                    <div class="pull-right">
                        <span><img src="img/estate/bedrooms.png" alt=""> 4</span>
                        <span><img src="img/estate/bathrooms.png" alt=""> 3</span>
                    </div>
                </div><!--property details-->
            </div><!--property-->
        </div><!--property columns-->
        <div class="col-sm-6 col-md-3 margin30">
            <div class="property clearfix">
                <div class="image">
                    <div class="content">
                        <a href="#"><i class="fa fa-search-plus"></i></a>
                        <img src="img/estate/img-1.jpg" class="img-responsive" alt="propety">
                        <span class="label-property"><?= Yii::t('app', 'Аренда')?></span>
                        <span class="label-price">$150000</span>
                    </div><!--content-->
                </div><!--image-->
                <div class="property-detail">
                    <h5 class="title"><a href="#"><?= Yii::t('app', 'Название')?></a></h5>
                    <span class="location"><?= Yii::t('app', 'Адрес')?></span>
                    <div class="pull-left">
                        <p><b><?= Yii::t('app', 'Площадь')?>:</b> 120m<sup>2</sup></p>
                    </div>
                    <div class="pull-right">
                        <span><img src="img/estate/bedrooms.png" alt=""> 4</span>
                        <span><img src="img/estate/bathrooms.png" alt=""> 3</span>
                    </div>
                </div><!--property details-->
            </div><!--property-->
        </div><!--property columns-->
        <div class="col-sm-6 col-md-3 margin30">
            <div class="property clearfix">
                <div class="image">
                    <div class="content">
                        <a href="#"><i class="fa fa-search-plus"></i></a>
                        <img src="img/estate/img-1.jpg" class="img-responsive" alt="propety">
                        <span class="label-property"><?= Yii::t('app', 'Аренда')?></span>
                        <span class="label-price">$150000</span>
                    </div><!--content-->
                </div><!--image-->
                <div class="property-detail">
                    <h5 class="title"><a href="#"><?= Yii::t('app', 'Название')?></a></h5>
                    <span class="location"><?= Yii::t('app', 'Адрес')?></span>
                    <div class="pull-left">
                        <p><b><?= Yii::t('app', 'Площадь')?>:</b> 120m<sup>2</sup></p>
                    </div>
                    <div class="pull-right">
                        <span><img src="img/estate/bedrooms.png" alt=""> 4</span>
                        <span><img src="img/estate/bathrooms.png" alt=""> 3</span>
                    </div>
                </div><!--property details-->
            </div><!--property-->
        </div><!--property columns-->
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-3 margin30">
            <div class="property clearfix">
                <div class="image">
                    <div class="content">
                        <a href="#"><i class="fa fa-search-plus"></i></a>
                        <img src="img/estate/img-1.jpg" class="img-responsive" alt="propety">
                        <span class="label-property"><?= Yii::t('app', 'Продажа')?></span>
                        <span class="label-price">$150000</span>
                    </div><!--content-->
                </div><!--image-->
                <div class="property-detail">
                    <h5 class="title"><a href="#"><?= Yii::t('app', 'Название')?></a></h5>
                    <span class="location"><?= Yii::t('app', 'Адрес')?></span>
                    <div class="pull-left">
                        <p><b><?= Yii::t('app', 'Площадь')?>:</b> 120m<sup>2</sup></p>
                    </div>
                    <div class="pull-right">
                        <span><img src="img/estate/bedrooms.png" alt=""> 4</span>
                        <span><img src="img/estate/bathrooms.png" alt=""> 3</span>
                    </div>
                </div><!--property details-->
            </div><!--property-->
        </div><!--property columns-->
        <div class="col-sm-6 col-md-3 margin30">
            <div class="property clearfix">
                <div class="image">
                    <div class="content">
                        <a href="#"><i class="fa fa-search-plus"></i></a>
                        <img src="img/estate/img-1.jpg" class="img-responsive" alt="propety">
                        <span class="label-property"><?= Yii::t('app', 'Аренда')?></span>
                        <span class="label-price">$150000</span>
                    </div><!--content-->
                </div><!--image-->
                <div class="property-detail">
                    <h5 class="title"><a href="#"><?= Yii::t('app', 'Название')?></a></h5>
                    <span class="location"><?= Yii::t('app', 'Адрес')?></span>
                    <div class="pull-left">
                        <p><b><?= Yii::t('app', 'Площадь')?>:</b> 120m<sup>2</sup></p>
                    </div>
                    <div class="pull-right">
                        <span><img src="img/estate/bedrooms.png" alt=""> 4</span>
                        <span><img src="img/estate/bathrooms.png" alt=""> 3</span>
                    </div>
                </div><!--property details-->
            </div><!--property-->
        </div><!--property columns-->
        <div class="col-sm-6 col-md-3 margin30">
            <div class="property clearfix">
                <div class="image">
                    <div class="content">
                        <a href="#"><i class="fa fa-search-plus"></i></a>
                        <img src="img/estate/img-1.jpg" class="img-responsive" alt="propety">
                        <span class="label-property"><?= Yii::t('app', 'Продажа')?></span>
                        <span class="label-price">$150000</span>
                    </div><!--content-->
                </div><!--image-->
                <div class="property-detail">
                    <h5 class="title"><a href="#"><?= Yii::t('app', 'Название')?></a></h5>
                    <span class="location"><?= Yii::t('app', 'Адрес')?></span>
                    <div class="pull-left">
                        <p><b><?= Yii::t('app', 'Площадь')?>:</b> 120m<sup>2</sup></p>
                    </div>
                    <div class="pull-right">
                        <span><img src="img/estate/bedrooms.png" alt=""> 4</span>
                        <span><img src="img/estate/bathrooms.png" alt=""> 3</span>
                    </div>
                </div><!--property details-->
            </div><!--property-->
        </div><!--property columns-->
        <div class="col-sm-6 col-md-3 margin30">
            <div class="property clearfix">
                <div class="image">
                    <div class="content">
                        <a href="#"><i class="fa fa-search-plus"></i></a>
                        <img src="img/estate/img-1.jpg" class="img-responsive" alt="propety">
                        <span class="label-property"><?= Yii::t('app', 'Продажа')?></span>
                        <span class="label-price">$150000</span>
                    </div><!--content-->
                </div><!--image-->
                <div class="property-detail">
                    <h5 class="title"><a href="#"><?= Yii::t('app', 'Название')?></a></h5>
                    <span class="location"><?= Yii::t('app', 'Адрес')?></span>
                    <div class="pull-left">
                        <p><b><?= Yii::t('app', 'Площадь')?>:</b> 120m<sup>2</sup></p>
                    </div>
                    <div class="pull-right">
                        <span><img src="img/estate/bedrooms.png" alt=""> 4</span>
                        <span><img src="img/estate/bathrooms.png" alt=""> 3</span>
                    </div>
                </div><!--property details-->
            </div><!--property-->
        </div><!--property columns-->
    </div>
    <div class="row">
        <div class="col-sm-12 text-center">
                <a href="/site/propertylisting" class="btn btn-lg btn-red"><?= Yii::t('app', 'Посмотреть еще')?></a>
        </div>
    </div>
    <div class="divide60"></div>

    <div id="map-canvas" style="width: 100%;height: 500px;"></div>
    <div class="divide60"></div>
    <div class="row">
        <div class="col-sm-12">
            <h3 class="title-section"><?= Yii::t('app', 'Все предложения')?></h3>
        </div>
    </div>
    <div class="row">
        <div class="all-property-slider">

            <div id="property-slider" class="owl-carousel owl-theme">

                <div class="item">
                    <div class="property clearfix">
                        <div class="image">
                            <div class="content">
                                <a href="#"><i class="fa fa-search-plus"></i></a>
                                <img src="img/estate/img-7.jpg" class="img-responsive" alt="propety">
                                <span class="label-property"><?= Yii::t('app', 'Продажа')?></span>                                <span class="label-price">$150000</span>
                            </div><!--content-->
                        </div><!--image-->
                        <div class="property-detail">
                            <h5 class="title"><a href="#"><?= Yii::t('app', 'Название')?></a></h5>
                            <span class="location"><?= Yii::t('app', 'Адрес')?></span>
                            <div class="pull-left">
                                <p><b><?= Yii::t('app', 'Площадь')?>:</b> 120m<sup>2</sup></p>
                            </div>
                            <div class="pull-right">
                                <span><img src="img/estate/bedrooms.png" alt=""> 4</span>
                                <span><img src="img/estate/bathrooms.png" alt=""> 3</span>
                            </div>
                        </div><!--property details-->
                    </div><!--property-->
                </div>
                <div class="item">
                    <div class="property clearfix">
                        <div class="image">
                            <div class="content">
                                <a href="#"><i class="fa fa-search-plus"></i></a>
                                <img src="img/estate/img-7.jpg" class="img-responsive" alt="propety">
                                <span class="label-property"><?= Yii::t('app', 'Аренда')?></span>
                                <span class="label-price">$150000</span>
                            </div><!--content-->
                        </div><!--image-->
                        <div class="property-detail">
                            <h5 class="title"><a href="#"><?= Yii::t('app', 'Название')?></a></h5>
                            <span class="location"><?= Yii::t('app', 'Адрес')?></span>
                            <div class="pull-left">
                                <p><b><?= Yii::t('app', 'Площадь')?>:</b> 120m<sup>2</sup></p>
                            </div>
                            <div class="pull-right">
                                <span><img src="img/estate/bedrooms.png" alt=""> 4</span>
                                <span><img src="img/estate/bathrooms.png" alt=""> 3</span>
                            </div>
                        </div><!--property details-->
                    </div><!--property-->
                </div>
                <div class="item">
                    <div class="property clearfix">
                        <div class="image">
                            <div class="content">
                                <a href="#"><i class="fa fa-search-plus"></i></a>
                                <img src="img/estate/img-7.jpg" class="img-responsive" alt="propety">
                                <span class="label-property"><?= Yii::t('app', 'Аренда')?></span>
                                <span class="label-price">$150000</span>
                            </div><!--content-->
                        </div><!--image-->
                        <div class="property-detail">
                            <h5 class="title"><a href="#"><?= Yii::t('app', 'Название')?></a></h5>
                            <span class="location"><?= Yii::t('app', 'Адрес')?></span>
                            <div class="pull-left">
                                <p><b><?= Yii::t('app', 'Площадь')?>:</b> 120m<sup>2</sup></p>
                            </div>
                            <div class="pull-right">
                                <span><img src="img/estate/bedrooms.png" alt=""> 4</span>
                                <span><img src="img/estate/bathrooms.png" alt=""> 3</span>
                            </div>
                        </div><!--property details-->
                    </div><!--property-->
                </div>
                <div class="item">
                    <div class="property clearfix">
                        <div class="image">
                            <div class="content">
                                <a href="#"><i class="fa fa-search-plus"></i></a>
                                <img src="img/estate/img-7.jpg" class="img-responsive" alt="propety">
                                <span class="label-property"><?= Yii::t('app', 'Продажа')?></span>
                                <span class="label-price">$150000</span>
                            </div><!--content-->
                        </div><!--image-->
                        <div class="property-detail">
                            <h5 class="title"><a href="#"><?= Yii::t('app', 'Название')?></a></h5>
                            <span class="location"><?= Yii::t('app', 'Адрес')?></span>
                            <div class="pull-left">
                                <p><b><?= Yii::t('app', 'Площадь')?>:</b> 120m<sup>2</sup></p>
                            </div>
                            <div class="pull-right">
                                <span><img src="img/estate/bedrooms.png" alt=""> 4</span>
                                <span><img src="img/estate/bathrooms.png" alt=""> 3</span>
                            </div>
                        </div><!--property details-->
                    </div><!--property-->
                </div>
                <div class="item">
                    <div class="property clearfix">
                        <div class="image">
                            <div class="content">
                                <a href="#"><i class="fa fa-search-plus"></i></a>
                                <img src="img/estate/img-7.jpg" class="img-responsive" alt="propety">
                                <span class="label-property"><?= Yii::t('app', 'Аренда')?></span>                                <span class="label-price">$150000</span>
                            </div><!--content-->
                        </div><!--image-->
                        <div class="property-detail">
                            <h5 class="title"><a href="#"><?= Yii::t('app', 'Название')?></a></h5>
                            <span class="location"><?= Yii::t('app', 'Адрес')?></span>
                            <div class="pull-left">
                                <p><b><?= Yii::t('app', 'Площадь')?>:</b> 120m<sup>2</sup></p>
                            </div>
                            <div class="pull-right">
                                <span><img src="img/estate/bedrooms.png" alt=""> 4</span>
                                <span><img src="img/estate/bathrooms.png" alt=""> 3</span>
                            </div>
                        </div><!--property details-->
                    </div><!--property-->
                </div>
                <div class="item">
                    <div class="property clearfix">
                        <div class="image">
                            <div class="content">
                                <a href="#"><i class="fa fa-search-plus"></i></a>
                                <img src="img/estate/img-7.jpg" class="img-responsive" alt="propety">
                                <span class="label-property"><?= Yii::t('app', 'Продажа')?></span>                                <span class="label-price">$150000</span>
                            </div><!--content-->
                        </div><!--image-->
                        <div class="property-detail">
                            <h5 class="title"><a href="#"><?= Yii::t('app', 'Название')?></a></h5>
                            <span class="location"><?= Yii::t('app', 'Адрес')?></span>
                            <div class="pull-left">
                                <p><b><?= Yii::t('app', 'Площадь')?>:</b> 120m<sup>2</sup></p>
                            </div>
                            <div class="pull-right">
                                <span><img src="img/estate/bedrooms.png" alt=""> 4</span>
                                <span><img src="img/estate/bathrooms.png" alt=""> 3</span>
                            </div>
                        </div><!--property details-->
                    </div><!--property-->
                </div>
                <div class="item">
                    <div class="property clearfix">
                        <div class="image">
                            <div class="content">
                                <a href="#"><i class="fa fa-search-plus"></i></a>
                                <img src="img/estate/img-7.jpg" class="img-responsive" alt="propety">
                                <span class="label-property"><?= Yii::t('app', 'Аренда')?></span>                                <span class="label-price">$150000</span>
                            </div><!--content-->
                        </div><!--image-->
                        <div class="property-detail">
                            <h5 class="title"><a href="#"><?= Yii::t('app', 'Название')?></a></h5>
                            <span class="location"><?= Yii::t('app', 'Адрес')?></span>
                            <div class="pull-left">
                                <p><b><?= Yii::t('app', 'Площадь')?>:</b> 120m<sup>2</sup></p>
                            </div>
                            <div class="pull-right">
                                <span><img src="img/estate/bedrooms.png" alt=""> 4</span>
                                <span><img src="img/estate/bathrooms.png" alt=""> 3</span>
                            </div>
                        </div><!--property details-->
                    </div><!--property-->
                </div>
                <div class="item">
                    <div class="property clearfix">
                        <div class="image">
                            <div class="content">
                                <a href="#"><i class="fa fa-search-plus"></i></a>
                                <img src="img/estate/img-7.jpg" class="img-responsive" alt="propety">
                                <span class="label-property"><?= Yii::t('app', 'Продажа')?></span>                                <span class="label-price">$150000</span>
                            </div><!--content-->
                        </div><!--image-->
                        <div class="property-detail">
                            <h5 class="title"><a href="#"><?= Yii::t('app', 'Название')?></a></h5>
                            <span class="location"><?= Yii::t('app', 'Адрес')?></span>
                            <div class="pull-left">
                                <p><b><?= Yii::t('app', 'Площадь')?>:</b> 120m<sup>2</sup></p>
                            </div>
                            <div class="pull-right">
                                <span><img src="img/estate/bedrooms.png" alt=""> 4</span>
                                <span><img src="img/estate/bathrooms.png" alt=""> 3</span>
                            </div>
                        </div><!--property details-->
                    </div><!--property-->
                </div>

            </div><!--owl slider-->
        </div><!--all property slider-->
    </div><!--col-md-12-->
</div><!--property container-->
<div class="divide40"></div>
<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 text-center">
                <h3><?= Yii::t('app', 'Хотите видеть Вашу недвижимость тут')?>? </h3>
            </div>
            <div class="col-sm-4 text-center">
                <a href="#"><?= Yii::t('app', 'Добавить объект сейчас')?></a>
            </div>
        </div>
    </div>
</div><!--call to action-->
<div class="divide70"></div>
<div class="container">
    <div class="center-title">
        <h3><?= Yii::t('app', 'Наши Агенты')?></h3>
        <p>
            <?= Yii::t('app', 'Мы – опытная команда оценщиков, консультантов и риелторов, часть из которых имеют международные сертификаты RICS, CCIM и CPM.')?>
        </p>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-6 margin30">
            <div class="agent-box">
                <img src="img/team-1.jpg" class="img-circle img-responsive" width="200" alt="">
                <h3>Mitali Raj</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor diam in quam molestie ullamcorper.
                </p>
                <a href="/site/agentdetail"><?= Yii::t('app', 'Посмотреть профайл')?></a>
            </div>
        </div><!--agent col-->
        <div class="col-md-3 col-sm-6 margin30">
            <div class="agent-box">
                <img src="img/team-2.jpg" class="img-circle img-responsive" width="200" alt="">
                <h3>Mitali Raj</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor diam in quam molestie ullamcorper.
                </p>
                <a href="/site/agentdetail"><?= Yii::t('app', 'Посмотреть профайл')?></a>
            </div>
        </div><!--agent col-->
        <div class="col-md-3 col-sm-6 margin30">
            <div class="agent-box">
                <img src="img/team-3.jpg" class="img-circle img-responsive" width="200" alt="">
                <h3>Mitali Raj</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor diam in quam molestie ullamcorper.
                </p>
                <a href="/site/agentdetail"><?= Yii::t('app', 'Посмотреть профайл')?></a>
            </div>
        </div><!--agent col-->
        <div class="col-md-3 col-sm-6 margin30">
            <div class="agent-box">
                <img src="img/team-4.jpg" class="img-circle img-responsive" width="200" alt="">
                <h3>Mitali Raj</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor diam in quam molestie ullamcorper.
                </p>
                <a href="/site/agentdetail"><?= Yii::t('app', 'Посмотреть профайл')?></a>
            </div>
        </div><!--agent col-->
    </div>
</div><!--agents content-->
<div class="divide40"></div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqb3fT3SbMSDMggMEK7fJOIkvamccLrjA&sensor=false"></script><!-- google maps -->
<script src="js/map.js" type="text/javascript"></script>