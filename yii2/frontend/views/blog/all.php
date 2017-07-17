<?php
/**
 * Created by PhpStorm.
 * User: ANNA
 * Date: 17.07.2017
 * Time: 3:19
 */

/* @var $this yii\web\View */
/* @var $blogs \common\models\Blog */
?>
<div class="body-content">

    <div class="row">
        <?php foreach ($blogs as $blog):?>

            <div class="col-lg-12">
                <h2><?=$blog->title?></h2>

                <p><?=$blog->text?></p>
                <?= \yii\helpers\Html::a('Подробнее', ['blog/one', 'url'=>$blog->url], ['class'=>'btn btn-default'])?>
            </div>
        <?php endforeach;?>

    </div>

</div>
