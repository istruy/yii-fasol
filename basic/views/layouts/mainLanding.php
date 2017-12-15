<?php
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
$this->beginPage()
?>

<!DOCTYPE html>
<html dir="ltr" lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>

    <!-- Document Title
    ============================================= -->
    <title>Solt room SPb</title>

</head>

<body class="stretched">
<?php $this->beginBody() ?>

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="transparent-header dark" data-sticky-class="not-dark">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="index.html" class="standard-logo" data-dark-logo="public/images/logo-dark.png"><img
                            src="public/images/logo.png" alt="Canvas Logo"></a>
                    <a href="index.html" class="retina-logo" data-dark-logo="public/images/logo-dark@2x.png"><img
                            src="public/images/logo@2x.png" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
============================================= -->
                <nav id="primary-menu" class="not-dark">

                    <ul>
                        <li><a href="#">
                                <div>Отзывы</div>
                            </a></li>
                        <li><a href="#">
                                <div>Контакты</div>
                            </a></li>
                        <li><a href="#">
                                <div>Цены</div>
                            </a></li>
                        <li class="bgcolor"><a href="#">
                                <div>Register</div>
                            </a></li>
                    </ul>

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->

    <?= $this->render('sidebar'); ?>

    <section id="content">

        <div class="content-wrap notoppadding clearfix">

            <div class="section nomargin clearfix" style="background-color: #eef2f5;">
                <div class="container clearfix">
                    <?= $this->render('mainPage'); ?>
                </div>
            </div>
        </div>

</div>

</section><!-- #content end -->
<!-- Footer
============================================= -->
<footer id="footer" class="dark">

    <div class="container clearfix">

        <!-- Footer Widgets
============================================= -->
        <div class="footer-widgets-wrap clearfix">

            <div class="col_one_fourth">
                <div class="widget clearfix">

                    <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp;
                        <strong>Flexible</strong>
                        Design Standards.</p>

                    <div style="background: url('public/images/world-map.png') no-repeat center center; background-size: 100%;">
                        <address>
                            <strong>Headquarters:</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                        </address>
                        <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                        <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                        <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                    </div>

                </div>
            </div>

            <div class="col_one_fourth">
                <div class="widget widget_links clearfix">

                    <h4>Blogroll</h4>

                    <ul>
                        <li><a href="http://codex.wordpress.org/">Documentation</a></li>
                        <li>
                            <a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a>
                        </li>
                        <li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
                        <li><a href="http://wordpress.org/support/">Support Forums</a></li>
                        <li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
                        <li><a href="http://wordpress.org/news/">WordPress Blog</a></li>
                        <li><a href="http://planet.wordpress.org/">WordPress Planet</a></li>
                    </ul>

                </div>
            </div>

            <div class="col_one_fourth">
                <div class="widget widget_links clearfix">

                    <h4>Blogroll</h4>

                    <ul>
                        <li><a href="http://codex.wordpress.org/">Documentation</a></li>
                        <li>
                            <a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a>
                        </li>
                        <li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
                        <li><a href="http://wordpress.org/support/">Support Forums</a></li>
                        <li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
                        <li><a href="http://wordpress.org/news/">WordPress Blog</a></li>
                        <li><a href="http://planet.wordpress.org/">WordPress Planet</a></li>
                    </ul>

                </div>
            </div>

            <div class="col_one_fourth col_last">
                <div class="widget center clearfix" style="border: 2px dashed #AAA; padding: 30px">
                    <h3 class="">Exclusive Sale<br>
                        Get <span style="font-size: 40px;">20%</span> Off*</h3>
                    <span>Coupon code: lovecanvas</span>
                    <em style="color: #999;">
                        <small>(First time Register only)</small>
                    </em>
                </div>
            </div>

        </div><!-- .footer-widgets-wrap end -->

    </div>

    <div class="line nomargin"></div>

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col_half">
                Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.
            </div>

            <div class="col_half col_last tright">
                <div class="fright clearfix">
                    <a href="#" class="social-icon si-small si-borderless si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless si-twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless si-gplus">
                        <i class="icon-gplus"></i>
                        <i class="icon-gplus"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless si-pinterest">
                        <i class="icon-pinterest"></i>
                        <i class="icon-pinterest"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless si-vimeo">
                        <i class="icon-vimeo"></i>
                        <i class="icon-vimeo"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless si-github">
                        <i class="icon-github"></i>
                        <i class="icon-github"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless si-yahoo">
                        <i class="icon-yahoo"></i>
                        <i class="icon-yahoo"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless si-linkedin">
                        <i class="icon-linkedin"></i>
                        <i class="icon-linkedin"></i>
                    </a>
                </div>
            </div>

        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>
<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="js/functions.js"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
