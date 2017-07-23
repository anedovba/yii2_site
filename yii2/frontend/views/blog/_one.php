<?php
/**
 * Created by PhpStorm.
 * User: ANNA
 * Date: 23.07.2017
 * Time: 20:50
 */
 ?>
<div class="col-lg-12">
    <h2><?=$model->title?></h2>

    <p><?=$model->text?></p>
    <?= \yii\helpers\Html::a('Подробнее', ['blog/one', 'url'=>$model->url], ['class'=>'btn btn-default'])?>
</div>
