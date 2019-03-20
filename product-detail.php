<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sản phẩm - Laptop 69</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Sublime project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="src/lib/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" href="src/lib/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" href="src/lib/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="src/css/product.css">
	<link rel="stylesheet" type="text/css" href="src/css/product_responsive.css">
</head>

<body>

	<div class="super_container">

		<!-- Header and Navigation bar + on mobile -->
		<?php include('webpage-components/nav.php'); ?>

		<!-- Home -->

		<?php
			require 'config/connection.php';
			$sqlReadProductById = "SELECT * FROM dbo.product WHERE product_id = ?";
			$params = array($_GET['id']);
			$stmt = sqlsrv_query( $conn, $sqlReadProductById, $params);
			$currentProduct = sqlsrv_fetch_array($stmt);
		?>

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

		<!-- Product Details -->

		<div class="product_details">
			<div class="container">
				<div class="row details_row">

					<!-- Product Image -->
					<div class="col-lg-6">
						<div class="details_image">
							<div class="details_image_large"><img src="<?php echo $currentProduct['product_img'] ?>" alt="">
							</div>
						</div>
					</div>

					<!-- Product Content -->
					<div class="col-lg-6">
						<div class="details_content">
							<div class="details_name"><?php echo $currentProduct['product_name']; ?></div>
							<div class="details_price"><?php echo $currentProduct['product_price'] ?> vnđ</div>

							<!-- In Stock -->
							<div class="in_stock_container">
								<div class="availability">Tình trạng:</div>
								<span>Còn hàng</span>
							</div>
							<div class="details_text">
								<p><?php echo $currentProduct['product_desc'] ?></p>
							</div>

							<!-- Product Quantity -->
							<div class="product_quantity_container">
								<div class="product_quantity clearfix">
									<span>SL</span>
									<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
									<div class="quantity_buttons">
										<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
										<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
									</div>
								</div>
								<div class="button cart_button"><a href="#">Thêm vào giỏ hàng</a></div>
							</div>

							<!-- Share -->
							<div class="details_share">
								<span>Chia sẻ:</span>
								<ul>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="row description_row">
					<div class="col">
						<div class="description_title_container">
							<div class="description_title">Mô tả</div>
						</div>
						<div class="description_text">
							<p><?php echo $currentProduct['product_desc'] ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Products -->

		<div class="products">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="products_title">Các sản phẩm liên quan</div>
					</div>
				</div>
				<div class="row">
					<div class="col">

						<div class="product_grid">

							<!-- Product -->
							<?php
								$sqlRead4ProductsByCategory = "SELECT TOP 4 * FROM dbo.product WHERE category_id = ?";
								$params = array($currentProduct['category_id']);
								$products = sqlsrv_query( $conn, $sqlRead4ProductsByCategory, $params);

								while ($relatedProduct = sqlsrv_fetch_array($products)) {
							?>
								<div class="product">
									<div class="product_image"><img style="width: 100%; height: auto;" src="<?php echo $relatedProduct['product_img']; ?>" alt=""></div>
									<div class="product_content">
										<div class="product_title"><a href="product-detail.php?id=<?php echo $relatedProduct['product_id']; ?>"><?php echo $relatedProduct['product_name']; ?></a></div>
										<div class="product_price"><?php echo $relatedProduct['product_price']; ?> vnđ</div>
									</div>
								</div>
							<?php
								}
							?>
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
	<script src="src/js/product.js"></script>
</body>

</html>