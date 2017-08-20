<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use \yii\helpers\Url;

$this->title = Yii::t('app', 'Вход');
?>

<div class="divide70"></div>
<div class="container">
    <div class="row">
        <div class="col-sm-5 margin30">
            <div class="login-reg-box">
                <h4><?= Yii::t('app', 'Вход')?></h4>
                <form>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="<?= Yii::t('app', 'Имя')?>">
                    </div><br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="<?= Yii::t('app', 'Пароль')?>">
                    </div>
                    <div class="checkbox">
                        <input type="checkbox"> <?= Yii::t('app', 'Запомнить меня')?>!
                    </div>
                    <div class="clearfix">
                        <button type="submit" class="btn btn-red btn-lg pull-left"><?= Yii::t('app', 'Войти')?></button>
                        <a href="#" class="pull-right"><?= Yii::t('app', 'Забыли пароль')?>?</a>
                    </div>
                    <div class="divide20"></div>
                    <div class="form-bottom">
                        <p><?= Yii::t('app', 'Войти через социальную сеть')?></p>
                        <div class="social-buttons">
                            <a href="#" class="facebook social-btn"><i class="fa fa-facebook"></i> Facebook</a>
                            <a href="#" class="g-plus social-btn"><i class="fa fa-google-plus"></i> Google +</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <div class="col-sm-6 col-sm-offset-1">
            <div class="login-reg-box">
                <h4><?= Yii::t('app', 'Регистрация')?></h4>
                <form>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="<?= Yii::t('app', 'Имя')?>">
                    </div><br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="email" class="form-control" placeholder="Email">
                    </div><br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="<?= Yii::t('app', 'Пароль')?>">
                    </div><br>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" class="form-control" placeholder="<?= Yii::t('app', 'Повторить пароль')?>">
                    </div>
                    <div class="checkbox">
                        <input type="checkbox"> <?= Yii::t('app', 'Подписаться на рассылку')?>
                    </div>
                    <div class="clearfix">
                        <button type="submit" class="btn btn-red btn-lg pull-left"><?= Yii::t('app', 'Отправить')?></button>
                    </div>

                </form>
            </div>

        </div>
    </div>



</div>
<!--<div class="divide40"></div>-->
<!--<div class="call-to-action">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-sm-8 text-center">-->
<!--                <h3>Join Over 3900+ Happy Customers </h3>-->
<!--            </div>-->
<!--            <div class="col-sm-4 text-center">-->
<!--                <a href="#">Purchase Me</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
