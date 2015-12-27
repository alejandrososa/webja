<?php

/* @var $this yii\web\View */
use frontend\assets\FrontendAsset;
use app\components\ArticulosWidget;
use frontend\models\Contenido;

$baseUrl = FrontendAsset::register($this)->baseUrl;


$this->title = 'My Yii Application';
?>

<?= ArticulosWidget::widget(['message' => ' Yii2.0']) ?>



<!-- BEGIN .full-block -->
<div class="full-block">

    <!-- BEGIN .ot-slider-new -->
    <div class="ot-slider-new">

        <!-- BEGIN .slider-new-slides -->
        <div class="slider-new-slides">

            <div class="slider-slide">
                <img src="<?php echo $baseUrl; ?>/img/photos/image-102.jpg" alt="" style="width: 100%;">
                <div class="slider-layer">
                    <span class="category">Lifestyle</span>
                    <span class="date">16/10/2014</span>
                    <h2><a href="#">We've discovered the perfect no makeup makeup</a></h2>
                </div>
            </div>

            <div class="slider-slide">
                <img src="<?php echo $baseUrl; ?>/img/photos/image-103.jpg" alt="" style="width: 100%;">
                <div class="slider-layer">
                    <span class="category">Lifestyle</span>
                    <span class="date">16/10/2014</span>
                    <h2><a href="#">We've discovered the perfect no makeup makeup</a></h2>
                </div>
            </div>

            <div class="slider-slide">
                <img src="<?php echo $baseUrl; ?>/img/photos/image-102.jpg" alt="" style="width: 100%;">
                <div class="slider-layer">
                    <span class="category">Lifestyle</span>
                    <span class="date">16/10/2014</span>
                    <h2><a href="#">We've discovered the perfect no makeup makeup</a></h2>
                </div>
            </div>

            <div class="slider-slide">
                <img src="<?php echo $baseUrl; ?>/img/photos/image-102.jpg" alt="" style="width: 100%;">
                <div class="slider-layer">
                    <span class="category">Lifestyle</span>
                    <span class="date">16/10/2014</span>
                    <h2><a href="#">We've discovered the perfect no makeup makeup</a></h2>
                </div>
            </div>

            <!-- END .slider-new-slides -->
        </div>

        <div class="ot-slider-new-controls">
            <div class="ot-slider-new-controls-right">right</div>
            <div class="ot-slider-new-controls-left">left</div>
            <div class="ot-slider-new-controls-inner">
                <a href="#"><span>How style blogger sincerely jules makes flip flopx chic</span></a>
                <a href="#"><span>Quo in vero labitur ius ornatus deleniti iracundia id vix</span></a>
                <a href="#"><span>Eu his fastidii comprehensam ius dicam mquam facete malorum</span></a>
                <a href="#"><span>Has eu dicant tamquam interesset atqui affert soleat vis no</span></a>
            </div>
        </div>

        <!-- END .ot-slider -->
    </div>

    <!-- END .full-block -->
</div>

<!-- BEGIN .split-block -->
<div class="split-block">

    <!-- BEGIN .main-content -->
    <div class="main-content ot-scrollnimate" data-animation="fadeInUpSmall">

        <!-- BEGIN .ot-panel-block -->
        <?php echo ArticulosWidget::widget([
            'tipo' => 'grid',
            'rutabase'=> $baseUrl,
            'items' => $model->getUltimosArticulosCategorias()]);
        ?>

        <!-- BEGIN .ot-panel-block -->
        <div class="ot-panel-block">
            <div class="article-classic">

                <div class="paragraph-row">
                    <div class="column6 featured-side">
                        <div class="item">
                            <div class="item-header">
                                <a href="#">
                                    <span class="item-header-category"><i class="fa fa-folder-open"></i><span>Automotive</span></span>
                                    <img src="<?php echo $baseUrl; ?>/img/photos/image-29.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item-content">
                                <div class="item-content-head">
                                    <div class="item-content-date">
                                        <strong>16</strong>
                                        <span>Oct</span>
                                        <span>2015</span>
                                    </div>
                                    <h3><a href="#">Duis mollis magna porta ipsum eget feugiat</a></h3>
                                </div>
                                <p>Vivamus auctor quam nec mauris commodo laoreet. Nam ut metus elementum, pharetra diam sed, rhoncus tortor. Sed vehicula justo ut sem auctor sagittis. Etiam quis</p>
                            </div>
                        </div>
                    </div>
                    <div class="column6 list-side">

                        <!-- BEGIN .item -->
                        <div class="item">
                            <div class="item-header">
                                <a href="post.html"><img src="<?php echo $baseUrl; ?>/img/photos/image-2.jpg" alt="" /></a>
                            </div>
                            <div class="item-content">
                                <h3><a href="post.html">Duis mollis magna porta ipsum eget feugiat</a></h3>
                                <a href="post.html" class="read-more-link">read more...</a>
                            </div>
                            <!-- END .item -->
                        </div>

                        <!-- BEGIN .item -->
                        <div class="item">
                            <div class="item-header">
                                <a href="post.html"><img src="<?php echo $baseUrl; ?>/img/photos/image-3.jpg" alt="" /></a>
                            </div>
                            <div class="item-content">
                                <h3><a href="post.html">Duis mollis magna porta ipsum eget feugiat</a></h3>
                                <a href="post.html" class="read-more-link">read more...</a>
                            </div>
                            <!-- END .item -->
                        </div>

                        <!-- BEGIN .item -->
                        <div class="item">
                            <div class="item-header">
                                <a href="post.html"><img src="<?php echo $baseUrl; ?>/img/photos/image-4.jpg" alt="" /></a>
                            </div>
                            <div class="item-content">
                                <h3><a href="post.html">Duis mollis magna porta ipsum eget feugiat</a></h3>
                                <a href="post.html" class="read-more-link">read more...</a>
                            </div>
                            <!-- END .item -->
                        </div>

                        <!-- BEGIN .item -->
                        <div class="item">
                            <div class="item-header">
                                <a href="post.html"><img src="<?php echo $baseUrl; ?>/img/photos/image-5.jpg" alt="" /></a>
                            </div>
                            <div class="item-content">
                                <h3><a href="post.html">Duis mollis magna porta ipsum eget feugiat</a></h3>
                                <a href="post.html" class="read-more-link">read more...</a>
                            </div>
                            <!-- END .item -->
                        </div>

                    </div>
                </div>


            </div>
            <!-- END .ot-panel-block -->
        </div>

        <!-- BEGIN .ot-panel-block -->
        <div class="ot-panel-block dark-scheme">
            <div class="title-block">
                <h2 style="background-color: #dc8c00;">Reviews</h2>
            </div>
            <div class="reviews-block lets-do-3">

                <div class="item">
                    <div class="item-header">
                        <a href="#"><img src="<?php echo $baseUrl; ?>/img/photos/image-29.jpg" alt="" /></a>
                    </div>
                    <div class="item-content">
                        <h3><a href="#">Quadrum - Multipurpose News &amp; Magazine theme</a></h3>
                        <div class="item-rating">
                            <div class="item-rating-item">
                                <span class="item-stars right"><span class="stars-inner" style="width: 90%;"></span></span>
                                <strong>Design</strong>
                            </div>
                            <div class="item-rating-item">
                                <span class="item-stars right"><span class="stars-inner" style="width: 80%;"></span></span>
                                <strong>Performance</strong>
                            </div>
                            <div class="item-rating-item">
                                <span class="item-stars right"><span class="stars-inner" style="width: 100%;"></span></span>
                                <strong>Overall</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="item-header">
                        <a href="#"><img src="<?php echo $baseUrl; ?>/img/photos/image-30.jpg" alt="" /></a>
                    </div>
                    <div class="item-content">
                        <h3><a href="#">Quadrum - Multipurpose News &amp; Magazine theme</a></h3>
                        <div class="item-rating">
                            <div class="item-rating-item">
                                <span class="item-stars right"><span class="stars-inner" style="width: 90%;"></span></span>
                                <strong>Design</strong>
                            </div>
                            <div class="item-rating-item">
                                <span class="item-stars right"><span class="stars-inner" style="width: 80%;"></span></span>
                                <strong>Performance</strong>
                            </div>
                            <div class="item-rating-item">
                                <span class="item-stars right"><span class="stars-inner" style="width: 100%;"></span></span>
                                <strong>Overall</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="item-header">
                        <a href="#"><img src="<?php echo $baseUrl; ?>/img/photos/image-31.jpg" alt="" /></a>
                    </div>
                    <div class="item-content">
                        <h3><a href="#">Quadrum - Multipurpose News &amp; Magazine theme</a></h3>
                        <div class="item-rating">
                            <div class="item-rating-item">
                                <span class="item-stars right"><span class="stars-inner" style="width: 90%;"></span></span>
                                <strong>Design</strong>
                            </div>
                            <div class="item-rating-item">
                                <span class="item-stars right"><span class="stars-inner" style="width: 80%;"></span></span>
                                <strong>Performance</strong>
                            </div>
                            <div class="item-rating-item">
                                <span class="item-stars right"><span class="stars-inner" style="width: 100%;"></span></span>
                                <strong>Overall</strong>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END .ot-panel-block -->
        </div>

        <!-- BEGIN .ot-panel-block -->
        <div class="ot-panel-block">
            <div class="title-block">
                <h2 style="background-color: #7BBE33;">Fashion</h2>
            </div>
            <div class="article-grid lets-do-2">

                <div class="item">
                    <div class="item-header">
                        <a href="post.html">
                            <span class="item-header-category"><i class="fa fa-folder-open"></i><span>Fashion</span></span>
                            <img src="<?php echo $baseUrl; ?>/img/photos/image-29.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item-content">
                        <div class="item-content-head">
                            <div class="item-content-date">
                                <strong>16</strong>
                                <span>Oct</span>
                                <span>2015</span>
                            </div>
                            <h3><a href="post.html">Duis mollis magna porta ipsum eget feugiat</a></h3>
                        </div>
                        <p>Vivamus auctor quam nec mauris commodo laoreet. Nam ut metus elementum, pharetra diam sed, rhoncus tortor. Sed vehicula justo ut sem auctor sagittis. Etiam quis</p>
                    </div>
                    <div class="list-side">

                        <!-- BEGIN .item -->
                        <div class="item">
                            <div class="item-header">
                                <a href="post.html"><img src="<?php echo $baseUrl; ?>/img/photos/image-2.jpg" alt=""></a>
                            </div>
                            <div class="item-content">
                                <h3><a href="post.html">Duis mollis magna porta ipsum eget feugiat</a></h3>
                                <a href="post.html" class="read-more-link">read more...</a>
                            </div>
                            <!-- END .item -->
                        </div>

                        <!-- BEGIN .item -->
                        <div class="item">
                            <div class="item-header">
                                <a href="post.html"><img src="<?php echo $baseUrl; ?>/img/photos/image-3.jpg" alt=""></a>
                            </div>
                            <div class="item-content">
                                <h3><a href="post.html">Duis mollis magna porta ipsum eget feugiat</a></h3>
                                <a href="post.html" class="read-more-link">read more...</a>
                            </div>
                            <!-- END .item -->
                        </div>

                        <!-- BEGIN .item -->
                        <div class="item">
                            <div class="item-header">
                                <a href="post.html"><img src="<?php echo $baseUrl; ?>/img/photos/image-4.jpg" alt=""></a>
                            </div>
                            <div class="item-content">
                                <h3><a href="post.html">Duis mollis magna porta ipsum eget feugiat</a></h3>
                                <a href="post.html" class="read-more-link">read more...</a>
                            </div>
                            <!-- END .item -->
                        </div>

                        <!-- BEGIN .item -->
                        <div class="item">
                            <div class="item-header">
                                <a href="post.html"><img src="<?php echo $baseUrl; ?>/img/photos/image-5.jpg" alt=""></a>
                            </div>
                            <div class="item-content">
                                <h3><a href="post.html">Duis mollis magna porta ipsum eget feugiat</a></h3>
                                <a href="post.html" class="read-more-link">read more...</a>
                            </div>
                            <!-- END .item -->
                        </div>

                    </div>
                </div>

                <div class="item">
                    <div class="item-header">
                        <a href="post.html">
                            <span class="item-header-category"><i class="fa fa-folder-open"></i><span>Fashion</span></span>
                            <img src="<?php echo $baseUrl; ?>/img/photos/image-30.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item-content">
                        <div class="item-content-head">
                            <div class="item-content-date">
                                <strong>21</strong>
                                <span>Oct</span>
                                <span>2015</span>
                            </div>
                            <h3><a href="post.html">Sed vehicula justo ut sem auctor sagittis</a></h3>
                        </div>
                        <p>Vivamus auctor quam nec mauris commodo laoreet. Nam ut metus elementum, pharetra diam sed, rhoncus tortor. Sed vehicula justo ut sem auctor sagittis. Etiam quis</p>
                    </div>
                    <div class="list-side">

                        <!-- BEGIN .item -->
                        <div class="item">
                            <div class="item-header">
                                <a href="post.html"><img src="<?php echo $baseUrl; ?>/img/photos/image-2.jpg" alt=""></a>
                            </div>
                            <div class="item-content">
                                <h3><a href="post.html">Duis mollis magna porta ipsum eget feugiat</a></h3>
                                <a href="post.html" class="read-more-link">read more...</a>
                            </div>
                            <!-- END .item -->
                        </div>

                        <!-- BEGIN .item -->
                        <div class="item">
                            <div class="item-header">
                                <a href="post.html"><img src="<?php echo $baseUrl; ?>/img/photos/image-3.jpg" alt=""></a>
                            </div>
                            <div class="item-content">
                                <h3><a href="post.html">Duis mollis magna porta ipsum eget feugiat</a></h3>
                                <a href="post.html" class="read-more-link">read more...</a>
                            </div>
                            <!-- END .item -->
                        </div>

                        <!-- BEGIN .item -->
                        <div class="item">
                            <div class="item-header">
                                <a href="post.html"><img src="<?php echo $baseUrl; ?>/img/photos/image-4.jpg" alt=""></a>
                            </div>
                            <div class="item-content">
                                <h3><a href="post.html">Duis mollis magna porta ipsum eget feugiat</a></h3>
                                <a href="post.html" class="read-more-link">read more...</a>
                            </div>
                            <!-- END .item -->
                        </div>

                        <!-- BEGIN .item -->
                        <div class="item">
                            <div class="item-header">
                                <a href="post.html"><img src="<?php echo $baseUrl; ?>/img/photos/image-5.jpg" alt=""></a>
                            </div>
                            <div class="item-content">
                                <h3><a href="post.html">Duis mollis magna porta ipsum eget feugiat</a></h3>
                                <a href="post.html" class="read-more-link">read more...</a>
                            </div>
                            <!-- END .item -->
                        </div>

                    </div>
                </div>

            </div>
            <!-- END .ot-panel-block -->
        </div>

        <div class="ot-panel-block">
            <div class="title-block">
                <h2 style="background-color: #e14f55;">Category</h2>
            </div>
            <div class="article-grid articles-long">

                <div class="item">
                    <div class="item-header">
                        <a href="#">
                            <span class="item-header-category"><i class="fa fa-folder-open"></i><span>Automotive</span></span>
                            <img src="<?php echo $baseUrl; ?>/img/photos/image-29.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item-content">
                        <div class="item-content-head">
                            <div class="item-content-date">
                                <strong>16</strong>
                                <span>Oct</span>
                                <span>2015</span>
                            </div>
                            <h3><a href="#">Duis mollis magna porta ipsum eget feugiat</a></h3>
                        </div>
                        <p>Vivamus auctor quam nec mauris commodo laoreet. Nam ut metus elementum, pharetra diam sed, rhoncus tortor. Sed vehicula justo ut sem auctor sagittis. Etiam quis</p>
                    </div>
                    <div class="item-footer">
                        <button class="article-more-arrow right"><i class="fa fa-caret-right"></i><i class="show-hover">Read more</i></button>
                        <div class="item-meta">
                            <a href="#"><i class="fa fa-pencil"></i>John Doe</a>
                            <a href="#"><i class="fa fa-comment"></i>16</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="item-header">
                        <a href="#">
                            <span class="item-header-category"><i class="fa fa-folder-open"></i><span>Automotive</span></span>
                            <img src="<?php echo $baseUrl; ?>/img/photos/image-29.jpg" alt="" />
                        </a>
                    </div>
                    <div class="item-content">
                        <div class="item-content-head">
                            <div class="item-content-date">
                                <strong>16</strong>
                                <span>Oct</span>
                                <span>2015</span>
                            </div>
                            <h3><a href="#">Duis mollis magna porta ipsum eget feugiat</a></h3>
                        </div>
                        <p>Vivamus auctor quam nec mauris commodo laoreet. Nam ut metus elementum, pharetra diam sed, rhoncus tortor. Sed vehicula justo ut sem auctor sagittis. Etiam quis</p>
                    </div>
                    <div class="item-footer">
                        <button class="article-more-arrow right"><i class="fa fa-caret-right"></i><i class="show-hover">Read more</i></button>
                        <div class="item-meta">
                            <a href="#"><i class="fa fa-pencil"></i>John Doe</a>
                            <a href="#"><i class="fa fa-comment"></i>16</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="ot-panel-block">
            <div class="title-block title-block-absolute">
                <h2 style="background-color: #005a94;">Reviews</h2>
            </div>
            <div class="article-slider">

                <!-- BEGIN .ot-slider-new -->
                <div class="ot-slider-new">

                    <!-- BEGIN .slider-new-slides -->
                    <div class="slider-new-slides">

                        <div class="slider-slide">
                            <img src="<?php echo $baseUrl; ?>/img/photos/image-102.jpg" alt="" style="width: 100%;">
                            <div class="slider-layer">
                                <span class="category">Lifestyle</span>
                                <span class="date">16/10/2014</span>
                                <h2><a href="#">We've discovered the perfect no makeup makeup</a></h2>
                            </div>
                        </div>

                        <div class="slider-slide">
                            <img src="<?php echo $baseUrl; ?>/img/photos/image-103.jpg" alt="" style="width: 100%;">
                            <div class="slider-layer">
                                <span class="category">Lifestyle</span>
                                <span class="date">16/10/2014</span>
                                <h2><a href="#">We've discovered the perfect no makeup makeup</a></h2>
                            </div>
                        </div>

                        <div class="slider-slide">
                            <img src="<?php echo $baseUrl; ?>/img/photos/image-102.jpg" alt="" style="width: 100%;">
                            <div class="slider-layer">
                                <span class="category">Lifestyle</span>
                                <span class="date">16/10/2014</span>
                                <h2><a href="#">We've discovered the perfect no makeup makeup</a></h2>
                            </div>
                        </div>

                        <div class="slider-slide">
                            <img src="<?php echo $baseUrl; ?>/img/photos/image-102.jpg" alt="" style="width: 100%;">
                            <div class="slider-layer">
                                <span class="category">Lifestyle</span>
                                <span class="date">16/10/2014</span>
                                <h2><a href="#">We've discovered the perfect no makeup makeup</a></h2>
                            </div>
                        </div>

                        <!-- END .slider-new-slides -->
                    </div>

                    <div class="ot-slider-new-controls">
                        <div class="ot-slider-new-controls-right">right</div>
                        <div class="ot-slider-new-controls-left">left</div>
                        <div class="ot-slider-new-controls-inner">
                            <a href="#"><span>How style blogger sincerely jules makes flip flopx chic</span></a>
                            <a href="#"><span>Quo in vero labitur ius ornatus deleniti iracundia id vix</span></a>
                            <a href="#"><span>Eu his fastidii comprehensam ius dicam mquam facete malorum</span></a>
                            <a href="#"><span>Has eu dicant tamquam interesset atqui affert soleat vis no</span></a>
                        </div>
                    </div>

                    <!-- END .ot-slider -->
                </div>

            </div>
        </div>

        <div class="ot-panel-block">
            <div class="banner">
                <a href="#" target="_blank"><img src="<?php echo $baseUrl; ?>/img/no-banner-728x90s.jpg" alt="" /></a>
            </div>
        </div>

        <!-- END .main-content -->
    </div>

    <!-- BEGIN #sidebar -->
    <aside id="sidebar-small" class="ot-scrollnimate small-sidebar" data-animation="fadeInUpSmall">

        <!-- BEGIN .widget -->
        <div class="widget">
            <div class="title-block">
                <h2>Latest News</h2>
            </div>
            <div class="ot-article-big">
                <div class="item">
                    <div class="item-content">
                        <h5><a href="#">Gulf spill claims chief responds to BP complaints</a></h5>
                        <p>Plaintiffs' lawyers Wednesday questioned whether BP was leveling "outrageous and unfounded...</p>
                    </div>
                </div>
                <div class="item">
                    <div class="item-content">
                        <h5><a href="#">Tech jobs: Minorities have degrees, but don’t get hired</a></h5>
                        <p>SAN FRANCISCO – Top universities turn out black and Hispanic computer science and computer...</p>
                    </div>
                </div>
                <div class="item">
                    <div class="item-content">
                        <h5><a href="#">Gulf spill claims chief responds to BP complaints</a></h5>
                        <p>Plaintiffs' lawyers Wednesday questioned whether BP was leveling "outrageous and unfounded...</p>
                    </div>
                </div>
                <div class="item">
                    <div class="item-content">
                        <h5><a href="#">Tech jobs: Minorities have degrees, but don’t get hired</a></h5>
                        <p>SAN FRANCISCO – Top universities turn out black and Hispanic computer science and computer...</p>
                    </div>
                </div>
                <div class="item">
                    <div class="item-content">
                        <h5><a href="#">Gulf spill claims chief responds to BP complaints</a></h5>
                        <p>Plaintiffs' lawyers Wednesday questioned whether BP was leveling "outrageous and unfounded...</p>
                    </div>
                </div>
                <div class="item">
                    <div class="item-content">
                        <h5><a href="#">Tech jobs: Minorities have degrees, but don’t get hired</a></h5>
                        <p>SAN FRANCISCO – Top universities turn out black and Hispanic computer science and computer...</p>
                    </div>
                </div>
            </div>
            <!-- END .widget -->
        </div>

        <!-- BEGIN .widget -->
        <div class="widget">
            <div class="title-block">
                <h2>Business</h2>
            </div>
            <div class="ot-article-big">
                <div class="item">
                    <div class="item-header">
                        <a href="post.html"><img src="<?php echo $baseUrl; ?>/img/photos/image-11.jpg" alt="" /></a>
                    </div>
                    <div class="item-content">
                        <h5><a href="post.html">Gulf spill claims chief responds to BP complaints</a></h5>
                        <p>Plaintiffs' lawyers Wednesday questioned whether BP was leveling "outrageous and unfounded...</p>
                    </div>
                </div>
                <div class="item">
                    <div class="item-header">
                        <a href="post.html"><img src="<?php echo $baseUrl; ?>/img/photos/image-12.jpg" alt="" /></a>
                    </div>
                    <div class="item-content">
                        <h5><a href="post.html">Gulf spill claims chief responds to BP complaints</a></h5>
                        <p>Plaintiffs' lawyers Wednesday questioned whether BP was leveling "outrageous and unfounded...</p>
                    </div>
                </div>
                <div class="item">
                    <div class="item-header">
                        <a href="post.html"><img src="<?php echo $baseUrl; ?>/img/photos/image-13.jpg" alt="" /></a>
                    </div>
                    <div class="item-content">
                        <h5><a href="post.html">Gulf spill claims chief responds to BP complaints</a></h5>
                        <p>Plaintiffs' lawyers Wednesday questioned whether BP was leveling "outrageous and unfounded...</p>
                    </div>
                </div>
            </div>
            <!-- END .widget -->
        </div>

        <!-- BEGIN .widget -->
        <div class="widget">
            <div class="ot-widget-banner">
                <a href="#" target="_blank"><img src="<?php echo $baseUrl; ?>/img/no-banner-160x600.jpg" alt="" /></a>
            </div>
            <!-- END .widget -->
        </div>

        <!-- END #sidebar -->
    </aside>

    <!-- BEGIN #sidebar -->
    <aside id="sidebar" class="ot-scrollnimate" data-animation="fadeInUpSmall">

        <!-- BEGIN .widget -->
        <div class="widget">
            <div class="ot-widget-banner">
                <a href="#" target="_blank"><img src="<?php echo $baseUrl; ?>/img/no-banner-300x250.jpg" alt="" /></a>
            </div>
            <!-- END .widget -->
        </div>

        <!-- BEGIN .widget -->
        <div class="widget">
            <div class="title-block">
                <h2>Timelime</h2>
            </div>
            <div class="ot-widget-timeline">

                <div class="item">
                    <div class="item-date">
                        <span class="item-date-day">26</span>
                        <div>
                            <span class="item-date-month">oct</span>
                            <span class="item-date-time">11:00</span>
                        </div>
                    </div>
                    <div class="item-avatar">
                        <a href="#"><img src="<?php echo $baseUrl; ?>/img/photos/image-104.jpg" alt="" /></a>
                    </div>
                    <div class="item-content">
                        <div>
                            <a href="#" class="item-category" style="color: #e0de44;">Gadgets</a>
                            <a href="#" class="item-comments"><i class="fa fa-comment"></i>12</a>
                        </div>
                        <strong><a href="#">Native and Programmatic Advertising Can Live Together</a></strong>
                    </div>
                </div>

                <div class="item">
                    <div class="item-date">
                        <span class="item-date-day">27</span>
                        <div>
                            <span class="item-date-month">oct</span>
                            <span class="item-date-time">12:04</span>
                        </div>
                    </div>
                    <div class="item-avatar">
                        <a href="#"><img src="<?php echo $baseUrl; ?>/img/photos/image-105.jpg" alt="" /></a>
                    </div>
                    <div class="item-content">
                        <div>
                            <a href="#" class="item-category" style="color: #6ca96e;">Automotive</a>
                        </div>
                        <strong><a href="#">Native and Programmatic Advertising Can Live Together</a></strong>
                    </div>
                </div>

                <div class="item">
                    <div class="item-date">
                        <span class="item-date-day">28</span>
                        <div>
                            <span class="item-date-month">oct</span>
                            <span class="item-date-time">12:39</span>
                        </div>
                    </div>
                    <div class="item-avatar">
                        <a href="#"><img src="<?php echo $baseUrl; ?>/img/photos/image-106.jpg" alt="" /></a>
                    </div>
                    <div class="item-content">
                        <div>
                            <a href="#" class="item-category" style="color: #44bde0;">Fashion</a>
                            <a href="#" class="item-comments"><i class="fa fa-comment"></i>12</a>
                        </div>
                        <strong><a href="#">Native and Programmatic Advertising Can Live Together</a></strong>
                    </div>
                </div>

                <div class="item">
                    <div class="item-date">
                        <span class="item-date-day">29</span>
                        <div>
                            <span class="item-date-month">oct</span>
                            <span class="item-date-time">18:05</span>
                        </div>
                    </div>
                    <div class="item-avatar">
                        <a href="#"><img src="<?php echo $baseUrl; ?>/img/photos/image-104.jpg" alt="" /></a>
                    </div>
                    <div class="item-content">
                        <div>
                            <a href="#" class="item-category" style="color: #bf6bda;">Architecture</a>
                        </div>
                        <strong><a href="#">Native and Programmatic Advertising Can Live Together</a></strong>
                    </div>
                </div>

                <div class="item">
                    <div class="item-date">
                        <span class="item-date-day">30</span>
                        <div>
                            <span class="item-date-month">oct</span>
                            <span class="item-date-time">12:39</span>
                        </div>
                    </div>
                    <div class="item-avatar">
                        <a href="#"><img src="<?php echo $baseUrl; ?>/img/photos/image-105.jpg" alt="" /></a>
                    </div>
                    <div class="item-content">
                        <div>
                            <a href="#" class="item-category" style="color: #44bde0;">Fashion</a>
                        </div>
                        <strong><a href="#">Native and Programmatic Advertising Can Live Together</a></strong>
                    </div>
                </div>

            </div>
            <!-- END .widget -->
        </div>

        <!-- BEGIN .widget -->
        <div class="widget" style="background-color: #232327;">
            <div class="title-block">
                <h2 style="background-color: #7f1e7d;">Chillout mix</h2>
            </div>
            <div class="ot-widget-music">
                <a href="#" class="item"><i class="fa fa-play-circle"></i><span>Summer Memories (La Belle Mixtape) - Henri Pfr</span></a>
                <a href="#" class="item"><i class="fa fa-play-circle"></i><span>1 Hour Unbelievable Chillstep Mega Mix - DJ Await</span></a>
                <a href="#" class="item"><i class="fa fa-play-circle"></i><span>Summer Memories (La Belle Mixtape) - Henri Pfr</span></a>
                <a href="#" class="item"><i class="fa fa-play-circle"></i><span>1 Hour Unbelievable Chillstep Mega Mix - DJ Await</span></a>
                <a href="#" class="item"><i class="fa fa-play-circle"></i><span>Summer Memories (La Belle Mixtape) - Henri Pfr</span></a>
            </div>
            <!-- END .widget -->
        </div>

        <!-- BEGIN .widget -->
        <div class="widget" style="background-color: #3c3b41;">
            <div class="title-block">
                <h2 style="background-color: #f05c5c;">Reviews</h2>
            </div>
            <div class="article-block">
                <div class="item">
                    <div class="item-header">
                        <a href="post.html" class="image-hover"><img src="<?php echo $baseUrl; ?>/img/photos/image-2.jpg" alt="" /></a>
                    </div>
                    <div class="item-content">
											<span class="article-meta">
												<a href="blog.html" class="meta-date"><i class="fa fa-clock-o"></i>21 nov 21:34</a>
												<a href="post.html#comments" class="meta-comments"><i class="fa fa-comment"></i>34</a>
											</span>
                        <h4><a href="post.html">Quadrum - multipurpose news &amp; magazine theme</a></h4>
                        <span class="item-stars" style="color: #f05c5c;"><span class="stars-inner" style="width: 90%;"></span></span>
                    </div>
                </div>
                <div class="item">
                    <div class="item-header">
                        <a href="post.html" class="image-hover"><img src="<?php echo $baseUrl; ?>/img/photos/image-3.jpg" alt="" /></a>
                    </div>
                    <div class="item-content">
											<span class="article-meta">
												<a href="blog.html" class="meta-date"><i class="fa fa-clock-o"></i>21 nov 21:34</a>
												<a href="post.html#comments" class="meta-comments"><i class="fa fa-comment"></i>34</a>
											</span>
                        <h4><a href="post.html">Quadrum - multipurpose news &amp; magazine theme</a></h4>
                        <span class="item-stars" style="color: #f05c5c;"><span class="stars-inner" style="width: 90%;"></span></span>
                    </div>
                </div>
                <div class="item">
                    <div class="item-header">
                        <a href="post.html" class="image-hover"><img src="<?php echo $baseUrl; ?>/img/photos/image-4.jpg" alt="" /></a>
                    </div>
                    <div class="item-content">
											<span class="article-meta">
												<a href="blog.html" class="meta-date"><i class="fa fa-clock-o"></i>21 nov 21:34</a>
												<a href="post.html#comments" class="meta-comments"><i class="fa fa-comment"></i>34</a>
											</span>
                        <h4><a href="post.html">Quadrum - multipurpose news &amp; magazine theme</a></h4>
                        <span class="item-stars" style="color: #f05c5c;"><span class="stars-inner" style="width: 90%;"></span></span>
                    </div>
                </div>
                <div class="item">
                    <div class="item-header">
                        <a href="post.html" class="image-hover"><img src="<?php echo $baseUrl; ?>/img/photos/image-5.jpg" alt="" /></a>
                    </div>
                    <div class="item-content">
											<span class="article-meta">
												<a href="blog.html" class="meta-date"><i class="fa fa-clock-o"></i>21 nov 21:34</a>
												<a href="post.html#comments" class="meta-comments"><i class="fa fa-comment"></i>34</a>
											</span>
                        <h4><a href="post.html">Quadrum - multipurpose news &amp; magazine theme</a></h4>
                        <span class="item-stars" style="color: #f05c5c;"><span class="stars-inner" style="width: 90%;"></span></span>
                    </div>
                </div>
                <a href="blog.html" class="item-button">Load more ...</a>
            </div>
            <!-- END .widget -->
        </div>

        <!-- BEGIN .widget -->
        <div class="widget">
            <div class="title-block">
                <h2 style="background-color: #0076a3;">Latest comments</h2>
            </div>
            <div class="comments-w-block">

                <div class="item">
                    <div class="item-header">
                        <a href="post.html" class="image-hover"><img src="<?php echo $baseUrl; ?>/img/photos/image-104.jpg" alt="" /></a>
                        <a href="#"><span>John Doe</span></a>
                    </div>
                    <div class="item-content">
                        <span class="date-meta right">12. NOV 12:34</span>
                        <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Maecenas molestie aliquam...</p>
                        <h4><a href="post.html">Sed vehicula justo ut sem auct...</a></h4>
                    </div>
                </div>

                <div class="item">
                    <div class="item-header">
                        <a href="post.html" class="image-hover"><img src="<?php echo $baseUrl; ?>/img/photos/image-105.jpg" alt="" /></a>
                        <a href="#"><span>John Doe</span></a>
                    </div>
                    <div class="item-content">
                        <span class="date-meta right">12. NOV 12:34</span>
                        <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Maecenas molestie aliquam...</p>
                        <h4><a href="post.html">Sed vehicula justo ut sem auct...</a></h4>
                    </div>
                </div>

            </div>
            <!-- END .widget -->
        </div>

        <div class="widget">
            <div class="title-block title-block-absolute">
                <h2>Gallery Widget</h2>
            </div>
            <div class="ot-widget-gallery">
                <div class="item">
                    <div class="item-header">
                        <a href="photo-gallery-single.html"><img src="<?php echo $baseUrl; ?>/img/photos/image-14.jpg" alt="" /></a>
                    </div>
                    <div class="item-footer">
                        <a href="#galery-left"><i class="fa fa-caret-left"></i></a>
                        <a href="#galery-right"><i class="fa fa-caret-right"></i></a>
                        <div class="item-thumbnails">
                            <div class="item-thumbnails-inner">
                                <a href="images/photos/image-14.jpg" data-href="photo-gallery-single.html" class="image-hover"><img src="<?php echo $baseUrl; ?>/img/photos/image-15.jpg" alt="" /></a>
                                <a href="images/photos/image-34.jpg" data-href="photo-gallery-single.html" class="image-hover"><img src="<?php echo $baseUrl; ?>/img/photos/image-16.jpg" alt="" /></a>
                                <a href="images/photos/image-35.jpg" data-href="photo-gallery-single.html" class="image-hover"><img src="<?php echo $baseUrl; ?>/img/photos/image-17.jpg" alt="" /></a>

                                <a href="images/photos/image-34.jpg" data-href="photo-gallery-single.html" class="image-hover"><img src="<?php echo $baseUrl; ?>/img/photos/image-16.jpg" alt="" /></a>
                                <a href="images/photos/image-35.jpg" data-href="photo-gallery-single.html" class="image-hover"><img src="<?php echo $baseUrl; ?>/img/photos/image-17.jpg" alt="" /></a>
                                <a href="images/photos/image-14.jpg" data-href="photo-gallery-single.html" class="image-hover"><img src="<?php echo $baseUrl; ?>/img/photos/image-15.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- BEGIN .widget -->
        <div class="widget">
            <div class="title-block">
                <h2 style="background-color: #744597;">Video</h2>
            </div>
            <div class="article-block">

                <div class="item">
                    <div class="item-header">
                        <a href="post.html" class="image-hover"><img src="<?php echo $baseUrl; ?>/img/photos/image-2.jpg" alt="" /></a>
                    </div>
                    <div class="item-content">
                        <a href="#" style="background: #9e2929;" class="item-content-category">Gadgets</a>
                        <h4><a href="post.html">NASCAR on fire !</a></h4>
											<span class="article-meta">
												<a href="post.html#comments" class="meta-comments"><i class="fa fa-comment"></i>12</a>
												<span class="meta-views"><i class="fa fa-eye"></i>314</span>
												<span class="meta-likes"><i class="fa fa-heart"></i>56</span>
											</span>
                    </div>
                </div>

                <div class="item">
                    <div class="item-header">
                        <a href="post.html" class="image-hover"><img src="<?php echo $baseUrl; ?>/img/photos/image-3.jpg" alt="" /></a>
                    </div>
                    <div class="item-content">
                        <a href="#" style="background: #9e2929;" class="item-content-category">Gadgets</a>
                        <h4><a href="post.html">NASCAR on fire !</a></h4>
											<span class="article-meta">
												<a href="post.html#comments" class="meta-comments"><i class="fa fa-comment"></i>12</a>
												<span class="meta-views"><i class="fa fa-eye"></i>314</span>
												<span class="meta-likes"><i class="fa fa-heart"></i>56</span>
											</span>
                    </div>
                </div>

                <div class="item">
                    <div class="item-header">
                        <a href="post.html" class="image-hover"><img src="<?php echo $baseUrl; ?>/img/photos/image-4.jpg" alt="" /></a>
                    </div>
                    <div class="item-content">
                        <a href="#" style="background: #9e2929;" class="item-content-category">Gadgets</a>
                        <h4><a href="post.html">NASCAR on fire !</a></h4>
											<span class="article-meta">
												<a href="post.html#comments" class="meta-comments"><i class="fa fa-comment"></i>12</a>
												<span class="meta-views"><i class="fa fa-eye"></i>314</span>
												<span class="meta-likes"><i class="fa fa-heart"></i>56</span>
											</span>
                    </div>
                </div>

            </div>
            <!-- END .widget -->
        </div>

        <!-- <div class="widget">
            <div class="title-block">
                <h2>Editors Choice</h2>
            </div>
            <div class="article-block">
                <div class="item">
                    <div class="item-header">
                        <a href="post.html" class="image-hover"><img src="<?php echo $baseUrl; ?>/img/photos/image-2.jpg" alt="" /></a>
                    </div>
                    <div class="item-content">
                        <h4><a href="post.html">3 Steps to the Perfect Modern Smoky Eye</a></h4>
                        <span class="article-meta">
                            <a href="blog.html" class="meta-date"><i class="fa fa-clock-o"></i>21 nov 21:34</a>
                            <a href="post.html#comments" class="meta-comments"><i class="fa fa-comment"></i>34</a>
                        </span>
                    </div>
                </div>
                <div class="item">
                    <div class="item-header">
                        <a href="post.html" class="image-hover"><img src="<?php echo $baseUrl; ?>/img/photos/image-3.jpg" alt="" /></a>
                    </div>
                    <div class="item-content">
                        <h4><a href="post.html">How to Meditate in 5 Minutes or Less</a></h4>
                        <span class="article-meta">
                            <a href="blog.html" class="meta-date"><i class="fa fa-clock-o"></i>21 nov 21:34</a>
                            <a href="post.html#comments" class="meta-comments"><i class="fa fa-comment"></i>34</a>
                        </span>
                    </div>
                </div>
                <div class="item">
                    <div class="item-header">
                        <a href="post.html" class="image-hover"><img src="<?php echo $baseUrl; ?>/img/photos/image-4.jpg" alt="" /></a>
                    </div>
                    <div class="item-content">
                        <h4><a href="post.html">Are Flyaways and Frizz a New Hair Trend?</a></h4>
                        <span class="article-meta">
                            <a href="blog.html" class="meta-date"><i class="fa fa-clock-o"></i>21 nov 21:34</a>
                            <a href="post.html#comments" class="meta-comments"><i class="fa fa-comment"></i>34</a>
                        </span>
                    </div>
                </div>
                <div class="item">
                    <div class="item-header">
                        <a href="post.html" class="image-hover"><img src="<?php echo $baseUrl; ?>/img/photos/image-5.jpg" alt="" /></a>
                    </div>
                    <div class="item-content">
                        <h4><a href="post.html">3 Steps to Getting Perfect Eyebrows</a></h4>
                        <span class="article-meta">
                            <a href="blog.html" class="meta-date"><i class="fa fa-clock-o"></i>21 nov 21:34</a>
                            <a href="post.html#comments" class="meta-comments"><i class="fa fa-comment"></i>34</a>
                        </span>
                    </div>
                </div>
                <a href="blog.html" class="item-button">Load more ...</a>
            </div>
        </div>

        <div class="widget">
            <div class="title-block">
                <h2>Tag Cloud</h2>
            </div>
            <div class="tagcloud">
                <a href="blog.html">Comprehensam</a><a href="blog.html">Consequuntur</a><a href="blog.html">Denique</a><a href="blog.html">Elaboraret scribentur</a><a href="blog.html">Et elaboraret</a><a href="blog.html">Fierent inimicus</a><a href="blog.html">Incorrupte</a><a href="blog.html">Mediocritatem</a><a href="blog.html">Nostrud accusam</a><a href="blog.html">Tation luptatum</a><a href="blog.html">Voluptatum et</a>
            </div>
        </div>

        <div class="widget">
            <div class="title-block">
                <h2>Instagram</h2>
            </div>
            <div class="ot-instagram-widget">
                <a href="#" class="image-hover"><img src="http://photos-h.ak.instagram.com/hphotos-ak-xfa1/10535010_683097738427391_625675609_n.jpg" alt="" /></a>
                <a href="#" class="image-hover"><img src="http://photos-g.ak.instagram.com/hphotos-ak-xaf1/10624006_752440578131198_1670454288_n.jpg" alt="" /></a>
                <a href="#" class="image-hover"><img src="http://photos-b.ak.instagram.com/hphotos-ak-xaf1/10554270_1534188016802489_332958319_n.jpg" alt="" /></a>
                <a href="#" class="image-hover"><img src="http://photos-a.ak.instagram.com/hphotos-ak-xpa1/927731_1451405488476912_513078210_n.jpg" alt="" /></a>
            </div>
        </div>

        <div class="widget">
            <div class="title-block">
                <h2>ABOUT SOLIDUS</h2>
            </div>
            <div class="ot-about-widget">
                <p>Deserunt posuere pellentesque porta ridiculus fugiat. Tempus ad per consectetur maecenas penatibus. Aliquip amet phasellus nam sociosqu.</p>
                <p>Deserunt posuere pellentesque porta ridiculus fugiat. Tempus ad per consectetur maecenas penatibus. Aliquip amet phasellus nam sociosqu.</p>
            </div>
        </div>

        <div class="widget">
            <div class="title-block">
                <h2>Subscribe Newsletter</h2>
            </div>
            <div class="ot-subscribe-widget">
                <p>Deserunt posuere pellentesque porta ridiculus fugiat. Tempus ad per consectetur maecenas penatibus.</p>
                <div class="ot-subscribe-widget-inner">
                    <div class="alert-box">
                        <a href="#" class="close-alert right"><i class="fa fa-times"></i></a>
                        <i class="fa fa-warning"></i>
                        <p>Damn! We encountered an error!</p>
                    </div>
                    <div class="alert-box" style="background-color: #81B030;">
                        <a href="#" class="close-alert right"><i class="fa fa-times"></i></a>
                        <i class="fa fa-thumbs-up"></i>
                        <p>Success! We did it!</p>
                    </div>
                    <div class="alert-box loading-box">
                        <img src="<?php echo $baseUrl; ?>/img/loading.gif" class="loading-gif" alt="" />
                        <p>Loading.. Please wait!</p>
                    </div>
                    <form action="#">
                        <p>
                            <label for="aweber-name">Name:</label>
                            <input type="text" id="aweber-name" placeholder="Name.." value="" />
                        </p>
                        <p>
                            <label for="aweber-email">E-mail:</label>
                            <input type="text" id="aweber-email" placeholder="E-mail.." value="" />
                        </p>
                        <p>
                            <input type="submit" value="Subscribe" />
                        </p>
                    </form>
                </div>
            </div>
        </div>

        <div class="sidebar-fixed">

            <div class="widget">
                <div class="title-block">
                    <h2>Stay Connected</h2>
                </div>
                <div class="ot-social-widget">
                    <a href="#" class="soc-flipper">
                        <span class="card">
                            <span class="front"><i class="fa fa-facebook"></i></span>
                            <span class="back"><strong>2k</strong><i>Shares</i></span>
                        </span>
                    </a>
                    <a href="#" class="soc-flipper flip-google">
                        <span class="card">
                            <span class="front"><i class="fa fa-google-plus"></i></span>
                            <span class="back"><strong>203</strong><i>Shares</i></span>
                        </span>
                    </a>
                    <a href="#" class="soc-flipper flip-twitter">
                        <span class="card">
                            <span class="front"><i class="fa fa-twitter"></i></span>
                            <span class="back"><strong>1.5k</strong><i>Tweets</i></span>
                        </span>
                    </a>
                    <a href="#" class="soc-flipper flip-youtube">
                        <span class="card">
                            <span class="front"><i class="fa fa-youtube"></i></span>
                            <span class="back"><strong>620</strong><i>Shares</i></span>
                        </span>
                    </a>
                    <a href="#" class="soc-flipper flip-instagram">
                        <span class="card">
                            <span class="front"><i class="fa fa-instagram"></i></span>
                            <span class="back"><strong>200</strong><i>Followers</i></span>
                        </span>
                    </a>
                </div>
            </div>

            <div class="widget">
                <div class="title-block">
                    <h2>Advertisement</h2>
                </div>
                <div class="ot-widget-banner">
                    <a href="#" target="_blank"><img src="<?php echo $baseUrl; ?>/img/no-banner-300x250.jpg" alt="" /></a>
                </div>
            </div>

        </div> -->

        <!-- END #sidebar -->
    </aside>

    <!-- END .split-block -->
</div>

<!-- BEGIN .full-block -->
<div class="full-block ot-scrollnimate" data-animation="fadeInUpSmall">

    <!-- BEGIN .ot-panel-block -->
    <div class="ot-panel-block">
        <div class="article-grid lets-do-3">

            <div class="item">
                <div class="item-header">
                    <a href="#">
                        <span class="item-header-category"><i class="fa fa-folder-open"></i><span>Automotive</span></span>
                        <img src="<?php echo $baseUrl; ?>/img/photos/image-29.jpg" alt="" />
                    </a>
                </div>
                <div class="item-content">
                    <div class="item-content-head">
                        <div class="item-content-date">
                            <strong>16</strong>
                            <span>Oct</span>
                            <span>2015</span>
                        </div>
                        <h3><a href="#">Duis mollis magna porta ipsum eget feugiat</a></h3>
                    </div>
                    <p>Vivamus auctor quam nec mauris commodo laoreet. Nam ut metus elementum, pharetra diam sed, rhoncus tortor. Sed vehicula justo ut sem auctor sagittis. Etiam quis</p>
                </div>
                <div class="item-footer">
                    <button class="article-more-arrow right"><i class="fa fa-caret-right"></i><i class="show-hover">Read more</i></button>
                    <div class="item-meta">
                        <a href="#"><i class="fa fa-pencil"></i>John Doe</a>
                        <a href="#"><i class="fa fa-comment"></i>16</a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-header">
                    <a href="#">
                        <span class="item-header-category"><i class="fa fa-folder-open"></i><span>Automotive</span></span>
                        <img src="<?php echo $baseUrl; ?>/img/photos/image-30.jpg" alt="" />
                    </a>
                </div>
                <div class="item-content">
                    <div class="item-content-head">
                        <div class="item-content-date">
                            <strong>21</strong>
                            <span>Oct</span>
                            <span>2015</span>
                        </div>
                        <h3><a href="#">Sed vehicula justo ut sem auctor sagittis</a></h3>
                    </div>
                    <p>Vivamus auctor quam nec mauris commodo laoreet. Nam ut metus elementum, pharetra diam sed, rhoncus tortor. Sed vehicula justo ut sem auctor sagittis. Etiam quis</p>
                </div>
                <div class="item-footer">
                    <button class="article-more-arrow right"><i class="fa fa-caret-right"></i><i class="show-hover">Read more</i></button>
                    <div class="item-meta">
                        <a href="#"><i class="fa fa-pencil"></i>John Doe</a>
                        <a href="#"><i class="fa fa-comment"></i>16</a>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-header">
                    <a href="#">
                        <span class="item-header-category"><i class="fa fa-folder-open"></i><span>Automotive</span></span>
                        <img src="<?php echo $baseUrl; ?>/img/photos/image-31.jpg" alt="" />
                    </a>
                </div>
                <div class="item-content">
                    <div class="item-content-head">
                        <div class="item-content-date">
                            <strong>16</strong>
                            <span>Oct</span>
                            <span>2015</span>
                        </div>
                        <h3><a href="#">Duis mollis magna porta ipsum eget feugiat</a></h3>
                    </div>
                    <p>Vivamus auctor quam nec mauris commodo laoreet. Nam ut metus elementum, pharetra diam sed, rhoncus tortor. Sed vehicula justo ut sem auctor sagittis. Etiam quis</p>
                </div>
                <div class="item-footer">
                    <button class="article-more-arrow right"><i class="fa fa-caret-right"></i><i class="show-hover">Read more</i></button>
                    <div class="item-meta">
                        <a href="#"><i class="fa fa-pencil"></i>John Doe</a>
                        <a href="#"><i class="fa fa-comment"></i>16</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- END .ot-panel-block -->
    </div>

    <!-- END .full-block -->
</div>