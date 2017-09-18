<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
<?= Yii::t('app', 'Приветствуем')?> <?= $user->username ?>,

<?= Yii::t('app', 'Следуйте далее по ссылке, что б сбросить свой пароль:')?>

<?= $resetLink ?>
