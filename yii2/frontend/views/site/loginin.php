<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $signup_model \frontend\models\SignupForm */
/* @var $login_model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;



$this->title = Yii::t('app', 'Вход');
?>

<div class="divide70"></div>
<div class="container">
    <div class="row">
        <div class="col-sm-5 margin30">
            <div class="login-reg-box">
                <h4><?= Yii::t('app', 'Вход')?></h4>
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                <?= $form->field($login_model, 'username',
                    ['template' => "<div  class=\"input-group\"><span class='input-group-addon' style='color: #555'><i class='fa fa-user'></i></span>{input}</div>\n{hint}\n{error}"])->textInput(['placeholder'=>Yii::t('app', 'Имя')]); ?>

                <?= $form->field($login_model, 'password',
                    ['template' => "<div  class=\"input-group\"><span class='input-group-addon' style='color: #555'><i class='fa fa-lock'></i></span>{input}</div>\n{hint}\n{error}"])->passwordInput(['placeholder'=>Yii::t('app', 'Пароль')]) ?>

                <?= $form->field($login_model, 'rememberMe')->checkbox(['label' =>Yii::t('app', 'Запомнить меня').'!'] ) ?>




                <div class="clearfix">
                    <?= Html::submitButton(Yii::t('app', 'Войти'), ['class' => 'btn btn-red btn-lg pull-left', 'name' => 'login-button']) ?>
                    <?= Html::a(Yii::t('app', 'Забыли пароль?'), ['site/request-password-reset'], ['class'=>'pull-right']) ?>
                </div>
                <div class="divide20"></div>
                <div class="form-bottom">
                    <p><?= Yii::t('app', 'Войти через социальную сеть')?></p>

                    <?php
                    if (Yii::$app->getSession()->hasFlash('error')) {
                        echo '<div class="alert alert-danger">'.Yii::$app->getSession()->getFlash('error').'</div>';
                    }
                    ?>
                    <div class="social-buttons">
                        <a href="auth?authclient=facebook" class="facebook social-btn"><i class="fa fa-facebook"></i> Facebook</a>
                        <a href="auth?authclient=google" class="g-plus social-btn"><i class="fa fa-google-plus"></i> Google +</a>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>

            </div>

        </div>
        <div class="col-sm-6 col-sm-offset-1">

            <div class="login-reg-box">
                <h4><?= Yii::t('app', 'Регистрация')?></h4>
                <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($signup_model, 'username',
                    ['template' => "<div  class=\"input-group\"><span class='input-group-addon' style='color: #555'><i class='fa fa-user'></i></span>{input}</div>\n{hint}\n{error}"])->textInput(['placeholder'=>Yii::t('app', 'Имя')]); ?>

                <?= $form->field($signup_model, 'email',
                    ['template' => "<div  class=\"input-group\"><span class='input-group-addon' style='color: #555'><i class='fa fa-envelope'></i></span>{input}</div>\n{hint}\n{error}"])->input('email', ['placeholder'=>Yii::t('app', 'Email')]); ?>

                <?= $form->field($signup_model, 'password',
                    ['template' => "<div  class=\"input-group\"><span class='input-group-addon' style='color: #555'><i class='fa fa-lock'></i></span>{input}</div>\n{hint}\n{error}"])->passwordInput(['placeholder'=>Yii::t('app', 'Пароль')]); ?>

                <?= $form->field($signup_model, 'subscribe')->checkbox(['label' =>Yii::t('app', 'Подписаться на рассылку')] ) ?>

                <div class="form-group">
                    <?= Html::submitButton(Yii::t('app', 'Отправить'), ['class' => 'btn btn-red btn-lg pull-left', 'name' => 'signup-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
                <div class="divide40"></div>
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
