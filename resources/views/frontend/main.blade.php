<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>FOOTBALLSHOP-Áo bóng đá đẹp và chất lượng hàng đầu TPHCM</title>
		<link ref="canoncial" href="thynguyen.tk" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name= "keywords" content="áo bóng đá, áo thể thao, quần áo đá banh giá rẻ, phụ kiện thể thao, áo bóng đá mùa mới"/>
		<meta name= "description" content="FootballShop: Shop chuyên áo bóng đá, áo thể thao đẹp nhất 2020 và chất lượng hàng đầu, sản phẩm cao cấp, giá ưu đãi nhiều mẫu mã, tư vấn nhiệt tình vui vẻ, giao hàng tận nơi..."/>
		<meta property="og:title" content="FOOTBALLSHOP - Áo bóng đá đẹp và chất lượng hàng đầu TPHCM"/>
		<meta property="og:url" content="http://thynguyen.tk/" />
		<meta property="og:image" content="http://thynguyen.tk/{{ url('public') }}/frontend/img/lg1.jpg" />
		<link rel="Shortcut icon" href="http://thynguyen.tk/{{ url('public') }}/frontend/img/lg1.jpg" type="image/x-icon"/>
		<meta name="DC.title" content="FOOTBALLSHOP - Áo bóng đá đẹp và chất lượng hàng đầu TPHCM" />
		<meta property="og:description" content="FootballShop: Shop chuyên áo bóng đá, áo thể thao đẹp nhất 2020 và chất lượng hàng đầu, sản phẩm cao cấp, giá ưu đãi nhiều mẫu mã, tư vấn nhiệt tình vui vẻ, giao hàng tận nơi..." />


		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{ url('public') }}/frontend/css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{ url('public') }}/frontend/css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="{{ url('public') }}/frontend/css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{ url('public') }}/frontend/css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{ url('public') }}/frontend/css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{ url('public') }}/frontend/css/style.css"/>



    </head>
	<body>
		<button onclick="topFunction()" id="myBtn" title="Go to top"><a href="{{ route('home') }}">Top</a></button>



<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

		<header>

			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> 0768613759</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> pilong0803@gmail@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 180 Cao Lỗ</a></li>
					</ul>
					<ul class="header-links pull-right">

					  <li><a href="Login.html"><i class="fa fa-user-o"></i> Đăng nhập</a></li>
					</ul>
				</div>
			</div>



			<div id="header">

				<div class="container">

					<div class="row">

						<div class="col-md-3">
							<div class="header-logo">
								<a href="{{ route('home') }}" class="logo">
									<img src="{{ url('public') }}/frontend/img/lg1.jpg" alt="">
								</a>
							</div>
						</div>



						<div class="col-md-6">
							<div class="header-search">
								<form>

									<input class="input" placeholder="Tìm kiếm">
									<button class="search-btn"><a href="timkiem.html">Tìm Kiếm</a></button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">

									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
							<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span><a href="checkout.html">Giỏ Hàng</a></span>
										<div class="qty"></div>
									</a>
									<div class="cart-dropdown">

										<div class="cart-summary">
											<small></small>
											<h5></h5>
										</div>
										<div class="cart-btns">
											<a href="#">Xem Giỏ Hàng</a>
											<a href="checkout.html">Thanh Toán <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="{{ route('home') }}">Trang chủ</a></li>
                        <li><a href="KhuyenMai.html">Sản phẩm mới</a></li>
						<li><a href="KhuyenMai.html">Khuyến Mãi</a></li>
						<li><a href="{{ route('club') }}">Câu Lạc Bộ</a></li>
						<li><a href="{{ route('nation') }}">Đội Tuyển Quốc Gia</a></li>

						<li><a href="{{ route('accessories') }}">Phụ Kiện</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

@yield('content')

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>ĐĂNG KÝ</p>
							<form>
								<input class="input" type="email" placeholder="Nhập Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Đăng Ký</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">


			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Liên Hệ</h3>
								<p>Khách có thể liên hệ shop qua địa chỉ, số điện thoại hoặc email khi cần thiết.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>180 Cao Lỗ</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+0703732218</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>pilong0803@gmail.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Sản Phẩm</h3>
								<ul class="footer-links">
									<li><a href="clb.html">Câu Lạc Bộ</a></li>
									<li><a href="tuyenqg.html">Đội Tuyển Quốc Gia</a></li>
									<li><a href="futsal.html">Futsal</a></li>
									<li><a href="phukien.html">Phụ Kiện</a></li>
									<li><a href="KhuyenMai.html">Khuyến Mãi</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Thông Tin</h3>
								<ul class="footer-links">
									<li><a href="#">Liện Hệ Với Chúng Tôi</a></li>
									<li><a href="#"></a>Chính Sách Bảo Mật</li>
									<li><a href="#">Đơn Hàng Và Trả Lại</a></li>
									<li><a href="#">Điều Khoảng Và Điều Kiện</a></li>
									<li><a href="#"></a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Dịch Vụ</h3>
								<ul class="footer-links">
									<li><a href="#">Tài Khoản Của Tôi</a></li>
									<li><a href="#">Xem Giỏ Hàng</a></li>
									<li><a href="#">Danh Sách</a></li>
									<li><a href="#">Theo Dõi Đơn Hàng</a></li>
									<li><a href="#">Hỗ Trợ</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								STU &copy;<script>document.write(new Date().getFullYear());</script> Đại Học Công Nghệ Sài Gòn | Trang chủ được thiết kế <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">TEAM</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->

		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="{{ url('public') }}/frontend/js/jquery.min.js"></script>
		<script src="{{ url('public') }}/frontend/js/bootstrap.min.js"></script>
		<script src="{{ url('public') }}/frontend/js/slick.min.js"></script>
		<script src="{{ url('public') }}/frontend/js/nouislider.min.js"></script>
		<script src="{{ url('public') }}/frontend/js/jquery.zoom.min.js"></script>
		<script src="{{ url('public') }}/frontend/js/main.js"></script>

		<script lang="javascript">var __vnp = {code : 2032,key:'', secret : '5a21851b32fcedafe41c51f7b363d64c'};(function() {var ga = document.createElement('script');ga.type = 'text/javascript';ga.async=true; ga.defer=true;ga.src = '//core.vchat.vn/code/tracking.js';var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script>
	</body>
</html>
