<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'bootstrap/css/bootstrap.min.css','css/real-estate.css', 'font-awesome/css/font-awesome.min.css', 'css/flexslider.css', 'https://fonts.googleapis.com/css?family=Roboto:400,900,700,500,400italic,300italic,300,100italic,100', 'owl-carousel/assets/owl.carousel.css', 'owl-carousel/assets/owl.theme.default.css', 'css/yamm.css', 'css/select.css', 'rs-plugin/css/settings.css', 'css/rev-style.css"',
    ];
    public $js = [
        'bootstrap/js/bootstrap.min.js','https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', 'js/jquery.min.js', 'js/jquery-migrate.min.js','js/jquery.easing.1.3.min.js', 'js/jquery.sticky.js','js/jquery.flexslider-min.js','js/jquery.stellar.min.js','owl-carousel/owl.carousel.min.js','js/classie.js','js/selectFx.js','rs-plugin/js/jquery.themepunch.tools.min.js','rs-plugin/js/jquery.themepunch.revolution.min.js','js/tweetie.min.js','js/wow.min.js','js/real-estate-custom.js','https://maps.googleapis.com/maps/api/js?key=AIzaSyAqb3fT3SbMSDMggMEK7fJOIkvamccLrjA&sensor=false', 'js/map.js', 'js/gmap3.infobox.min.js', 'js/mymap.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
