<!DOCTYPE html>
<html lang="en">

<head>
	<title>Danh sách sản phẩm - Laptop 69</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Sublime project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="src/lib/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" href="src/lib/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" href="src/lib/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="src/css/categories.css">
	<link rel="stylesheet" type="text/css" href="src/css/categories_responsive.css">
</head>

<body>

	<div class="super_container">

		<!-- Header and Navigation bar + on mobile -->
		<?php include('webpage-components/nav.php'); ?>

		<!-- Home -->

		<div class="home">
			<div class="home_container">
				<div class="home_background" style="background-image:url(images/categories.jpg)"></div>
				<div class="home_content_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="home_content">
									<div class="home_title">Smart Phones<span>.</span></div>
									<div class="home_text">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros.
											Sed viverra velit venenatis fermentum luctus.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Products -->

		<?php
			require 'config/connection.php';

			if(isset($_GET['category'])) $cat = $_GET['category'];
			if(isset($_GET['brand'])) $br = $_GET['brand'];

			$sqlGetProductsByFilter = "SELECT * FROM dbo.product WHERE";
			$params = array();
			if (isset($cat)) {
				$sqlGetProductsByFilter = $sqlGetProductsByFilter . " category_id = ?";
				array_push($params, $cat);
			}
			if (isset($br)) {
				$sqlGetProductsByFilter = $sqlGetProductsByFilter . " brand_id = ?";
				array_push($params, $br);
			}
			$filteredProducts = sqlsrv_query( $conn, $sqlGetProductsByFilter, $params);
		?>

		<div class="products">
			<div class="container">
				<div class="row">
					<div class="col">

						<!-- Product Sorting -->
						<div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
							<div class="results">
								Đang hiển thị <span>
								<?php 
									// $numOfRows = sqlsrv_num_rows($filteredProducts);
									// echo $numOfRows;
								?>
								</span> sản phẩm
							</div>
							<div class="sorting_container ml-md-auto">
								<div class="sorting">
									<ul class="item_sorting">
										<li>
											<span class="sorting_text">Sort by</span>
											<i class="fa fa-chevron-down" aria-hidden="true"></i>
											<ul>
												<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
												<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
												<li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Name</span></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">

						<div class="product_grid">

							<?php
								while ($product = sqlsrv_fetch_array($filteredProducts)) {
							?>

								<!-- Product -->
								<div class="product">
									<div class="product_image"><img style="width: 100%; height: auto;" src="<?php echo $product['product_img']; ?>" alt=""></div>
									<div class="product_content">
										<div class="product_title"><a href="product-detail.php?id=<?php echo $product['product_id']; ?>"><?php echo $product['product_name']; ?></a></div>
										<div class="product_price"><?php echo $product['product_price']; ?> vnđ</div>
									</div>
								</div>
							<?php
								}
							?>
						</div>
						<!-- <div class="product_pagination">
							<ul>
								<li class="active"><a href="#">01.</a></li>
								<li><a href="#">02.</a></li>
								<li><a href="#">03.</a></li>
							</ul>
						</div> -->

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
							<div class="icon_box_title">Free Shipping Worldwide</div>
							<div class="icon_box_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
							</div>
						</div>
					</div>

					<!-- Icon Box -->
					<div class="col-lg-4 icon_box_col">
						<div class="icon_box">
							<div class="icon_box_image"><img src="images/icon_2.svg" alt=""></div>
							<div class="icon_box_title">Free Returns</div>
							<div class="icon_box_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
							</div>
						</div>
					</div>

					<!-- Icon Box -->
					<div class="col-lg-4 icon_box_col">
						<div class="icon_box">
							<div class="icon_box_image"><img src="images/icon_3.svg" alt=""></div>
							<div class="icon_box_title">24h Fast Support</div>
							<div class="icon_box_text">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie.</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

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
	<script src="src/js/categories.js"></script>
</body>

</html>