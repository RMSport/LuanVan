@extends('frontend.main')

@section('content')
		{{-- <!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="index.html">Trang chủ</a></li>
							<li><a href="tuyenqg.html">ĐỘI TUYỂN QUỐC GIA</a></li>
							<li><a href="#">Sản phẩm</a></li>

						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB --> --}}

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">ĐỘI TUYỂN QUỐC GIA</h3>
							<div class="checkbox-filter">

								<div class="input-checkbox">

									<label for="category-1">
										<span></span>
										Đức

									</label>
								</div>

								<div class="input-checkbox">

									<label for="category-2">
										<span></span>
										Anh

									</label>
								</div>

								<div class="input-checkbox">

									<label for="category-3">
										<span></span>
										Brazil

									</label>
								</div>

								<div class="input-checkbox">

									<label for="category-4">
										<span></span>
										Hà Lan

									</label>
								</div>

								<div class="input-checkbox">

									<label for="category-5">
										<span></span>
										Pháp

									</label>
								</div>

								<div class="input-checkbox">

									<label for="category-6">
										<span></span>
											ITALY

									</label>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Giá</h3>
							<div class="price-filter">
								<div id="price-slider"></div>
								<div class="input-number price-min">
									<input id="price-min" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input id="price-max" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Size</h3>
							<div class="checkbox-filter">
								<div class="input-checkbox">
									<input type="checkbox" id="brand-1">
									<label for="brand-1">
										<span></span>
										S

									</label>
								</div>
							  <div class="input-checkbox">
									<input type="checkbox" id="brand-2">
									<label for="brand-2">
										<span></span>
										M

									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-3">
									<label for="brand-3">
										<span></span>
										L

									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-4">
									<label for="brand-4">
										<span></span>
										XL

									</label>
								</div>
								<div class="input-checkbox">
									<input type="checkbox" id="brand-5">
									<label for="brand-5">
										<span></span>
										XXL

									</label>
								</div>

							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Sản Phẩm Bán Chạy</h3>
							<div class="product-widget">
								<div class="product-img">
									<img src="{{ url('public') }}/frontend/image/nation/nike/portugal_home.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">SẢN PHẨM</p>
									<h3 class="product-name"><a href="BODAONHA-spbanchay.html">BỒ ĐÀO NHA</a></h3>
									<h4 class="product-price">250.000VND <del class="product-old-price">300.000VND</del></h4>
								</div>
							</div>

							<div class="product-widget">
								<div class="product-img">
									<img src="{{ url('public') }}/frontend/image/nation/nike/brazil_home.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">SẢN PHẨM</p>
									<h3 class="product-name"><a href="BRAZIL.html">BRAZIL</a></h3>
									<h4 class="product-price">270.000VND <del class="product-old-price">350.000VND</del></h4>
								</div>
							</div>

							<div class="product-widget">
								<div class="product-img">
									<img src="{{ url('public') }}/frontend/image/nation/nike/nigeria_home.jpg" alt="">
								</div>
								<div class="product-body">
									<p class="product-category">SẢN PHẨM</p>
									<h3 class="product-name"><a href="NIGERIA-spbanchay.html">NIGERIA</a></h3>
									<h4 class="product-price">250.000VND <del class="product-old-price">300.000VND</del></h4>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->
					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">

							</div>
							<ul class="store-grid">


							</ul>
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/adidas/germany_home.jpg" alt="">
										<div class="product-label">

											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="ĐỨC.html">ĐỨC</a></h3>
										<h4 class="product-price">270.000VND <del class="product-old-price">350.000VND</del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="ĐỨC.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/nike/england_home.jpg" alt="">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="ANH.html">ANH</a></h3>
										<h4 class="product-price">270.000VND<del class="product-old-price">350.000VND</del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="ANH.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-sm visible-xs"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/nike/brazil_home.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="BRAZIL.html">BRAZIL</a></h3>
										<h4 class="product-price">270.000VND <del class="product-old-price">350.000VND</del></h4>
										<div class="product-rating">
										</div>
											<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="BRAZIL.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-lg visible-md"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/nike/netherlands_home.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="HÀLAN.html">HÀ LAN</a></h3>
										<h4 class="product-price">270.000VND <del class="product-old-price">300.0000VND</del></h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="HÀLAN.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-sm visible-xs"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/nike/france_home.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="PHÁP.html">PHÁP</a></h3>
										<h4 class="product-price">270.000VND<del class="product-old-price">350.000</del></h4>
										<div class="product-rating">
										</div>
											<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="PHÁP.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/puma/italia_home.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="ITALYA.html">ITALY</a></h3>
										<h4 class="product-price">270.000VND <del class="product-old-price">350.000VND</del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
											<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="ITALYA.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>

							<!-- product -->
                            <div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/adidas/germany_home.jpg" alt="">
										<div class="product-label">

											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="ĐỨC.html">ĐỨC</a></h3>
										<h4 class="product-price">270.000VND <del class="product-old-price">350.000VND</del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="ĐỨC.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/nike/england_home.jpg" alt="">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="ANH.html">ANH</a></h3>
										<h4 class="product-price">270.000VND<del class="product-old-price">350.000VND</del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="ANH.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-sm visible-xs"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/nike/brazil_home.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="BRAZIL.html">BRAZIL</a></h3>
										<h4 class="product-price">270.000VND <del class="product-old-price">350.000VND</del></h4>
										<div class="product-rating">
										</div>
											<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="BRAZIL.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-lg visible-md"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/nike/netherlands_home.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="HÀLAN.html">HÀ LAN</a></h3>
										<h4 class="product-price">270.000VND <del class="product-old-price">300.0000VND</del></h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="HÀLAN.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-sm visible-xs"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/nike/france_home.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="PHÁP.html">PHÁP</a></h3>
										<h4 class="product-price">270.000VND<del class="product-old-price">350.000</del></h4>
										<div class="product-rating">
										</div>
											<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="PHÁP.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/puma/italia_home.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="ITALYA.html">ITALY</a></h3>
										<h4 class="product-price">270.000VND <del class="product-old-price">350.000VND</del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
											<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="ITALYA.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
                            <div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/adidas/germany_home.jpg" alt="">
										<div class="product-label">

											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="ĐỨC.html">ĐỨC</a></h3>
										<h4 class="product-price">270.000VND <del class="product-old-price">350.000VND</del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="ĐỨC.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/nike/england_home.jpg" alt="">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="ANH.html">ANH</a></h3>
										<h4 class="product-price">270.000VND<del class="product-old-price">350.000VND</del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="ANH.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-sm visible-xs"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/nike/brazil_home.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="BRAZIL.html">BRAZIL</a></h3>
										<h4 class="product-price">270.000VND <del class="product-old-price">350.000VND</del></h4>
										<div class="product-rating">
										</div>
											<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="BRAZIL.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-lg visible-md"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/nike/netherlands_home.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="HÀLAN.html">HÀ LAN</a></h3>
										<h4 class="product-price">270.000VND <del class="product-old-price">300.0000VND</del></h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="HÀLAN.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-sm visible-xs"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/nike/france_home.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="PHÁP.html">PHÁP</a></h3>
										<h4 class="product-price">270.000VND<del class="product-old-price">350.000</del></h4>
										<div class="product-rating">
										</div>
											<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="PHÁP.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/puma/italia_home.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="ITALYA.html">ITALY</a></h3>
										<h4 class="product-price">270.000VND <del class="product-old-price">350.000VND</del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
											<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="ITALYA.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>

							<!-- product -->
                            <div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/adidas/germany_home.jpg" alt="">
										<div class="product-label">

											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="ĐỨC.html">ĐỨC</a></h3>
										<h4 class="product-price">270.000VND <del class="product-old-price">350.000VND</del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="ĐỨC.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/nike/england_home.jpg" alt="">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="ANH.html">ANH</a></h3>
										<h4 class="product-price">270.000VND<del class="product-old-price">350.000VND</del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="ANH.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-sm visible-xs"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/nike/brazil_home.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="BRAZIL.html">BRAZIL</a></h3>
										<h4 class="product-price">270.000VND <del class="product-old-price">350.000VND</del></h4>
										<div class="product-rating">
										</div>
											<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="BRAZIL.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-lg visible-md"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/nike/netherlands_home.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="HÀLAN.html">HÀ LAN</a></h3>
										<h4 class="product-price">270.000VND <del class="product-old-price">300.0000VND</del></h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="HÀLAN.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-sm visible-xs"></div>

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/nike/france_home.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="PHÁP.html">PHÁP</a></h3>
										<h4 class="product-price">270.000VND<del class="product-old-price">350.000</del></h4>
										<div class="product-rating">
										</div>
											<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="PHÁP.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/puma/italia_home.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="ITALYA.html">ITALY</a></h3>
										<h4 class="product-price">270.000VND <del class="product-old-price">350.000VND</del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
											<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="ITALYA.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
                            							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/nike/france_home.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="PHÁP.html">PHÁP</a></h3>
										<h4 class="product-price">270.000VND<del class="product-old-price">350.000</del></h4>
										<div class="product-rating">
										</div>
											<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="PHÁP.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/nation/puma/italia_home.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="ITALYA.html">ITALY</a></h3>
										<h4 class="product-price">270.000VND <del class="product-old-price">350.000VND</del></h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o"></i>
										</div>
											<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><a href="ITALYA.html"><span class="tooltipp">CHI TIẾT SẢN PHẨM</span></a></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->

						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

@stop()

