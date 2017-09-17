<?php

/* @var $this \yii\web\View */
/* @var $content string */
/* @var $objects \common\models\Object */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use common\widgets\WLang;
AppAsset::register($this);
$objects=new \common\models\Object();
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
                    <a href="https://www.facebook.com/red.kiev.ua/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://plus.google.com/u/0/+%D0%90%D0%B3%D0%B5%D0%BD%D1%82%D1%81%D1%82%D0%B2%D0%BE%D0%BD%D0%B5%D0%B4%D0%B2%D0%B8%D0%B6%D0%B8%D0%BC%D0%BE%D1%81%D1%82%D0%B8%D0%A0%D0%95%D0%94%D0%9A%D0%B8%D1%97%D0%B2" target="_blank"><i class="fa fa-google"></i></a>
                    <?= $this->render('main/select-language') ?>
                </div>
                <div class="top-social" style="color: white; float: right;">
                </div>
               <?php if (Yii::$app->user->isGuest):?>
                <div style="color: white; float: right;"><a style="color: white" href="/site/login">  <?=Yii::t('app','Войти')?> <i class="fa fa-sign-in"></i></a>
                    </div>
                <!--                    <a href="#"><i class="fa fa-twitter"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-youtube-play"></i></a>-->
                   <?php else:?>
<!--                   <div style="color: white; float: right;"><a style="color: white" href="/site/logout">--><?//=Yii::t('app','Выйти')?><!-- <i class="fa fa-sign-out"></i></a>-->
<!--                   </div>-->
                   <?php
                   $menuItems[] = '<div style="color: white; float: right;">'
                       . Html::beginForm(['/site/logout'], 'post')
                       . Html::submitButton(Yii::t('app','Выйти').' (' . Yii::$app->user->identity->username . ')',['style' => 'color: white; background: inherit; border:0']
                       ).' <i class="fa fa-sign-out"></i>'
                       . Html::endForm()
                       . '</div>';
                   echo Nav::widget([
                       'options' => ['class' => 'navbar-nav navbar-right'],
                       'items' => $menuItems,
                   ]);
                   ?>
                <?php endif;?>
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
                </li>
                <li class="dropdown" onclick="document.getElementById('elem').style.display=='block'?document.getElementById('elem').style.display='none':document.getElementById('elem').style.display='block';document.getElementById('elem2').style.display='none';document.getElementById('elem3').style.display='none';document.getElementById('elem4').style.display='none'; ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"><?= Yii::t('app', 'Объекты')?>  <i class="fa fa-angle-down"></i></a>
                    <ul id="elem" class="dropdown-menu">
                        <li><a href="/site/propertylisting"><?= Yii::t('app', 'Квартиры')?></a></li>
                        <li><a href="/site/propertylisting"><?= Yii::t('app', 'Коммерческая недвижимость')?></a></li>
                        <li><a href="/site/propertylisting"><?= Yii::t('app', 'Коттеджи')?></a></li>
                        <li><a href="/site/propertylisting"><?= Yii::t('app', 'Земельные Участки')?></a></li>
                    </ul>
                </li>
                <li class="dropdown" onclick="document.getElementById('elem2').style.display=='block'?document.getElementById('elem2').style.display='none':document.getElementById('elem2').style.display='block';document.getElementById('elem').style.display='none';document.getElementById('elem3').style.display='none';document.getElementById('elem4').style.display='none';">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"><?= Yii::t('app', 'Бухгалтерия и право')?>  <i class="fa fa-angle-down"></i></a>
                    <ul id="elem2" class="dropdown-menu">
                        <li><a href="/site/blog"><?= Yii::t('app', 'Бухгалтерские услуги')?></a></li>
                        <li><a href="/site/blog"><?= Yii::t('app', 'Юридические услуги')?></a></li>
                        <li><a href="/site/blog"><?= Yii::t('app', 'Тарифы и сроки')?></a></li>
                    </ul>
                </li>
                <li class="dropdown" onclick="document.getElementById('elem3').style.display=='block'?document.getElementById('elem3').style.display='none':document.getElementById('elem3').style.display='block';document.getElementById('elem2').style.display='none';document.getElementById('elem').style.display='none';document.getElementById('elem4').style.display='none';">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"><?= Yii::t('app', 'Экспертная оценка')?>  <i class="fa fa-angle-down"></i></a>
                    <ul id="elem3" class="dropdown-menu">
                        <li><a href="/site/blog"><?= Yii::t('app', 'Сертификаты и лицензии')?> </a></li>
                        <li><a href="/site/blog"><?= Yii::t('app', 'Опыт работы')?> </a></li>
                        <li><a href="/site/blog"><?= Yii::t('app', 'Тарифы и сроки')?></a></li>
                    </ul>
                </li>
                <li class="dropdown" onclick="document.getElementById('elem4').style.display=='block'?document.getElementById('elem4').style.display='none':document.getElementById('elem4').style.display='block';document.getElementById('elem2').style.display='none';document.getElementById('elem3').style.display='none';document.getElementById('elem').style.display='none';">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"><?= Yii::t('app', 'Консалтинг')?>  <i class="fa fa-angle-down"></i></a>
                    <ul id="elem4" class="dropdown-menu">
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

            <?php
            foreach ($objects->newObjects as $object):?>
                <div class="media">
                    <div class="media-left">
                        <a href="<?=Url::to(['/site/propertydetail', 'id'=>$object->id])?>">
                            <img class="media-object" src="<?= '/uploads/images/property/'.$object->mainImage->image?>" width="100" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="<?=Url::to(['/site/propertydetail', 'id'=>$object->id])?>"><?= $object->operation->operation_name?></a></h4>
                        <span class="location"><?= $object->object_name?></span>
                    </div>
                </div><!--media-->
                <?php endforeach;?>
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
