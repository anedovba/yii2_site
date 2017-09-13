<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?=Yii::$app->user->identity->smallImage?>" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username?></p>

<!--                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
//                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
//                    ['label' => 'Пользователи', 'icon' => 'user', 'url' => ['/user']],
//                    ['label' => 'Агенты', 'icon' => 'user-circle', 'url' => ['/agent']],
//                    ['label' => 'Объекты', 'icon' => 'home', 'url' => ['/gii']],
//                    [
//                            'label' => 'Страницы', 'icon' => 'file-text', 'url' => ['/gii'],
//                        'items'=>[
//                                ['label' => 'Бухгалтерия и право', 'icon' => 'file-code-o', 'url' => ['/gii'],],
//                                ['label' => 'Экспертная оценка', 'icon' => 'file-code-o', 'url' => ['/gii'],],
//                                ['label' => 'Консалтинг', 'icon' => 'file-code-o', 'url' => ['/gii'],],
//
//                        ]
//                    ],
                    [
                        'label' => 'Справочник', 'icon' => 'file-text-o',
                        'items'=>[
                            ['label' => 'Страны', 'url' => ['/country'],],
                            ['label' => 'Область/регион', 'url' => ['/region'],],
                            ['label' => 'Города', 'url' => ['/city'],],
                            ['label' => 'Тип недвижимости', 'url' => ['/object-type'],],
                            ['label' => 'Операции с недвижимостью', 'url' => ['/operation'],],


                        ]
                    ],
                    ['label' => 'Настройки', 'icon' => 'gears', 'url' => ['/gii']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
//                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Same tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
