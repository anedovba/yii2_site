<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <div class="divide70"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <div id="property-map" style="width:100%;height: 400px;">
                </div>
            </div>
        </div> <div class="divide70"></div>

        <div class="row">
            <div class="col-sm-6 contact-column">
                <h4><?= Yii::t('app', 'Обратная связь')?></h4>
                <p>
                    <?= Yii::t('app', 'Оставьте ваше сообщение и эксперт в ближайшее время свяжется с вами.')?>
                </p>
                <div class="divide10"></div>

                <div class="form-contact">
                    <div class="required">
                        <p>( <span>*</span> <?= Yii::t('app', 'обязательные поля')?>)</p>
                    </div>

                    <form name="sentMessage" id="contactForm" method="post" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 controls">
                                        <label><?= Yii::t('app', 'Имя')?><span>*</span></label>
                                        <input type="text" class="form-control" placeholder="<?= Yii::t('app', 'Имя')?>" id="name" required data-validation-required-message="Пожалуйста, введите ваше имя.">
                                        <p class="help-block"></p>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 controls">
                                        <label>Email<span>*</span></label>
                                        <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Пожалуйста, введите ваш email.">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12  controls">
                                <label><?= Yii::t('app', 'Номер телефона')?><span>*</span></label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="<?= Yii::t('app', 'Пожалуйста, введите ваш номер телефона.')?>">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 controls">
                                <label><?= Yii::t('app', 'Сообщение')?><span>*</span></label>
                                <textarea rows="5" class="form-control" placeholder="<?= Yii::t('app', 'Сообщение')?>" id="message" required data-validation-required-message="<?= Yii::t('app', 'Пожалуйста, введите ваше сообщение.')?>"></textarea>
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-red btn-lg"><?= Yii::t('app', 'Отправить сообщение')?></button>
                            </div>
                        </div>
                    </form>

                </div><!--contact form-->

            </div><!--col-->
            <div class="col-sm-5 col-sm-offset-1 contact-column">
                <h4><?= Yii::t('app', 'Контактные данные')?></h4>
                <ul class="list-unstyled contact contact-info">
                    <li><p><strong><i class="fa fa-map-marker"></i> <?= Yii::t('app', 'Адрес')?>:</strong> <?= Yii::t('app', 'ул. Малоподвальная')?>, <?= Yii::t('app', 'Киев')?>, 01001 </p></li>
                    <li><p><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="#">info@red.kiev.ua</a></p></li>
                    <li> <p><strong><i class="fa fa-phone"></i> <?= Yii::t('app', 'Телефон')?>:</strong> +38 (044) 233-68-85</p></li>
<!--                    <li> <p><strong><i class="fa fa-print"></i> Fax:</strong> +91 2345 2132</p></li>-->
                </ul>
                <div class="divide40"></div>
                <h4><?= Yii::t('app', 'Мы в соц сетях')?></h4>
                <ul class="list-inline social-1">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>

            </div>
        </div><!--row-->
    </div>
    <div class="divide70"></div>
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

    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            function LoadMapProperty() {
                var locations = new Array(
                    [50.449767, 30.519076]
                );
                var types = new Array(
                    'family-house'
                );
                var markers = new Array();
                var plainMarkers = new Array();

                var mapOptions = {
                    center: new google.maps.LatLng(50.449767, 30.519076),
                    zoom: 14,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false
                };

                var map = new google.maps.Map(document.getElementById('property-map'), mapOptions);

                $.each(locations, function (index, location) {
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(location[0], location[1]),
                        map: map,

                    });

                    var myOptions = {
                        draggable: true,
                        content: '<div class="marker ' + types[index] + '"><div class="marker-inner"></div></div>',
                        disableAutoPan: true,
                        pixelOffset: new google.maps.Size(-21, -58),
                        position: new google.maps.LatLng(location[0], location[1]),
                        closeBoxURL: "",
                        isHidden: false,
                        // pane: "mapPane",
                        enableEventPropagation: true
                    };
                    marker.marker = new InfoBox(myOptions);
                    marker.marker.isHidden = false;
                    marker.marker.open(map, marker);
                    markers.push(marker);
                });

                google.maps.event.addListener(map, 'zoom_changed', function () {
                    $.each(markers, function (index, marker) {
                        marker.infobox.close();
                    });
                });
            }

            google.maps.event.addDomListener(window, 'load', LoadMapProperty);

            var dragFlag = false;
            var start = 0, end = 0;

            function thisTouchStart(e) {
                dragFlag = true;
                start = e.touches[0].pageY;
            }

            function thisTouchEnd() {
                dragFlag = false;
            }

            function thisTouchMove(e) {
                if (!dragFlag)
                    return;
                end = e.touches[0].pageY;
                window.scrollBy(0, (start - end));
            }

            document.getElementById("property-map").addEventListener("touchstart", thisTouchStart, true);
            document.getElementById("property-map").addEventListener("touchend", thisTouchEnd, true);
            document.getElementById("property-map").addEventListener("touchmove", thisTouchMove, true);
        });

    </script>