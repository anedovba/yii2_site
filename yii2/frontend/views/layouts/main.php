<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title. '|Red - Real Estate Department') ?></title>

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 hidden-xs">
                <span class="top-welcome"><?=Yii::t('app','Найди недвижимость своей мечты')?></span>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="top-social">
                    <a href="https://www.facebook.com/red.kiev.ua/" target="_blank"><i class="fa fa-facebook"></i></a></div>
                <div style="color: white; float: right;"><a style="color: white" href="/site/login"><?=Yii::t('app','Войти')?> <i class="fa fa-sign-in"></i></a></div>
                <!--                    <a href="#"><i class="fa fa-twitter"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-youtube-play"></i></a>-->

            </div>
        </div>
    </div>
</div>
<div class="header-logo-bar" style="    padding: 0">
    <div class="container" >
        <div class="row" >
            <div class="col-md-4 col-sm-7">
                <a href="/" class="header-logo" >
                    <img src="<?= Url::to('img/logo.gif', true) ?>" alt="">
                    <!--                    <span class="header-icon"><i class="fa fa-home"></i></span>-->
                    <!--                    <span class="header-title">Red</span>-->
                    <!-- /.header-title -->
                    <!--                    <span class="header-slogan">Real Estate Department <br> Профессионализм накопленный годами</span>-->
                    <!-- /.header-slogan -->
                </a>
            </div>
            <div class="col-md-5 col-lg-5 hidden-sm hidden-xs" style="margin: 40px auto;">
                <div class="contact-info-blocks hidden-sm hidden-xs">
                    <div>
                        <i class="fa fa-phone"></i> <?= Yii::t('app', 'Звоните нам')?>

                        <span>+38 (044) 233-68-85</span>
                    </div>
                    <div>
                        <i class="fa fa-envelope"></i> <?= Yii::t('app', 'Пишите нам')?>


                        <span>info@red.kiev.ua</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-5" style="margin: 40px auto;>
                <div class="top-search">
            <form role="form" class="search-widget">
                <input type="text" class="form-control" placeholder="<?= Yii::t('app', 'Поиск')?>

                ">
                <button type="submit" class="btn btn-submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
</div>

<!-- Static navbar -->
<nav class="navbar navbar-inverse navbar-static-top sticky yamm">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--     <a class="navbar-brand" href="index.html">Assan</a>-->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown active">
                    <a href="/" role="button" aria-haspopup="true"><?= Yii::t('app', 'Главная')?> <i class="fa fa-home"></i></a>
                    <!--                    <ul class="dropdown-menu">-->
                    <!--                        <li><a href="index.html">Home - Slider</a></li>-->
                    <!--                        <li><a href="real-estate-home-map.html">Home - Map</a></li>-->
                    <!--                    </ul>-->
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"><?= Yii::t('app', 'Объекты')?>  <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="/site/propertylisting"><?= Yii::t('app', 'Квартиры')?></a></li>
                        <li><a href="/site/propertylisting"><?= Yii::t('app', 'Коммерческая недвижимость')?></a></li>
                        <li><a href="/site/propertylisting"><?= Yii::t('app', 'Коттеджи')?></a></li>
                        <li><a href="/site/propertylisting"><?= Yii::t('app', 'Земельные Участки')?></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"><?= Yii::t('app', 'Бухгалтерия и право')?>  <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="/site/blog"><?= Yii::t('app', 'Бухгалтерские услуги')?></a></li>
                        <li><a href="/site/blog"><?= Yii::t('app', 'Юридические услуги')?></a></li>
                        <li><a href="/site/blog"><?= Yii::t('app', 'Тарифы и сроки')?></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"><?= Yii::t('app', 'Экспертная оценка')?>  <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="/site/blog"><?= Yii::t('app', 'Сертификаты и лицензии')?> </a></li>
                        <li><a href="/site/blog"><?= Yii::t('app', 'Опыт работы')?> </a></li>
                        <li><a href="/site/blog"><?= Yii::t('app', 'Тарифы и сроки')?></a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"><?= Yii::t('app', 'Консалтинг')?>  <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="/site/blog"><?= Yii::t('app', 'Составление бизнес-планов')?> </a></li>
                        <li><a href="/site/blog"><?= Yii::t('app', 'Разработка концепций проектов девелопмента')?> </a></li>
                        <li><a href="/site/blog"><?= Yii::t('app', 'Продажа и продвижение инвестиционных проектов')?> </a></li>
                        <li><a href="/site/blog"><?= Yii::t('app', 'Проведение маркетинговых исследований')?> </a></li>
                        <li><a href="/site/blog"><?= Yii::t('app', 'Анализ наилучшего использования земельных участков')?> </a></li>
                    </ul>
                </li>


                <li><a href="/site/about"><?= Yii::t('app', 'О нас')?></a></li>

                <li><a href="/site/contact"><?= Yii::t('app', 'Контакты')?></a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!--                <li><a href="real-estate-login-register.html">Войти <i class="fa fa-sign-in"></i></a></li>-->
                <li class="active"><a href="/site/addproperty"><?= Yii::t('app', 'Добавить объект')?></a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container -->
</nav><!--navigation end-->
<!--rev slider start-->

    <div class="container">
        <?=
        Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ])
        ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 margin30">
                <h3><?= Yii::t('app', 'О нас')?></h3>
                <p>
                    <?= Yii::t('app', 'Консалтинговая компания ООО «РЕД» создана в 1999 году и предоставляет широкий спектр услуг на рынке недвижимости.')?>
                    <br>
                    <?= Yii::t('app', 'Наша миссия заключается в оказании всех видов услуг на рынке недвижимости на высоком профессиональном уровне.')?>
                </p>
            </div>
            <div class="col-md-3 col-sm-6 margin30">
                <h3><?= Yii::t('app', 'Новое')?></h3>
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" src="<?= Url::to('img/estate/img-1.jpg', true) ?>" width="100" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="#">26, lalpura road</a></h4>
                        <span class="location">Niwaru, ll 3454</span>
                    </div>
                </div><!--media-->
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" src="<?= Url::to('img/estate/img-2.jpg', true) ?>" width="100" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="#">26, lalpura road</a></h4>
                        <span class="location">Niwaru, ll 3454</span>
                    </div>
                </div><!--media-->
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" src="<?= Url::to('img/estate/img-3.jpg', true) ?>" width="100" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="#">26, Salaser road</a></h4>
                        <span class="location">jaipur, ll 765</span>
                    </div>
                </div><!--media-->
            </div>
            <div class="col-md-3 col-sm-6 margin30">
                <h3><?= Yii::t('app', 'Полезные ссылки')?></h3>
                <ul class="list-unstyled">
                    <li><a href="#"><?= Yii::t('app', 'Условия')?></a></li>
                    <li><a href="#"><?= Yii::t('app', 'Правила')?></a></li>
                    <li><a href="/site/faqs"><?= Yii::t('app', 'FAQ')?></a></li>
                    <li><a href="#"><?= Yii::t('app', 'Поддержка')?></a></li>
                    <li><a href="#"><?= Yii::t('app', 'Аренда')?></a></li>
                    <li><a href="#"><?= Yii::t('app', 'Покупка')?></a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 margin30">
                <h3><?= Yii::t('app', 'Контакты')?></h3>
                <p>
                    <strong>R.E.D</strong><br>
                    <?= Yii::t('app', 'ул. Малоподвальная')?> 15, <?= Yii::t('app', 'офис')?> 2<br><?= Yii::t('app', 'Киев')?>, 01001
                </p>

                <p>
                    +38 (044) 233-68-85
                    <br>
                    <a href="#">info@red.kiev.ua</a>
                </p>
            </div>
        </div>
    </div>
</footer><!--footer-->

<div class="copyright">
    <div class="container text-center">
        <span>&copy; Copyright 2017. <?= Yii::t('app', 'Все права защищены')?>. RED</span>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
