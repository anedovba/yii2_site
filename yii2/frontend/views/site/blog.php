<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use \yii\helpers\Url;

$this->title = Yii::t('app', 'Статьи');
?>
        <div class="divide70"></div>
        <div class="container">
           <div class="row">
          <div class="col-md-3">
<!--              <div class="sidebar-box">-->
<!--                        <form class="search-widget-2" role="form">-->
<!--                            <input type="text" class="form-control" placeholder="Search News...">-->
<!--                            <a href="#" class="submit-2"><i class="fa fa-search"></i></a>-->
<!--                        </form>-->
<!--                    </div>-->
                    <div class="sidebar-box">
                        <h3><?= Yii::t('app', 'Бухгалтерия и право')?></h3>
                        <div class="media">
<!--                            <div class="media-left">-->
<!--                                <div class="image">-->
<!--                                    <div class="content">-->
<!--                                        <a href="#"><i class="fa fa-search-plus"></i></a>-->
<!--                                        <img src="/img/estate/sm-1.jpg" width="100" alt="propety">-->
<!--                                    </div><!--content-->
<!--                                </div><!--image-->
<!--                            </div>-->
                            <div class="media-body">
                                <p><a href="/site/blog"><?= Yii::t('app', 'Бухгалтерские услуги')?></a></p>
                            </div>
                        </div><!--media-->
                        <div class="media">

                            <div class="media-body">
                                <p><a href="/site/blog"><?= Yii::t('app', 'Юридические услуги')?></a></p>
                            </div>
                        </div><!--media-->
                        <div class="media">

                            <div class="media-body">
                                <p><a href="/site/blog"><?= Yii::t('app', 'Тарифы и сроки')?></a></p>
                            </div>
                        </div><!--media-->
                    </div><!--sidebar box-->
                </div><!--sidbar left column-->
                <!--copy all col-md-3 div and paste after col-md-9 to make sidebar right-->
               <div class="col-md-9">
                   <div class="blog-post">
                       <div class="row">
                           <div class="col-md-12 margin20">
                               <div class="image">
                                   <div class="content">
                                       <img src="/img/estate/img-1.jpg" alt="propety" class="img-responsive">
                                   </div><!--content-->
                               </div><!--image-->
                           </div>
                           <div class="col-md-12 margin20">
<!--                               <ul class="list-inline post-detail">-->
<!--                                   <li>by <a href="#">assan</a></li>-->
<!--                                   <li><i class="fa fa-calendar"></i> 31st july 2014</li>-->
<!--                                   <li><i class="fa fa-tag"></i> <a href="#">Sports</a></li>-->
<!--                               </ul>-->
                               <h2><a href="real-estate-single-post.php">Lorem ipsum dollor sit amet</a></h2>
                               <p>
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie
                                   ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie

                               </p>
                               <p>
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie
                                   ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie

                               </p>
                               <div class="divide40"></div>
<!--                               <div class="comment-form">-->
<!--                                   <h3>Leave Comment</h3>-->
<!--                                   <div class="form-contact">-->
<!--                                       <form role="form">-->
<!--                                           <div class="form-group">-->
<!--                                               <label for="name">Name</label>-->
<!--                                               <input type="email" class="form-control" id="name" required="">-->
<!--                                           </div>-->
<!--                                           <div class="form-group">-->
<!--                                               <label for="email">Email</label>-->
<!--                                               <input type="password" class="form-control" id="email" required="">-->
<!--                                           </div>-->
<!--                                           <div class="form-group">-->
<!--                                               <label for="message">Comment</label>-->
<!--                                               <textarea class="form-control" rows="7" id="message" required=""></textarea>-->
<!--                                           </div>-->
<!--                                           <button type="submit" class="btn btn-theme-bg btn-lg pull-right">Comment</button>-->
<!--                                       </form>-->
<!--                                   </div>-->
<!--                               </div>-->
                           </div>
                       </div>
                   </div><!--post-->
               </div>
            </div>

        </div>
        <div class="divide70"></div>
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
