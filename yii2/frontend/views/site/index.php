<?php

/* @var $this yii\web\View */
/* @var $blogs \common\models\Blog */
/* @var $agents \common\models\Agents */
/* @var $objects \common\models\Object */
/* @var $topobjects \common\models\Object */
/* @var $types \common\models\ObjectType */
/* @var $operations \common\models\Operation */
/* @var $dataProvider \yii\data\ActiveDataProvider */


$this->title = Yii::t('app', 'Главная');
?>


<style>

    .image:hover a {
        opacity: 0.3;!important;
    }
    .image a {
        opacity: 0;!important;
    }
    .carousel-control.right{
        width: 20px;
    }
    .carousel-control.left{
        width: 20px;
    }
    .carousel-indicators li {
        width: 5px;
        height: 5px;
        margin: 1px;
        text-indent: -999px;
        cursor: pointer;
        background-color: gray;
        /*background-color: rgba(0,0,0,0);*/
        border: 1px solid gray;
        border-radius: 5px;
    }
    .carousel-indicators {
        top: 20px;
    }
    .carousel-indicators .active {
        width: 7px;
        height: 7px;

</style>
<div class="fullwidthbanner">
    <div class="tp-banner">
        <ul>
            <?php foreach($objects as $object):?>
            <!-- SLIDE -->
            <li data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="<?=$object->object_name?>">
                <!-- MAIN IMAGE -->
                <img src="uploads/images/property/<?=$object->mainImage->image?>"   alt="darkblurbg"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                <div class="caption slider-title sft"
                     data-x="50"
                     data-y="160"
                     data-speed="1000"
                     data-start="1000"
                     data-easing="easeOutExpo">
                    <?= $object->object_name ?>
                </div>
                <div class="caption slider-text sfl"
                     data-x="50"
                     data-y="214"
                     data-speed="1000"
                     data-start="1800"
                     data-easing="easeOutExpo">
                    <?= $object->operation->operation_name ?>
                </div>
                <div class="caption sfb slider-price tp-resizeme"
                     data-x="50"
                     data-y="258"
                     data-speed="500"
                     data-start="1800"
                     data-easing="Sine.easeOut">
                    <?=number_format($object->price, '2', ',', ' ') ?> грн
                </div>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
</div><!--full width banner-->

<!--revolution end-->
<div class="search-filter">
    <div class="container">
        <form role="form">
            <div class="row">
                <div class="col-md-3 col-sm-6 margin20 select-option">
                    <section>
                        <select class="cs-select cs-skin-elastic">
                            <option value="" disabled selected><?= Yii::t('app', 'Размещение')?></option>
                            <?php foreach($objects as $object):
                                $city[]=$object->city->city_name;
                                $city=array_unique($city);
                                 endforeach; ?>
                            <?php foreach($city as $one):?>
                            <option value=""><?=$one?></option>
                            <?php endforeach; ?>
                        </select>
                    </section>
                </div>


                <div class="col-md-3 col-sm-6 margin20 select-option">
                    <section>
                        <select class="cs-select cs-skin-elastic">
                            <option value="" disabled selected><?= Yii::t('app', 'Вид помещения')?></option>
                            <?php foreach($types as $type):?>
                                <option value=""><?=$type->object_type_name?></option>
                            <?php endforeach; ?>
                        </select>
                    </section>
                </div>

                <div class="col-md-3 col-sm-6 margin20 select-option">
                    <section>
                        <select class="cs-select cs-skin-elastic">
                            <option value="" disabled selected><?= Yii::t('app', 'Тип операции')?></option>
                            <?php foreach($operations as $operation):?>
                                <option value=""><?=$operation->operation_name?></option>
                            <?php endforeach; ?>
                        </select>
                    </section>
                </div>
                <div class="col-md-3 col-sm-6 margin20">
                    <a href="#" class="btn btn-red btn-lg btn-block"><i class="fa fa-search"></i><?= Yii::t('app', 'Поиск')?></a>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="divide70"></div>

<div class="container">
    <h3 class="title-section clearfix"><?= Yii::t('app', 'Эксклюзивные предложения')?>
        <a href="/site/propertylisting" class="link-arrow"><?= Yii::t('app', 'Посмотреть все')?></a></h3>
    <?php $i=1; foreach($topobjects as $tobject):?>
    <?php if($i%4==0):?>
    <div class="row">
    <?php endif; ?>
        <div class="col-sm-6 col-md-3 margin30">
            <div class="property clearfix">
                <div class="image">
                    <div class="content">
                <?php

                            $carousel1=[];
                            foreach ($tobject->objectImages as $one){
                                $carousel1[]=[
                                    'content' => '<img class="img-responsive" data-bgposition="center center" style="max-height: 175px; margin: 0 auto" style="width:225px;height:175px" src="uploads/images/property/'.$one->image.'"/>',
                                ];
                            }
                            echo \yii\bootstrap\Carousel::widget ( [
                                'items' => $carousel1,
                                'options' => ['class' => 'carousel slide'],
                            ]);
                            ?>
                        <span class="label-property"><?= $tobject->operation->operation_name?></span>                        <span class="label-price"><?=number_format($tobject->price, '2', ',', ' ') ?> грн</span>
                    </div><!--content-->
                </div><!--image-->
                <div class="property-detail">
                    <h5 class="title"><a href="#"><?= $tobject->object_name ?></a></h5>
                    <span class="location"><?= $tobject->country->country_name?>, <?= $tobject->region->region_name?>, <?= $tobject->city->city_name?>, <?= $tobject->object_street?> </span>
                    <div class="pull-left">
                        <p><b><?= Yii::t('app', 'Площадь')?>:</b> <?= $tobject->area?> m<sup>2</sup></p>
                    </div>
                    <div class="pull-right">
                        <span><?= $tobject->rooms?'<img src="img/estate/bedrooms.png" alt="">'.$tobject->rooms:'-' ?></span>
                    </div>
                </div><!--property details-->
            </div><!--property-->
        </div><!--property columns-->
        <?php if($i%4==0):?>
        </div>
        <?php endif;
        $i++;
        endforeach;?>
    <div class="row">
        <div class="col-sm-12 text-center">
                <a href="/site/propertylisting" class="btn btn-lg btn-red"><?= Yii::t('app', 'Посмотреть еще')?></a>
        </div>
    </div>
    <div class="divide60"></div>
    <div class="row">
<!--        --><?php
//        $markers = [];
//        foreach ($objects as $object) {
//            $carousel=[];
//            foreach ($object->objectImages as $one){
//                $carousel[]=[
//                    'content' => '<img class="img-responsive" data-bgposition="center center" style="max-height: 175px; margin: 0 auto" style="width:225px;height:175px" src="uploads/images/property/'.$one->image.'"/>',
//                ];
//            }
//            $c= \yii\bootstrap\Carousel::widget ( [
//                'items' => $carousel,
//                'options' => ['class' => 'carousel slide']
//            ]);
//            $marker = new \dosamigos\google\maps\overlays\Marker(['title' => $object->object_name, 'position' => new \dosamigos\google\maps\LatLng(['lat' => $object->lt, 'lng' => $object->lg]), 'icon'=>'img/estate/pin.png']);
//            $content = '<h4>' . \yii\helpers\Html::a($object->object_name, ['/location/view', 'id' => $object->id]) .'</h4><hr><p>'.$object->operation->operation_name.'</p>'. $c;
//            $marker->attachInfoWindow(new \dosamigos\google\maps\overlays\InfoWindow(['content' => $content]));
//            $markers[] = $marker;
//        }
//        $bounds = \dosamigos\google\maps\LatLngBounds::getBoundsOfMarkers($markers);
//        $map = new \dosamigos\google\maps\Map(['center' => $bounds->getCenterCoordinates(), 'zoom' => $bounds->getZoom(250), 'width' => '100%', 'height' => '100%']);
//        foreach ($markers as $marker) {
//            $map->addOverlay($marker);
//        }
//        echo $map->display();
//        ?>
    </div>
    <div class="divide60"></div>
    <div class="row">
        <div class="col-sm-12">
            <h3 class="title-section"><?= Yii::t('app', 'Все предложения')?></h3>
        </div>
    </div>
    <div class="row">
        <div class="all-property-slider">

            <div id="property-slider" class="owl-carousel owl-theme">
                <?php foreach ($objects as $object):?>
                <div class="item">
                    <div class="property clearfix">
                        <div class="image">
                            <div class="content">
                                <a href="#"><i class="fa fa-search-plus"></i></a>
                                <img src="uploads/images/property/<?=$object->mainImage->image?>" class="img-responsive" alt="propety" style="max-height: 175px; margin: 0 auto">
                                <span class="label-property"><?= $object->operation->operation_name?></span>
                                <span class="label-price"><?=number_format($object->price, '2', ',', ' ') ?> грн</span>
                            </div><!--content-->
                        </div><!--image-->
                        <div class="property-detail">
                            <h5 class="title"><a href="#"><?= $object->object_name?></a></h5>
                            <span class="location"><?= $object->country->country_name?>, <?= $object->region->region_name?>, <?= $object->city->city_name?>, <?= $object->object_street?> </span>
                            <div class="pull-left">
                                <p><b><?= Yii::t('app', 'Площадь')?>:</b> <?= $object->area?> m<sup>2</sup></p>
                            </div>
                            <div class="pull-right">
                                <span><?= $object->rooms?'<img src="img/estate/bedrooms.png" alt="">'.$object->rooms:'-' ?></span>
                            </div>
                        </div><!--property details-->
                    </div><!--property-->
                </div>
                <?php endforeach; ?>
            </div><!--owl slider-->
        </div><!--all property slider-->
    </div>
    <!--col-md-12-->
</div>
<!--property container-->

<div class="divide40"></div>

<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 text-center">
                <h3><?= Yii::t('app', 'Хотите видеть Вашу недвижимость тут')?>? </h3>
            </div>
            <div class="col-sm-4 text-center">
                <a href="/site/addproperty"><?= Yii::t('app', 'Добавить объект сейчас')?></a>
            </div>
        </div>
    </div>
</div><!--call to action-->

<div class="divide70"></div>

<div class="container">
    <div class="center-title">
        <h3><?= Yii::t('app', 'Наши Агенты')?></h3>
        <p>
            <?= Yii::t('app', 'Мы – опытная команда оценщиков, консультантов и риелторов, часть из которых имеют международные сертификаты RICS, CCIM и CPM.')?>
        </p>
    </div>
    <div class="row">
<?php foreach($agents as $agent):?>
        <div class="col-md-4 col-sm-6 margin30">
            <div class="agent-box">
                <img src="uploads/images/800x/<?=$agent->user->image?>" class="img-circle img-responsive" width="200" alt="">
                <h3><?=$agent->name?></h3>
                <p>
                    <?=$agent->position?>
                </p>
                <a href="/site/agentdetail?id=<?=$agent->id?>"><?= Yii::t('app', 'Посмотреть профайл')?></a>
            </div>
        </div><!--agent col-->
<?php endforeach;?>
    </div>
</div><!--agents content-->
<div class="divide40"></div>

<!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqb3fT3SbMSDMggMEK7fJOIkvamccLrjA&sensor=false"></script><!-- google maps -->-->
<!--<script src="js/map.js" type="text/javascript"></script>-->