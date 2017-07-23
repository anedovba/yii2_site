<?php
/**
 * Created by PhpStorm.
 * User: ANNA
 * Date: 17.07.2017
 * Time: 3:19
 */

/* @var $this yii\web\View */
/* @var $blogs \common\models\Blog */
/* @var $dataProvider \yii\data\ActiveDataProvider */
$blogs=$dataProvider->getModels();
?>
<div class="body-content">

    <?=
    \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_one',
    ]);
    ?>

</div>
