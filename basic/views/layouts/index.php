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

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Quicksand:300,400,500,700|Chewy" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />

    <!-- Pet Demo Specific Stylesheet -->
    <link rel="stylesheet" href="css/pet.css" type="text/css" />
    <link rel="stylesheet" href="css/fonts.css" type="text/css" />

    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/colors.php?color=1ABC9C" type="text/css" />

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
						<a href="index.html" class="standard-logo" data-dark-logo="public/images/logo-dark.png"><img src="public/images/logo.png" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="public/images/logo-dark@2x.png"><img src="public/images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
============================================= -->
					<nav id="primary-menu" class="not-dark">

						<ul>
							<li><a href="#"><div>Отзывы</div></a></li>
							<li><a href="#"><div>Контакты</div></a></li>
							<li><a href="#"><div>Цены</div></a></li>
							<li class="bgcolor"><a href="#"><div>Register</div></a></li>
						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<section id="slider" class="full-screen clearfix" style="background: url('public/images/hero-image.jpg') center right no-repeat; background-size: cover;">
			<div class="vertical-middle">
				<div class="container clearfix">

					<div class="emphasis-title dark">
						<h2 style="font-size: 40px; line-height: 1.4; font-weight: 600; text-shadow: 1px 1px 1px rgba(0,0,0,0.5);">Самая большая соляная пещера в Санкт-Петербурге<br>But they make our Lives whole.</h2><br>
						<p class="t300" style="font-size: 16px; opacity: .7;">Nisl blandit adipisci gravida blandit soluta, explicabo orci, distinctio <br>duis unde provident suspendisse orci? Recusandae! Proident,<br>quos do mi cupidatat.</p>
						<a href="#" class="button button-large button-rounded noleftmargin">Join Us Now</a><span class="leftmargin-sm">+</span>
						<a href="#" class="button nobg noshadow"><i class="icon-gift" style="width: 40px; font-size: 40px; top: 10px;"></i></a>
						<br><em><small style="opacity: 0.4;">Every month a surprise gift*</small></em>

					</div>

				</div>
			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap notoppadding clearfix">

				<div class="section nomargin clearfix" style="background-color: #eef2f5;">
					<div class="container clearfix">

						<div class="heading-block center nobottomborder bottommargin topmargin-sm divcenter" style="max-width: 640px">
							<h3 class="nott font-secondary t400" style="font-size: 36px;">What we Do</h3>
							<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel ab, nesciunt quod!</span>
						</div>

						<div class="row clearfix">
							<!-- Features colomns
============================================= -->
							<div class="row clearfix">
								<div class="col-md-3 col-sm-6 bottommargin-sm">
									<div class="feature-box media-box fbox-bg">
										<div class="fbox-media">
											<a href="#"><img class="image_fade" src="public/images/services/1.jpg" alt="Featured Box Image"></a>
										</div>
										<div class="fbox-desc noborder">
											<h3 class="nott ls0 t600">Adopt a Dog<span class="subtitle t300 ls0">Globally parallel task premium infomediaries</span></h3>
											<a href="#" class="button-link noborder color">Read More</a>
										</div>
									</div>
								</div>

								<div class="col-md-3 col-sm-6 bottommargin-sm">
									<div class="feature-box media-box fbox-bg">
										<div class="fbox-media">
											<a href="#"><img class="image_fade" src="public/images/services/2.jpg" alt="Featured Box Image"></a>
										</div>
										<div class="fbox-desc noborder">
											<h3 class="nott ls0 t600">Pet Nutritionists<span class="subtitle t300 ls0">Energistically visualize market-driven.</span></h3>
											<a href="#" class="button-link noborder color">Read More</a>
										</div>
									</div>
								</div>

								<div class="col-md-3 col-sm-6 bottommargin-sm">
									<div class="feature-box media-box fbox-bg">
										<div class="fbox-media">
											<a href="#"><img class="image_fade" src="public/images/services/3.jpg" alt="Featured Box Image"></a>
										</div>
										<div class="fbox-desc noborder">
											<h3 class="nott ls0 t600">Find a pet Sitter<span class="subtitle t300 ls0">Enthusiastically iterate enabled portals after.</span></h3>
											<a href="#" class="button-link noborder color">Read More</a>
										</div>
									</div>
								</div>

								<div class="col-md-3 col-sm-6 bottommargin-sm">
									<div class="feature-box media-box fbox-bg">
										<div class="fbox-media">
											<a href="#"><img class="image_fade" src="public/images/services/4.jpg" alt="Featured Box Image"></a>
										</div>
										<div class="fbox-desc noborder">
											<h3 class="nott ls0 t600">Health &amp; Well-being<span class="subtitle t300 ls0">Enthusiastically iterate enabled portals after.</span></h3>
											<a href="#" class="button-link noborder color">Read More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container topmargin clearfix">
					<div class="row clearfix">
						<div class="col-md-6">
							<div class="heading-block nobottomborder topmargin-sm nobottommargin">
								<h2 class="font-secondary ls1 nott t400">Join to Happy Customers</h2>
								<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates deserunt facere placeat est animi, sunt?</span>
								<a href="#" class="button button-large button-rounded topmargin-sm noleftmargin">Join Us Now</a>
								<div class="line line-sm"></div>
							</div>
							<div class="row clearfix">
								<div class="col-sm-4">
									<div>
										<div class="counter counter-small color"><span data-from="10" data-to="1136" data-refresh-interval="50" data-speed="1000"></span>+</div>
										<h5 class="color t600 nott notopmargin" style="font-size: 16px;">Happy Customers</h5>
									</div>
								</div>

								<div class="col-sm-4">
									<div>
										<div class="counter counter-small" style="color: #22c1c3;"><span data-from="10" data-to="145" data-refresh-interval="50" data-speed="700"></span>+</div>
										<h5 class="t600 nott notopmargin" style="color: #22c1c3; font-size: 16px;">Pets Hosted</h5>
									</div>
								</div>

								<div class="col-sm-4">
									<div>
										<div class="counter counter-small" style="color: #BD3F32;"><span data-from="10" data-to="50" data-refresh-interval="85" data-speed="1200"></span>+</div>
										<h5 class="t600 nott notopmargin" style="color: #BD3F32; font-size: 16px;">Professionals</h5>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget" data-nav="false" data-animate-in="slideInUp" data-animate-out="slideOutUp" data-autoplay="5000" data-loop="true" data-stage-padding="5" data-margin="10" data-items-xs="1" data-items-sm="1" data-items-lg="1">

								<div class="oc-item">
									<div class="testimonial topmargin-sm">
										<div class="testi-image">
											<a href="#"><img src="public/images/testimonials/1.jpg" alt="Customer Testimonails"></a>
										</div>
										<div class="testi-content">
											<p>Ligula scelerisque, tempus dicta eros dolorum itaque fugit, tempore pellentesque, leo dolor, aenean, inceptos aptent nostra adipisci harum etiam explicabo.</p>
											<div class="testi-meta">
John Doe &middot;
												<span>XYZ Inc.</span>
											</div>
										</div>
									</div>

									<div class="testimonial topmargin-sm">
										<div class="testi-image">
											<a href="#"><img src="public/images/testimonials/2.jpg" alt="Customer Testimonails"></a>
										</div>
										<div class="testi-content">
											<p>Sint quae anim enim quaerat! Assumenda esse metus torquent, senectus similique tempor? Massa lacus a, dignissim sequi officiis, elementum non.</p>
											<div class="testi-meta">
John Doe  &middot;
												<span>XYZ Inc.</span>
											</div>
										</div>
									</div>
								</div>

								<div class="oc-item">
									<div class="testimonial topmargin-sm">
										<div class="testi-image">
											<a href="#"><img src="public/images/testimonials/3.jpg" alt="Customer Testimonails"></a>
										</div>
										<div class="testi-content">
											<p>Placeat ultrices perferendis omnis consequat molestie quos pretium! Donec deserunt ratione ultrices laborum vehicula rutrum deserunt! Torquent officiis? Et occaecati.</p>
											<div class="testi-meta">
John Doe &middot;
												<span>XYZ Inc.</span>
											</div>
										</div>
									</div>
									<div class="testimonial topmargin-sm">
										<div class="testi-image">
											<a href="#"><img src="public/images/testimonials/4.jpg" alt="Customer Testimonails"></a>
										</div>
										<div class="testi-content">
											<p>Occaecat autem turpis mollis ac nam cubilia, culpa adipiscing per cubilia porta fugit numquam dignissim sequi. Aspernatur aliquip. Ornare molestias.</p>
											<div class="testi-meta">
John Doe &middot;
												<span>XYZ Inc.</span>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>

				<div class="section nobottommargin clearfix">
					<div class="heading-block center nobottomborder nobottommargin divcenter" style="max-width: 640px">
						<h3 class="nott font-secondary t400" style="font-size: 36px;">Gallery</h3>
						<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel.</span>
					</div>
				</div>

				<div class="masonry-thumbs col-6" data-big="3" data-lightbox="gallery">
					<a href="public/images/gallery/1.jpg" data-lightbox="gallery-item"><img src="public/images/gallery/thumbs/1.jpg" alt="Gallery Thumb 1"></a>
					<a href="public/images/gallery/2.jpg" data-lightbox="gallery-item"><img src="public/images/gallery/thumbs/2.jpg" alt="Gallery Thumb 2"></a>
					<a href="public/images/gallery/3.jpg" data-lightbox="gallery-item"><img src="public/images/gallery/thumbs/3.jpg" alt="Gallery Thumb 3"></a>
					<a href="public/images/gallery/4.jpg" data-lightbox="gallery-item"><img src="public/images/gallery/thumbs/4.jpg" alt="Gallery Thumb 4"></a>
					<a href="public/images/gallery/5.jpg" data-lightbox="gallery-item"><img src="public/images/gallery/thumbs/5.jpg" alt="Gallery Thumb 5"></a>
					<a href="public/images/gallery/6.jpg" data-lightbox="gallery-item"><img src="public/images/gallery/thumbs/6.jpg" alt="Gallery Thumb 6"></a>
					<a href="public/images/gallery/7.jpg" data-lightbox="gallery-item"><img src="public/images/gallery/thumbs/7.jpg" alt="Gallery Thumb 7"></a>
					<a href="public/images/gallery/8.jpg" data-lightbox="gallery-item"><img src="public/images/gallery/thumbs/8.jpg" alt="Gallery Thumb 8"></a>
					<a href="public/images/gallery/9.jpg" data-lightbox="gallery-item"><img src="public/images/gallery/thumbs/9.jpg" alt="Gallery Thumb 9"></a>
					<a href="public/images/gallery/10.jpg" data-lightbox="gallery-item"><img src="public/images/gallery/thumbs/10.jpg" alt="Gallery Thumb 10"></a>
					<a href="public/images/gallery/11.jpg" data-lightbox="gallery-item"><img src="public/images/gallery/thumbs/11.jpg" alt="Gallery Thumb 11"></a>
					<a href="public/images/gallery/12.jpg" data-lightbox="gallery-item"><img src="public/images/gallery/thumbs/12.jpg" alt="Gallery Thumb 12"></a>
					<a href="public/images/gallery/13.jpg" data-lightbox="gallery-item"><img src="public/images/gallery/thumbs/13.jpg" alt="Gallery Thumb 13"></a>
					<a href="public/images/gallery/14.jpg" data-lightbox="gallery-item"><img src="public/images/gallery/thumbs/14.jpg" alt="Gallery Thumb 14"></a>
					<a href="public/images/gallery/15.jpg" data-lightbox="gallery-item"><img src="public/images/gallery/thumbs/15.jpg" alt="Gallery Thumb 15"></a>
				</div>

				<div class="section nomargin nobg clearfix">
					<div class="container clearfix">
						<div class="heading-block center nobottomborder divcenter" style="max-width: 640px">
							<h3 class="nott font-secondary t400" style="font-size: 36px;">Our Products</h3>
							<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel.</span>
						</div>
						<div class="row topmargin clearfix">
							<div class="col-md-5 hidden-sm hidden-xs">
								<img src="public/images/others/1.png" alt="Dogs">
							</div>
							<div class="col-md-7 col-sm-12">
								<div class="row clearfix">
									<div class="col-sm-4 col-xs-6">
										<div class="iproduct">
											<div class="product-image noshadow">
												<a href="#"><img class="image_fade" src="public/images/products/1.jpg" alt="High-Heel Girl's Sandals"></a>
											</div>
											<div class="product-desc center">
												<div class="product-title"><h3><a href="#">Natural Dog Food</a></h3></div>
												<div class="product-price"><ins>$11.49</ins></div>
											</div>
										</div>
									</div>
									<div class="col-sm-4 col-xs-6">
										<div class="iproduct">
											<div class="product-image noshadow">
												<a href="#"><img class="image_fade" src="public/images/products/2.jpg" alt="High-Heel Girl's Sandals"></a>
											</div>
											<div class="product-desc center">
												<div class="product-title"><h3><a href="#">Dry Dog Food</a></h3></div>
												<div class="product-price"><ins>$13.99</ins></div>
											</div>
										</div>
									</div>
									<div class="col-sm-4 col-xs-6">
										<div class="iproduct">
											<div class="product-image noshadow">
												<a href="#"><img class="image_fade" src="public/images/products/3.jpg" alt="High-Heel Girl's Sandals"></a>
											</div>
											<div class="product-desc center">
												<div class="product-title"><h3><a href="#">Canvas Dog Food</a></h3></div>
												<div class="product-price"><ins>$14.49</ins></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section dark parallax nomargin" style="background-image: url('public/images/others/section-bg.jpg'); padding: 140px 0;" data-stellar-background-ratio="0.3">
					<div class="container center clearfix">
						<div class="row clearfix">
							<div class="col-md-6">
								<div class="heading-block nobottomborder nobottommargin">
									<div class="before-heading lowercase ls1" style="color: #FFF; font-style: normal;">want to Adopt your a best friend?</div>
									<h3 class="nott font-secondary t400" style="font-size: 32px;">Unconditional love is as close as your nearest Shelter.</h3>
									<a href="#" class="button button-large button-circle button-border button-white button-light topmargin-sm noleftmargin">Get a Pet Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container topmargin-lg clearfix">
					<div class="heading-block center nobottomborder divcenter" style="max-width: 640px">
						<h3 class="nott font-secondary t400" style="font-size: 36px;">Need Help?</h3>
						<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel.</span>
					</div>
					<div class="row contact-properties clearfix">
						<div class="col-sm-4">
							<a href="#" style="background: url('public/images/help/1.jpg') no-repeat center center; background-size: cover;">
								<div class="vertical-middle dark center">
									<div class="heading-block nomargin noborder">
										<h3 class="capitalize t400 font-secondary">Hire a Pet Sitter</h3>
										<span style="margin-top: 100px; font-size: 17px; font-weight: 500;">
    795 Folsom Ave, Suite 600<br>
											San Francisco, CA 94107
</span>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-4">
							<a href="#" style="background: url('public/images/help/2.jpg') no-repeat center center; background-size: cover;">
								<div class="vertical-middle dark center">
									<div class="heading-block nomargin noborder">
										<h3 class="capitalize t400 font-secondary">Report a Stray Dog</h3>
										<span style="margin-top: 100px; font-size: 17px; font-weight: 500;">
    call us<br>
											+91-111-222-333
                                            </span>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-4">
							<a href="#" style="background: url('public/images/help/3.jpg') no-repeat center center; background-size: cover;">
								<div class="vertical-middle dark center">
									<div class="heading-block nomargin noborder">
										<h3 class="capitalize t400 font-secondary">Report Harassment Dog</h3>
										<span style="margin-top: 100px; font-size: 17px; font-weight: 500;">
    Email us<br>
											info@canvas.com
</span>
									</div>
								</div>
							</a>
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

							<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

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
								<li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
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
								<li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
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
							<em style="color: #999;"><small>(First time Register only)</small></em>
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