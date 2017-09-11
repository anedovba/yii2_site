<?php

use yii\bootstrap\Html;
$route='/';
if(\Yii::$app->controller->route!='site/index'){
    $route=\Yii::$app->controller->route;
}
if(\Yii::$app->language == 'ru'):
//echo $route; die;
    echo Html::a('Укр', array_merge(
        \Yii::$app->request->get(),
        [$route, 'language' => 'uk']
    ));
else:
    echo Html::a('Рос', array_merge(
        \Yii::$app->request->get(),
        [$route, 'language' => 'ru']
    ));
endif;