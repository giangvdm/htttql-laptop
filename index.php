<!DOCTYPE html>
<html lang="vi">

<head>
	<title>Laptop 69</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Sublime project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="src/lib/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" href="src/lib/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" href="src/lib/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="src/css/main_styles.css">
	<link rel="stylesheet" type="text/css" href="src/css/responsive.css">
</head>

<body>

	<div class="super_container">

		<!-- Header and Navigation bar + on mobile -->
		<?php include('webpage-components/nav.php'); ?>

		<!-- Home -->

		<div class="home" id="main" data-page-content="home">
			<div class="home_slider_container">

				<!-- Home Slider -->
				<div class="owl-carousel owl-theme home_slider">

					<!-- Slider Item -->
					<div class="owl-item home_slider_item">
						<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
						<div style="background-color: rgba(0, 0, 0, 0.4); width: 100%; height: 100%;"></div>
						<div class="home_slider_content_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_slider_content" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
											<div class="home_slider_title">Laptop dành cho mọi đối tượng</div>
											<div class="home_slider_subtitle">Các sản phẩm đa dạng thuộc mọi phân khúc, tầm giá</div>
											<div class="button button_light home_button"><a href="#">Mua ngay</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Slider Item -->
					<div class="owl-item home_slider_item">
						<div class="home_slider_background" style="background-image:url(images/home_slider_2.jpg)"></div>
						<div style="background-color: rgba(0, 0, 0, 0.4); width: 100%; height: 100%;"></div>
						<div class="home_slider_content_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_slider_content" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
											<div class="home_slider_title">Workstation chất lượng cao</div>
											<div class="home_slider_subtitle">Hiệu năng cao trong tầm giá</div>
											<div class="button button_light home_button"><a href="#">Mua ngay</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Slider Item -->
					<div class="owl-item home_slider_item">
						<div class="home_slider_background" style="background-image:url(images/home_slider_3.jpg)"></div>
						<div style="background-color: rgba(0, 0, 0, 0.4); width: 100%; height: 100%;"></div>
						<div class="home_slider_content_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_slider_content" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
											<div class="home_slider_title">Laptop dành cho doanh nhân</div>
											<div class="home_slider_subtitle">Độ bền thách thức thời gian, giá thành thách thức mọi đối thủ</div>
											<div class="button button_light home_button"><a href="#">Mua ngay</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<!-- Home Slider Dots -->

				<div class="home_slider_dots_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="home_slider_dots">
									<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
										<li class="home_slider_custom_dot active">01.</li>
										<li class="home_slider_custom_dot">02.</li>
										<li class="home_slider_custom_dot">03.</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Ads -->

		<div class="avds">
			<div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
				<div class="avds_small">
					<div class="avds_background" style="background-image:url(images/avds_small.jpg)"></div>
					<div class="avds_small_inner">
						<div class="avds_discount_container">
							<img src="images/discount.png" alt="">
							<div>
								<div class="avds_discount">
									<div>20<span>%</span></div>
									<div>Discount</div>
								</div>
							</div>
						</div>
						<div class="avds_small_content">
							<div class="avds_title">Smart Phones</div>
							<div class="avds_link"><a href="categories.html">See More</a></div>
						</div>
					</div>
				</div>
				<div class="avds_large">
					<div class="avds_background" style="background-image:url(images/avds_large.jpg)"></div>
					<div class="avds_large_container">
						<div class="avds_large_content">
							<div class="avds_title">Professional Cameras</div>
							<div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed
								nec molestie eros. Sed viver ra velit venenatis fermentum luctus.</div>
							<div class="avds_link avds_link_large"><a href="categories.html">See More</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Products -->

		<div class="products">
			<div class="container">
				<div class="row">
					<div class="col">

						<div class="product_grid">

							<!-- Quick access -->
							<div class="product">
								<div class="product_image"><img src="images/flagship_dell.jpg" alt=""></div>
								<div class="product_extra product_sale"><a href="">Hot</a></div>
								<div class="product_content">
									<div class="product_title"><a href="product-list.php?brand=Dell">Laptop thương hiệu Dell</a></div>
									<div class="product_price">Chỉ từ 4 triệu đồng</div>
								</div>
							</div>

							<!-- Quick access -->
							<div class="product">
								<div class="product_image"><img src="images/flagship_apple.jpg" alt=""></div>
								<div class="product_extra product_sale"><a href="">Hot</a></div>
								<div class="product_content">
									<div class="product_title"><a href="product-list.php?brand=Apple">Laptop thương hiệu Apple</a></div>
									<div class="product_price">Chỉ từ 14 triệu đồng</div>
								</div>
							</div>

							<!-- Quick access -->
							<div class="product">
								<div class="product_image"><img src="images/flagship_thinkpad.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_title"><a href="product-list.php?brand=Lenovo">Laptop Lenovo Thinkpad đẳng cấp</a></div>
									<div class="product_price">Gía cực tốt</div>
								</div>
							</div>

							<!-- Quick access -->
							<div class="product">
								<div class="product_image"><img src="images/flagship_acer.jpg" alt=""></div>
								<div class="product_extra product_new"><a href="">New</a></div>
								<div class="product_content">
									<div class="product_title"><a href="product-list.php?brand=Acer">Laptop thương hiệu Acer</a></div>
									<div class="product_price">Chỉ từ 4 triệu đồng</div>
								</div>
							</div>

							<!-- Quick access -->
							<div class="product">
								<div class="product_image"><img src="images/flagship_business.jpg" alt=""></div>
								<div class="product_extra product_sale"><a href="">Hot</a></div>
								<div class="product_content">
									<div class="product_title"><a href="product-list.php?category=Business">Laptop Doanh nhân</a></div>
									<div class="product_price">Gía ưu đãi</div>
								</div>
							</div>

							<!-- Quick access -->
							<div class="product">
								<div class="product_image"><img src="images/flagship_gaming.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_title"><a href="product-list.php?category=Gaming">Laptop Chơi game</a></div>
									<div class="product_price">Chỉ từ 7 triệu đồng</div>
								</div>
							</div>

							<!-- Quick access -->
							<div class="product">
								<div class="product_image"><img src="images/flagship_workstation.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_title"><a href="product-list.php?category=Workstation">Laptop Workstation</a></div>
									<div class="product_price">Gía cực tốt</div>
								</div>
							</div>

							<!-- Quick access -->
							<div class="product">
								<div class="product_image"><img src="images/flagship_ultrabook.jpg" alt=""></div>
								<div class="product_extra product_sale"><a href="categories.html">Hot</a></div>
								<div class="product_content">
									<div class="product_title"><a href="product-list.php?category=Ultrabook">Laptop mỏng nhẹ</a></div>
									<div class="product_price">Chỉ từ 4 triệu đồng</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Ad -->

		<div class="avds_xl">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="avds_xl_container clearfix">
							<div class="avds_xl_background" style="background-image:url(images/avds_xl.jpg)"></div>
							<div class="avds_xl_content">
								<div class="avds_title">Amazing Devices</div>
								<div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus.</div>
								<div class="avds_link avds_xl_link"><a href="categories.html">See More</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Icon Boxes -->

		<div class="icon_boxes">
			<div class="container">
				<div class="row icon_box_row">

					<!-- Icon Box -->
					<div class="col-lg-4 icon_box_col">
						<div class="icon_box">
							<div class="icon_box_image"><img src="images/icon_1.svg" alt=""></div>
							<div class="icon_box_title">Miễn phí giao hàng toàn quốc</div>
							<div class="icon_box_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
							</div>
						</div>
					</div>

					<!-- Icon Box -->
					<div class="col-lg-4 icon_box_col">
						<div class="icon_box">
							<div class="icon_box_image"><img src="images/icon_2.svg" alt=""></div>
							<div class="icon_box_title">Đổi trả miễn phí 7 ngày</div>
							<div class="icon_box_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
							</div>
						</div>
					</div>

					<!-- Icon Box -->
					<div class="col-lg-4 icon_box_col">
						<div class="icon_box">
							<div class="icon_box_image"><img src="images/icon_3.svg" alt=""></div>
							<div class="icon_box_title">Dịch vụ hoàn hảo</div>
							<div class="icon_box_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- Newsletter -->
		<?php include('webpage-components/newsletter.php'); ?>

		<!-- Footer -->
		<?php include('webpage-components/footer.php') ?>
	</div>

	<script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="node_modules/popper.js/dist/umd/popper-utils.min.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="src/lib/greensock/TweenMax.min.js"></script>
	<script src="src/lib/greensock/TimelineMax.min.js"></script>
	<script src="src/lib/scrollmagic/ScrollMagic.min.js"></script>
	<script src="src/lib/greensock/animation.gsap.min.js"></script>
	<script src="src/lib/greensock/ScrollToPlugin.min.js"></script>
	<script src="src/lib/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="src/lib/Isotope/isotope.pkgd.min.js"></script>
	<script src="src/lib/easing/easing.js"></script>
	<script src="src/lib/parallax-js-master/parallax.min.js"></script>
	<script src="src/js/custom.js"></script>
	<script src="src/js/nav.js"></script>
</body>

</html>