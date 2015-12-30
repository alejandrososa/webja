<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use backend\assets\BackendAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use common\widgets\Alert;
use yii\widgets\Breadcrumbs;

//AppAsset::register($this);
BackendAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="menubar-hoverable header-fixed menubar-pin ">
<?php $this->beginBody() ?>

<!-- BEGIN HEADER-->
<header id="header" >
    <div class="headerbar">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="headerbar-left">
            <ul class="header-nav header-nav-options">
                <li class="header-nav-brand" >
                    <div class="brand-holder">
                        <a href="../../html/dashboards/dashboard.html">
                            <span class="text-lg text-bold text-primary">CMS JA</span>
                        </a>
                    </div>
                </li>
                <li>
                    <a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="headerbar-right">
            <ul class="header-nav header-nav-options">
                <li>
                    <!-- Search form -->
                    <form class="navbar-search" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" name="headerSearch" placeholder="Enter your keyword">
                        </div>
                        <button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
                    </form>
                </li>
                <li class="dropdown hidden-xs">
                    <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
                        <i class="fa fa-bell"></i><sup class="badge style-danger">4</sup>
                    </a>
                    <ul class="dropdown-menu animation-expand">
                        <li class="dropdown-header">Today's messages</li>
                        <li>
                            <a class="alert alert-callout alert-warning" href="javascript:void(0);">
                                <img class="pull-right img-circle dropdown-avatar" src="../../assets/img/avatar2.jpg?1404026449" alt="" />
                                <strong>Alex Anistor</strong><br/>
                                <small>Testing functionality...</small>
                            </a>
                        </li>
                        <li>
                            <a class="alert alert-callout alert-info" href="javascript:void(0);">
                                <img class="pull-right img-circle dropdown-avatar" src="../../assets/img/avatar3.jpg?1404026799" alt="" />
                                <strong>Alicia Adell</strong><br/>
                                <small>Reviewing last changes...</small>
                            </a>
                        </li>
                        <li class="dropdown-header">Options</li>
                        <li><a href="../../html/pages/login.html">View all messages <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
                        <li><a href="../../html/pages/login.html">Mark as read <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
                    </ul><!--end .dropdown-menu -->
                </li><!--end .dropdown -->
                <li class="dropdown hidden-xs">
                    <a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
                        <i class="fa fa-area-chart"></i>
                    </a>
                    <ul class="dropdown-menu animation-expand">
                        <li class="dropdown-header">Server load</li>
                        <li class="dropdown-progress">
                            <a href="javascript:void(0);">
                                <div class="dropdown-label">
                                    <span class="text-light">Server load <strong>Today</strong></span>
                                    <strong class="pull-right">93%</strong>
                                </div>
                                <div class="progress"><div class="progress-bar progress-bar-danger" style="width: 93%"></div></div>
                            </a>
                        </li><!--end .dropdown-progress -->
                        <li class="dropdown-progress">
                            <a href="javascript:void(0);">
                                <div class="dropdown-label">
                                    <span class="text-light">Server load <strong>Yesterday</strong></span>
                                    <strong class="pull-right">30%</strong>
                                </div>
                                <div class="progress"><div class="progress-bar progress-bar-success" style="width: 30%"></div></div>
                            </a>
                        </li><!--end .dropdown-progress -->
                        <li class="dropdown-progress">
                            <a href="javascript:void(0);">
                                <div class="dropdown-label">
                                    <span class="text-light">Server load <strong>Lastweek</strong></span>
                                    <strong class="pull-right">74%</strong>
                                </div>
                                <div class="progress"><div class="progress-bar progress-bar-warning" style="width: 74%"></div></div>
                            </a>
                        </li><!--end .dropdown-progress -->
                    </ul><!--end .dropdown-menu -->
                </li><!--end .dropdown -->
            </ul><!--end .header-nav-options -->
            <ul class="header-nav header-nav-profile">
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
                        <img src="../../assets/img/avatar1.jpg?1403934956" alt="" />
								<span class="profile-info">
									Daniel Johnson
									<small>Administrator</small>
								</span>
                    </a>
                    <ul class="dropdown-menu animation-dock">
                        <li class="dropdown-header">Config</li>
                        <li><a href="../../html/pages/profile.html">My profile</a></li>
                        <li><a href="../../html/pages/blog/post.html">My blog <span class="badge style-danger pull-right">16</span></a></li>
                        <li><a href="../../html/pages/calendar.html">My appointments</a></li>
                        <li class="divider"></li>
                        <li><a href="../../html/pages/locked.html"><i class="fa fa-fw fa-lock"></i> Lock</a></li>
                        <li><a href="<?php echo Yii::$app->urlManager->createUrl(['/logout']); ?>"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
                    </ul><!--end .dropdown-menu -->
                </li><!--end .dropdown -->
            </ul><!--end .header-nav-profile -->
            <ul class="header-nav header-nav-toggle">
                <li>
                    <a class="btn btn-icon-toggle btn-default" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
                        <i class="fa fa-ellipsis-v"></i>
                    </a>
                </li>
            </ul><!--end .header-nav-toggle -->
        </div><!--end #header-navbar-collapse -->
    </div>
</header>
<!-- END HEADER-->

<!-- BEGIN BASE-->
<div id="base">

    <!-- BEGIN OFFCANVAS LEFT -->
    <div class="offcanvas">
    </div><!--end .offcanvas-->
    <!-- END OFFCANVAS LEFT -->

    <!-- BEGIN CONTENT-->
    <div id="content">

        <section>
            <div class="section-header">

                <?php echo Breadcrumbs::widget([
                    'tag' => 'ol',
                    'homeLink' => [
                        'label' => Yii::t('yii', 'Oficina'),
                        'url' => Yii::$app->homeUrl,
                    ],
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>

            </div>


            <?php
/*
            NavBar::begin([
                'brandLabel' => 'My Company',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-default',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-collapse'],
                'items' => $menuItems,
            ]);
            NavBar::end();*/
            ?>



            <?= Alert::widget() ?>
            <?= $content ?>
        </section>

    <?php
    /*
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = [
            'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();*/
    ?>

        <!-- BEGIN BLANK SECTION -->
    </div><!--end #content-->
    <!-- END CONTENT -->

    <!-- BEGIN MENUBAR-->
    <div id="menubar" class="menubar-inverse ">
        <div class="menubar-fixed-panel">
            <div>
                <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="expanded">
                <a href="../../html/dashboards/dashboard.html">
                    <span class="text-lg text-bold text-primary ">CMS&nbsp;JA</span>
                </a>
            </div>
        </div>
        <div class="menubar-scroll-panel">



            <!-- BEGIN MAIN MENU -->
            <ul id="main-menu" class="gui-controls">

                <!-- BEGIN DASHBOARD -->
                <li>
                    <a href="<?php echo Yii::$app->urlManager->createUrl(['/']); ?>" >
                        <div class="gui-icon"><i class="md md-home"></i></div>
                        <span class="title">Oficina</span>
                    </a>
                </li><!--end /menu-li -->
                <!-- END DASHBOARD -->

                <!-- BEGIN EMAIL -->
                <li class="gui-folder">
                    <a>
                        <div class="gui-icon"><i class="md md-computer"></i></div>
                        <span class="title">Paginas</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="<?php echo Yii::$app->urlManager->createUrl(['paginas/paginas/portada']); ?>" ><span class="title">Portada</span></a></li>
                        <li><a href="<?php echo Yii::$app->urlManager->createUrl(['paginas/paginas/contacto']); ?>" ><span class="title">Conctacto</span></a></li>
                        <li><a href="<?php echo Yii::$app->urlManager->createUrl(['paginas/paginas/index']); ?>" ><span class="title">Todas</span></a></li>
                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->
                <!-- END EMAIL -->

                <!-- BEGIN DASHBOARD -->
                <li>
                    <a href="../../html/layouts/builder.html" >
                        <div class="gui-icon"><i class="md md-web"></i></div>
                        <span class="title">Layouts</span>
                    </a>
                </li><!--end /menu-li -->
                <!-- END DASHBOARD -->

                <!-- BEGIN UI -->
                <li class="gui-folder">
                    <a>
                        <div class="gui-icon"><i class="fa fa-puzzle-piece fa-fw"></i></div>
                        <span class="title">UI elements</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="../../html/ui/colors.html" ><span class="title">Colors</span></a></li>
                        <li><a href="../../html/ui/typography.html" ><span class="title">Typography</span></a></li>
                        <li><a href="../../html/ui/cards.html" ><span class="title">Cards</span></a></li>
                        <li><a href="../../html/ui/buttons.html" ><span class="title">Buttons</span></a></li>
                        <li><a href="../../html/ui/lists.html" ><span class="title">Lists</span></a></li>
                        <li><a href="../../html/ui/tabs.html" ><span class="title">Tabs</span></a></li>
                        <li><a href="../../html/ui/accordions.html" ><span class="title">Accordions</span></a></li>
                        <li><a href="../../html/ui/messages.html" ><span class="title">Messages</span></a></li>
                        <li><a href="../../html/ui/offcanvas.html" ><span class="title">Off-canvas</span></a></li>
                        <li><a href="../../html/ui/grid.html" ><span class="title">Grid</span></a></li>
                        <li class="gui-folder">
                            <a href="javascript:void(0);">
                                <span class="title">Icons</span>
                            </a>
                            <!--start submenu -->
                            <ul>
                                <li><a href="../../html/ui/icons/materialicons.html" ><span class="title">Material Design Icons</span></a></li>
                                <li><a href="../../html/ui/icons/fontawesome.html" ><span class="title">Font Awesome</span></a></li>
                                <li><a href="../../html/ui/icons/glyphicons.html" ><span class="title">Glyphicons</span></a></li>
                                <li><a href="../../html/ui/icons/skycons.html" ><span class="title">Skycons</span></a></li>
                            </ul><!--end /submenu -->
                        </li><!--end /menu-li -->
                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->
                <!-- END UI -->

                <!-- BEGIN TABLES -->
                <li class="gui-folder">
                    <a>
                        <div class="gui-icon"><i class="fa fa-table"></i></div>
                        <span class="title">Tables</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="../../html/tables/static.html" ><span class="title">Static Tables</span></a></li>
                        <li><a href="../../html/tables/dynamic.html" ><span class="title">Dynamic Tables</span></a></li>
                        <li><a href="../../html/tables/responsive.html" ><span class="title">Responsive Table</span></a></li>
                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->
                <!-- END TABLES -->

                <!-- BEGIN FORMS -->
                <li class="gui-folder">
                    <a>
                        <div class="gui-icon"><span class="glyphicon glyphicon-list-alt"></span></div>
                        <span class="title">Forms</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="../../html/forms/basic.html" ><span class="title">Form basic</span></a></li>
                        <li><a href="../../html/forms/advanced.html" ><span class="title">Form advanced</span></a></li>
                        <li><a href="../../html/forms/layouts.html" ><span class="title">Form layouts</span></a></li>
                        <li><a href="../../html/forms/editors.html" ><span class="title">Editors</span></a></li>
                        <li><a href="../../html/forms/validation.html" ><span class="title">Form validation</span></a></li>
                        <li><a href="../../html/forms/wizard.html" ><span class="title">Form wizard</span></a></li>
                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->
                <!-- END FORMS -->

                <!-- BEGIN PAGES -->
                <li class="gui-folder1">
                    <a>
                        <div class="gui-icon"><i class="md md-computer1"></i></div>
                        <span class="title">Pages</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li class="gui-folder">
                            <a href="javascript:void(0);">
                                <span class="title">Contacts</span>
                            </a>
                            <!--start submenu -->
                            <ul>
                                <li><a href="../../html/pages/contacts/search.html" ><span class="title">Search</span></a></li>
                                <li><a href="../../html/pages/contacts/details.html" ><span class="title">Contact card</span></a></li>
                                <li><a href="../../html/pages/contacts/add.html" ><span class="title">Insert contact</span></a></li>
                            </ul><!--end /submenu -->
                        </li><!--end /menu-li -->
                        <li class="gui-folder">
                            <a href="javascript:void(0);">
                                <span class="title">Search</span>
                            </a>
                            <!--start submenu -->
                            <ul>
                                <li><a href="../../html/pages/search/results-text.html" ><span class="title">Results - Text</span></a></li>
                                <li><a href="../../html/pages/search/results-text-image.html" ><span class="title">Results - Text and Image</span></a></li>
                            </ul><!--end /submenu -->
                        </li><!--end /menu-li -->
                        <li class="gui-folder">
                            <a href="javascript:void(0);">
                                <span class="title">Blog</span>
                            </a>
                            <!--start submenu -->
                            <ul>
                                <li><a href="../../html/pages/blog/masonry.html" ><span class="title">Blog masonry</span></a></li>
                                <li><a href="../../html/pages/blog/list.html" ><span class="title">Blog list</span></a></li>
                                <li><a href="../../html/pages/blog/post.html" ><span class="title">Blog post</span></a></li>
                            </ul><!--end /submenu -->
                        </li><!--end /menu-li -->
                        <li class="gui-folder">
                            <a href="javascript:void(0);">
                                <span class="title">Error pages</span>
                            </a>
                            <!--start submenu -->
                            <ul>
                                <li><a href="../../html/pages/404.html" ><span class="title">404 page</span></a></li>
                                <li><a href="../../html/pages/500.html" ><span class="title">500 page</span></a></li>
                            </ul><!--end /submenu -->
                        </li><!--end /menu-li -->
                        <li><a href="../../html/pages/profile.html" ><span class="title">User profile<span class="badge style-accent">42</span></span></a></li>
                        <li><a href="../../html/pages/invoice.html" ><span class="title">Invoice</span></a></li>
                        <li><a href="../../html/pages/calendar.html" ><span class="title">Calendar</span></a></li>
                        <li><a href="../../html/pages/pricing.html" ><span class="title">Pricing</span></a></li>
                        <li><a href="../../html/pages/timeline.html" ><span class="title">Timeline</span></a></li>
                        <li><a href="../../html/pages/maps.html" ><span class="title">Maps</span></a></li>
                        <li><a href="../../html/pages/locked.html" ><span class="title">Lock screen</span></a></li>
                        <li><a href="../../html/pages/login.html" ><span class="title">Login</span></a></li>
                        <li><a href="../../html/pages/blank.html" class="active"><span class="title">Blank page</span></a></li>
                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->
                <!-- END FORMS -->

                <!-- BEGIN CHARTS -->
                <li>
                    <a href="../../html/charts/charts.html" >
                        <div class="gui-icon"><i class="md md-assessment"></i></div>
                        <span class="title">Charts</span>
                    </a>
                </li><!--end /menu-li -->
                <!-- END CHARTS -->

                <!-- BEGIN LEVELS -->
                <li class="gui-folder">
                    <a>
                        <div class="gui-icon"><i class="fa fa-folder-open fa-fw"></i></div>
                        <span class="title">Menu levels demo</span>
                    </a>
                    <!--start submenu -->
                    <ul>
                        <li><a href="#"><span class="title">Item 1</span></a></li>
                        <li><a href="#"><span class="title">Item 1</span></a></li>
                        <li class="gui-folder">
                            <a href="javascript:void(0);">
                                <span class="title">Open level 2</span>
                            </a>
                            <!--start submenu -->
                            <ul>
                                <li><a href="#"><span class="title">Item 2</span></a></li>
                                <li class="gui-folder">
                                    <a href="javascript:void(0);">
                                        <span class="title">Open level 3</span>
                                    </a>
                                    <!--start submenu -->
                                    <ul>
                                        <li><a href="#"><span class="title">Item 3</span></a></li>
                                        <li><a href="#"><span class="title">Item 3</span></a></li>
                                        <li class="gui-folder">
                                            <a href="javascript:void(0);">
                                                <span class="title">Open level 4</span>
                                            </a>
                                            <!--start submenu -->
                                            <ul>
                                                <li><a href="#"><span class="title">Item 4</span></a></li>
                                                <li class="gui-folder">
                                                    <a href="javascript:void(0);">
                                                        <span class="title">Open level 5</span>
                                                    </a>
                                                    <!--start submenu -->
                                                    <ul>
                                                        <li><a href="#"><span class="title">Item 5</span></a></li>
                                                        <li><a href="#"><span class="title">Item 5</span></a></li>
                                                    </ul><!--end /submenu -->
                                                </li><!--end /submenu-li -->
                                            </ul><!--end /submenu -->
                                        </li><!--end /submenu-li -->
                                    </ul><!--end /submenu -->
                                </li><!--end /submenu-li -->
                            </ul><!--end /submenu -->
                        </li><!--end /submenu-li -->
                    </ul><!--end /submenu -->
                </li><!--end /menu-li -->
                <!-- END LEVELS -->

            </ul><!--end .main-menu -->
            <!-- END MAIN MENU -->

            <div class="menubar-foot-panel">
                <small class="no-linebreak hidden-folded">
                    <span class="opacity-75">Copyright &copy; 2014</span> <strong>CodeCovers</strong>
                </small>
            </div>
        </div><!--end .menubar-scroll-panel-->
    </div><!--end #menubar-->
    <!-- END MENUBAR -->

    <!-- BEGIN OFFCANVAS RIGHT -->
    <div class="offcanvas">

        <!-- BEGIN OFFCANVAS SEARCH -->
        <div id="offcanvas-search" class="offcanvas-pane width-8">
            <div class="offcanvas-head">
                <header class="text-primary">Search</header>
                <div class="offcanvas-tools">
                    <a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
                        <i class="md md-close"></i>
                    </a>
                </div>
            </div>
            <div class="offcanvas-body no-padding">
                <ul class="list ">
                    <li class="tile divider-full-bleed">
                        <div class="tile-content">
                            <div class="tile-text"><strong>A</strong></div>
                        </div>
                    </li>
                    <li class="tile">
                        <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                            <div class="tile-icon">
                                <img src="../../assets/img/avatar4.jpg?1404026791" alt="" />
                            </div>
                            <div class="tile-text">
                                Alex Nelson
                                <small>123-123-3210</small>
                            </div>
                        </a>
                    </li>
                    <li class="tile">
                        <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                            <div class="tile-icon">
                                <img src="../../assets/img/avatar9.jpg?1404026744" alt="" />
                            </div>
                            <div class="tile-text">
                                Ann Laurens
                                <small>123-123-3210</small>
                            </div>
                        </a>
                    </li>
                    <li class="tile divider-full-bleed">
                        <div class="tile-content">
                            <div class="tile-text"><strong>J</strong></div>
                        </div>
                    </li>
                    <li class="tile">
                        <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                            <div class="tile-icon">
                                <img src="../../assets/img/avatar2.jpg?1404026449" alt="" />
                            </div>
                            <div class="tile-text">
                                Jessica Cruise
                                <small>123-123-3210</small>
                            </div>
                        </a>
                    </li>
                    <li class="tile">
                        <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                            <div class="tile-icon">
                                <img src="../../assets/img/avatar8.jpg?1404026729" alt="" />
                            </div>
                            <div class="tile-text">
                                Jim Peters
                                <small>123-123-3210</small>
                            </div>
                        </a>
                    </li>
                    <li class="tile divider-full-bleed">
                        <div class="tile-content">
                            <div class="tile-text"><strong>M</strong></div>
                        </div>
                    </li>
                    <li class="tile">
                        <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                            <div class="tile-icon">
                                <img src="../../assets/img/avatar5.jpg?1404026513" alt="" />
                            </div>
                            <div class="tile-text">
                                Mabel Logan
                                <small>123-123-3210</small>
                            </div>
                        </a>
                    </li>
                    <li class="tile">
                        <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                            <div class="tile-icon">
                                <img src="../../assets/img/avatar11.jpg?1404026774" alt="" />
                            </div>
                            <div class="tile-text">
                                Mary Peterson
                                <small>123-123-3210</small>
                            </div>
                        </a>
                    </li>
                    <li class="tile">
                        <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                            <div class="tile-icon">
                                <img src="../../assets/img/avatar3.jpg?1404026799" alt="" />
                            </div>
                            <div class="tile-text">
                                Mike Alba
                                <small>123-123-3210</small>
                            </div>
                        </a>
                    </li>
                    <li class="tile divider-full-bleed">
                        <div class="tile-content">
                            <div class="tile-text"><strong>N</strong></div>
                        </div>
                    </li>
                    <li class="tile">
                        <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                            <div class="tile-icon">
                                <img src="../../assets/img/avatar6.jpg?1404026572" alt="" />
                            </div>
                            <div class="tile-text">
                                Nathan Peterson
                                <small>123-123-3210</small>
                            </div>
                        </a>
                    </li>
                    <li class="tile divider-full-bleed">
                        <div class="tile-content">
                            <div class="tile-text"><strong>P</strong></div>
                        </div>
                    </li>
                    <li class="tile">
                        <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                            <div class="tile-icon">
                                <img src="../../assets/img/avatar7.jpg?1404026721" alt="" />
                            </div>
                            <div class="tile-text">
                                Philip Ericsson
                                <small>123-123-3210</small>
                            </div>
                        </a>
                    </li>
                    <li class="tile divider-full-bleed">
                        <div class="tile-content">
                            <div class="tile-text"><strong>S</strong></div>
                        </div>
                    </li>
                    <li class="tile">
                        <a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
                            <div class="tile-icon">
                                <img src="../../assets/img/avatar10.jpg?1404026762" alt="" />
                            </div>
                            <div class="tile-text">
                                Samuel Parsons
                                <small>123-123-3210</small>
                            </div>
                        </a>
                    </li>
                </ul>
            </div><!--end .offcanvas-body -->
        </div><!--end .offcanvas-pane -->
        <!-- END OFFCANVAS SEARCH -->

        <!-- BEGIN OFFCANVAS CHAT -->
        <div id="offcanvas-chat" class="offcanvas-pane style-default-light width-12">
            <div class="offcanvas-head style-default-bright">
                <header class="text-primary">Chat with Ann Laurens</header>
                <div class="offcanvas-tools">
                    <a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
                        <i class="md md-close"></i>
                    </a>
                    <a class="btn btn-icon-toggle btn-default-light pull-right" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
                        <i class="md md-arrow-back"></i>
                    </a>
                </div>
                <form class="form">
                    <div class="form-group floating-label">
                        <textarea name="sidebarChatMessage" id="sidebarChatMessage" class="form-control autosize" rows="1"></textarea>
                        <label for="sidebarChatMessage">Leave a message</label>
                    </div>
                </form>
            </div>
            <div class="offcanvas-body">
                <ul class="list-chats">
                    <li>
                        <div class="chat">
                            <div class="chat-avatar"><img class="img-circle" src="../../assets/img/avatar1.jpg?1403934956" alt="" /></div>
                            <div class="chat-body">
                                Yes, it is indeed very beautiful.
                                <small>10:03 pm</small>
                            </div>
                        </div><!--end .chat -->
                    </li>
                    <li class="chat-left">
                        <div class="chat">
                            <div class="chat-avatar"><img class="img-circle" src="../../assets/img/avatar9.jpg?1404026744" alt="" /></div>
                            <div class="chat-body">
                                Did you see the changes?
                                <small>10:02 pm</small>
                            </div>
                        </div><!--end .chat -->
                    </li>
                    <li>
                        <div class="chat">
                            <div class="chat-avatar"><img class="img-circle" src="../../assets/img/avatar1.jpg?1403934956" alt="" /></div>
                            <div class="chat-body">
                                I just arrived at work, it was quite busy.
                                <small>06:44pm</small>
                            </div>
                            <div class="chat-body">
                                I will take look in a minute.
                                <small>06:45pm</small>
                            </div>
                        </div><!--end .chat -->
                    </li>
                    <li class="chat-left">
                        <div class="chat">
                            <div class="chat-avatar"><img class="img-circle" src="../../assets/img/avatar9.jpg?1404026744" alt="" /></div>
                            <div class="chat-body">
                                The colors are much better now.
                            </div>
                            <div class="chat-body">
                                The colors are brighter than before.
                                I have already sent an example.
                                This will make it look sharper.
                                <small>Mon</small>
                            </div>
                        </div><!--end .chat -->
                    </li>
                    <li>
                        <div class="chat">
                            <div class="chat-avatar"><img class="img-circle" src="../../assets/img/avatar1.jpg?1403934956" alt="" /></div>
                            <div class="chat-body">
                                Are the colors of the logo already adapted?
                                <small>Last week</small>
                            </div>
                        </div><!--end .chat -->
                    </li>
                </ul>
            </div><!--end .offcanvas-body -->
        </div><!--end .offcanvas-pane -->
        <!-- END OFFCANVAS CHAT -->

    </div><!--end .offcanvas-->
    <!-- END OFFCANVAS RIGHT -->

</div><!--end #base-->
<!-- END BASE -->


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
