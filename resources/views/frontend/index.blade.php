@extends('frontend.main')

@section('content')
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{ url('public') }}/frontend/./image/club/adidas/RM_home.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Câu Lạc Bộ</h3>
								<a href="{{ route('club') }}" class="cta-btn">Mua Ngay<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{ url('public') }}/frontend/./image/nation/nike/portugal_home.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Đội Tuyển Quốc Gia</h3>
								<a href="{{ route('nation') }}" class="cta-btn">Mua Ngay<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
						<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{ url('public') }}/frontend/img/99098488_249948309544393_1721307971796860928_n.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3> Futsal</h3>
								<a href="futsal.html" class="cta-btn">MUA NGAY <em class="fa fa-arrow-circle-right"></em></a></div>
						</div>
					</div>
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{ url('public') }}/frontend/./image/accessories/erou.jpg" alt="">
							</div>
							<div class="shop-body">
								<h3>Phụ Kiện</h3>
								<a href="phukien.html" class="cta-btn">MUA NGAY <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Sản Phẩm</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="{{ route('club') }}">Câu Lạc Bộ</a></li>
									<li><a data-toggle="tab" href="{{ route('nation') }}">Đội Tuyển Quốc Gia</a></li>
									<li><a data-toggle="tab" href="futsal.html">Áo FutSal</a></li>
									<li><a data-toggle="tab" href="phukien.html">Phụ kiện</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{ url('public') }}/frontend/./image/nation/nike/england_home.jpg" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Sản Phẩm</p>
												<h3 class="product-name"><a href="ANH.html">Đội Tuyển Anh</a></h3>
												<h4 class="product-price">270.000VND <del class="product-old-price">350.000VND</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Yêu Thích</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">So Sánh Sản Phẩm</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><a href="ANH.html"><span class="tooltipp">CHI TIẾT Sản Phẩm</span></a></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm Vào Giỏ Hàng </button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{ url('public') }}/frontend/image/club//nike/barca_home.jpg" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Sản Phẩm</p>
												<h3 class="product-name"><a href="barcalona.html">Barcalona</a></h3>
												<h4 class="product-price">270.000VND <del class="product-old-price">350.000VND</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Yêu Thích</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">So Sánh Sản Phẩm</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><a href="barcalona.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm Vào Giỏ Hàng</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{ url('public') }}/frontend/./image/club/nike/inter_home.jpg" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Sản Phẩm</p>
												<h3 class="product-name"><a href="inter.html">Inter Milan</a></h3>
												<h4 class="product-price">270.000VND <del class="product-old-price">350.000VND</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>

												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Yêu Thích</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">So Sánh Sản Phẩm</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><a href="inter.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm Vào Giỏ Hàng</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{ url('public') }}/frontend/image/nation/nike/netherlands_home.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Sản Phẩm</p>
												<h3 class="product-name"><a href="HÀLAN.html">Đội Tuyển Hà Lan</a></h3>
												<h4 class="product-price">270.000VND <del class="product-old-price">350.000VND</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Yêu Thích</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">So Sánh Sản Phẩm</span></button>
													<button class="quick-view"><em class="fa fa-eye"></em><a href="HÀLAN.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm Vào Giỏ Hàng</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{ url('public') }}/frontend/./image/club/puma/dormund_home.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Sản Phẩm</p>
												<h3 class="product-name"><a href="dortmund.html">CLB Dortmund</a></h3>
												<h4 class="product-price">270.000VND <del class="product-old-price">350.000VND</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Yêu Thích</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">So Sánh Sản Phẩm</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><a href="dortmund.html"><span class="tooltipp">CHI TIẾT Sản Phẩm</span></a></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm Vào Giỏ Hàng</button>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
					  <div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Ngày</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Giờ</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Phút</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Giây</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">Khuyến Mãi Trong Tuần</h2>
							<p> SALE UP 50% </p>

							<a class="primary-btn cta-btn" href="#">Mua Ngay</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Phụ Kiện</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="clb.html">Câu Lạc Bộ</a></li>
									<li><a data-toggle="tab" href="tuyenqg.html">Đội Tuyển Quốc Gia</a></li>
									<li><a data-toggle="tab" href="futsal.html">Áo FutSal</a></li>
									<li><a data-toggle="tab" href="phukien.html">Phụ Kiện</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{ url('public') }}/frontend/./image/accessories/logoC1&C2.jpg" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Sản Phẩm</p>
												<h3 class="product-name"><a href="logoc2.html">Logo</a></h3>
												<h4 class="product-price">20.000VND <del class="product-old-price">40.000VND</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Yêu Thích</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">So Sánh Sản Phẩm</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><a href="logoc2.html"><span class="tooltipp">CHI TIẾT Sản Phẩm</span></a></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm Vào Giỏ Hàng</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{ url('public') }}/frontend/image/accessories/premierleage.jpg" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Sản Phẩm</p>
												<h3 class="product-name"><a href="logongoaihang.html">Logo</a></h3>
												<h4 class="product-price">20.000VND <del class="product-old-price">40.000VND</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Yêu Thích</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">So Sánh Sản Phẩm</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><a href="logongoaihang.html"><span class="tooltipp">CHI TIẾT Sản Phẩm</span></a></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm Vào Giỏ Hàng</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{ url('public') }}/frontend/image/accessories/seria.jpg" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Sản Phẩm</p>
												<h3 class="product-name"><a href="logoY.html">Logo</a></h3>
												<h4 class="product-price">20.000VND<del class="product-old-price">40.000VND</del></h4>
												<div class="product-rating">
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Yêu Thích</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">So Sánh Sản Phẩm</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><a href="logoY.html"><span class="tooltipp">CHI TIẾT Sản Phẩm</span></a></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm Vào Giỏ Hàng</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{ url('public') }}/frontend/./image/accessories/laliga.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Sản Phẩm</p>
												<h3 class="product-name"><a href="logolaliga.html">Logo</a></h3>
												<h4 class="product-price">20.000VND <del class="product-old-price">40.000VND</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Yêu Thích</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">So Sánh Sản Phẩm</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><a href="logolaliga.html"><span class="tooltipp">CHI TIẾT Sản Phẩm</span></a></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm Vào Giỏ Hàng</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{ url('public') }}/frontend/./image/accessories/bundesliga.jpg" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Sản Phẩm</p>
												<h3 class="product-name"><a href="logoc1.html">Logo</a></h3>
												<h4 class="product-price">20.000VND <del class="product-old-price">40.000VND</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Yêu Thích</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">So Sánh Sản Phẩm</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><a href="logoc1.html"><span class="tooltipp">CHI TIẾT Sản Phẩm</span></a></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm Vào Giỏ Hàng</button>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
<div class="clearfix visible-sm visible-xs"></div>
</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

@stop()
