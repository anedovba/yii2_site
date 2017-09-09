<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use \yii\helpers\Url;

$this->title = Yii::t('app', 'Добавить объект');
?>
        <div class="divide70"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <h3><?= Yii::t('app', 'Добавьте ваш объект')?></h3>
                    <?php if(Yii::$app->user->isGuest):?>
                    <div class="alert alert-warning"><?= Yii::t('app', 'Вы должны авторизоваться, прежде чем добавить ваш объект')?></div>
                    <?php endif;?>
                </div>
            </div> <div class="divide70"></div>

            <form role="form" class="property-submit-form">
                <h4><?= Yii::t('app', 'Детали объекта')?></h4>
                <div class="row margin30">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="<?= Yii::t('app', 'Название')?>">
                        </div>

                    </div><!--col 4-->

                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="<?= Yii::t('app', 'Адрес')?>">
                                </div>
                            </div>
                            <div class="form-group select-option col-sm-6">
                                <section>
                                    <select class="cs-select cs-skin-elastic">
                                        <option value="" disabled selected><?= Yii::t('app', 'Город')?></option>
                                        <option value="">New York</option>
                                        <option value="">Sydney</option>
                                    </select>
                                </section>
                            </div>

                            </div>

                        </div><div class="col-sm-12">
                        <div class="form-group">
                            <textarea name="description" class="form-control " rows="1" cols="10" placeholder="<?= Yii::t('app', 'Описание')?>"></textarea>
                        </div>
                    </div>
                </div><!--row-->
                <h4><?= Yii::t('app', 'Дополнительная информация')?></h4>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="<?= Yii::t('app', 'Цена')?> $16000">
                        </div>
                    </div>
                    <div class="col-sm-4 select-option">
                        <div class="form-group">
                            <section>
                                <select class="cs-select cs-skin-elastic">
                                    <option value="" disabled selected><?= Yii::t('app', 'Тип объекта')?></option>
                                    <option value="">Villa </option>
                                    <option value="">Single home</option>
                                    <option value="">Cottage </option>
                                    <option value="">Family House </option>
                                    <option value="">Apartment </option>
                                </select>
                            </section>
                        </div>
                    </div>
                    <div class="col-sm-4 select-option">
                        <div class="form-group">
                            <section>
                                <select class="cs-select cs-skin-elastic">
                                    <option value="" disabled selected><?= Yii::t('app', 'Тип операции')?></option>
                                    <option value="">For Sale</option>
                                    <option value="">For rent</option>
                                </select>
                            </section> 
                        </div>
                    </div>
                </div>
                <div class="row margin30">
                    <div class="col-sm-4 select-option">
                        <div class="form-group">
                            <section>
                                <select class="cs-select cs-skin-elastic">
                                    <option value="" disabled selected><?= Yii::t('app', 'Спальня')?></option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4+</option>
                                </select>
                            </section>
                        </div>
                    </div>
                    <div class="col-sm-4 select-option">
                        <div class="form-group">
                            <section>
                                <select class="cs-select cs-skin-elastic">
                                    <option value="" disabled selected><?= Yii::t('app', 'Ванная')?></option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4+</option>
                                </select>
                            </section>
                        </div>
                    </div>
                    <div class="col-sm-4 select-option">
                        <div class="form-group">
                            <section>
                                <select class="cs-select cs-skin-elastic">
                                    <option value="" disabled selected><?= Yii::t('app', 'Паркинг')?></option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3+</option>
                                </select>
                            </section>
                        </div>
                    </div>
                </div>
                <h4><?= Yii::t('app', 'Загрузка фото')?></h4>
<!--                <p>-->
<!--                    Images must be 768*500 size, contains into .ZIP folder-->
<!--                </p>-->
                <div class="row margin40">
                    <div class="col-sm-4">
                        <div class="image-placeholder">768x500 (.JPG)</div>
                        <input type="file" name="image1">
                    </div>
                    <div class="col-sm-4">
                        <div class="image-placeholder">768x500 (.JPG)</div>
                        <input type="file" name="image1">
                    </div>
                    <div class="col-sm-4">
                        <div class="image-placeholder">768x500 (.JPG)</div>
                        <input type="file" name="image1">
                    </div>
                </div>
                <h4><?= Yii::t('app', 'Удобства')?></h4>
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                        <label class="checkbox">
                            <input type="checkbox"><?= Yii::t('app', 'Кондиционер')?>
                        </label> 	
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                        <label class="checkbox">
                            <input type="checkbox"><?= Yii::t('app', 'Отопление')?>
                        </label> 	
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                        <label class="checkbox">
                            <input type="checkbox"><?= Yii::t('app', 'Балкон')?>
                        </label> 	
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                        <label class="checkbox">
                            <input type="checkbox"><?= Yii::t('app', 'Посудомойная машина')?>
                        </label> 	
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                        <label class="checkbox">
                            <input type="checkbox"><?= Yii::t('app', 'Басейн')?>
                        </label> 	
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                        <label class="checkbox">
                            <input type="checkbox"><?= Yii::t('app', 'Интернет')?>
                        </label> 	
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                        <label class="checkbox">
                            <input type="checkbox"><?= Yii::t('app', 'Терасса')?>
                        </label> 	
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                        <label class="checkbox">
                            <input type="checkbox"><?= Yii::t('app', 'Микроволновка')?>
                        </label> 	
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                        <label class="checkbox">
                            <input type="checkbox"><?= Yii::t('app', 'Холодильник')?>
                        </label> 	
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                        <label class="checkbox">
                            <input type="checkbox"><?= Yii::t('app', 'Кабельное ТВ')?>
                        </label> 	
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                        <label class="checkbox">
                            <input type="checkbox"><?= Yii::t('app', 'Видеонаблюдение')?>
                        </label> 	
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-6 text-left">
                        <label class="checkbox">
                            <input type="checkbox"><?= Yii::t('app', 'Тостер')?>
                        </label>
                    </div>
                </div>
                <div class="divide30"></div>
                <div class="row margin40">
                    <div class="col-sm-8">
                        <label class="checkbox">
                            <input type="checkbox"><?= Yii::t('app', 'Принять условия и термины')?>
                        </label> 
                         <label class="checkbox">
                            <input type="checkbox"><?= Yii::t('app', 'Подписаться на рассылку')?>
                        </label> 
                    </div>
                </div>
                <?php if(!Yii::$app->user->isGuest):?>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-red btn-lg"><?= Yii::t('app', 'Добавить объект')?></button>
                </div>
                <?php endif;?>
            </form>
        </div>
        <div class="divide70"></div>
<?php if(Yii::$app->user->isGuest):?>
        <div class="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-center">
                        <h3><?= Yii::t('app', 'Присоединяйтесь к нашим довольным клиентам')?> </h3>
                    </div>
                    <div class="col-sm-4 text-center">
                        <a href="/site/login"><?= Yii::t('app', 'Присоединиться')?></a>
                    </div>
                </div>
            </div>
        </div>
<?php endif;?>