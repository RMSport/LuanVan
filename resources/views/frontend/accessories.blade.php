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
							<li><a href="">Trang chủ</a></li>
							<li><a href="#">Phụ kiện</a></li>
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
							<h3 class="aside-title">phụ kiện</h3>
							<div class="checkbox-filter">

								<div class="input-checkbox">

								  <label for="category-1">
										<span></span>
										Găng Tay
									<small>(3)</small>
									</label>
								</div>

								<div class="input-checkbox">

								  <label for="category-2">
										<span></span>
										Bó Gối
									<small>(3)</small>
									</label>
								</div>
            <div class="input-checkbox">

			  <label for="category-4">
										<span></span>
										Tất
			    <small>(3)</small>
									</label>
								</div>

								<div class="input-checkbox">

									<label for="category-5">
										<span></span>
										Logo
										<small>(3)</small>
									</label>
								</div>
        </div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">GIÁ</h3>
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
									<h3 class="product-name"><a href=BODAONHA-spbanchay.html>BỒ ĐÀO NHA</a></h3>
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
										<img src="{{ url('public') }}/frontend/image/accessories/banggoi.jpg" alt="">
										<div class="product-label">

											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="Gangtayden.html">Băng gối</a></h3>
										<h4 class="product-price">290.000VND <del class="product-old-price">320.000VND</del></h4>
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
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"><a href="Gangtayden.html">CHI TIẾT SẢN PHẨM</a></span></button>
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
										<img src="{{ url('public') }}/frontend/image/accessories/bundesliga.jpg" alt="">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="Gangtaytrang.html">Logo Bundesliga</a></h3>
										<h4 class="product-price">20.000VND <del class="product-old-price">25.000VND</del></h4>
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
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"><a href="Gangtaytrang.html">CHI TIẾT SẢN PHẨM</a></span></button>
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
										<img src="{{ url('public') }}/frontend/image/accessories/championships.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="Gangtaykid.html">Logo Cúp C1</a></h3>
										<h4 class="product-price">20.000VND <del class="product-old-price">25.000VND</del></h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"><a href="Gangtaykid.html">CHI TIẾT SẢN PHẨM</a></span></button>
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
										<img src="{{ url('public') }}/frontend/image/accessories/championshipsC1.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="Banggoicauthu.html">Logo FIFA CLUB WORDCUP</a></h3>
										<h4 class="product-price">20.000VND <del class="product-old-price">25.000VND</del></h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"><a href="Banggoicauthu.html">CHI TIẾT SẢN PHẨM</a></span></button>
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
										<img src="{{ url('public') }}/frontend/image/accessories/championshipswordcup.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="Banggoithumon.html">Logo WORDCUP</a></h3>
										<h4 class="product-price">20.000VND <del class="product-old-price">25.000VND</del></h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"><a href="Banggoithumon.html">CHI TIẾT SẢN PHẨM</a></span></button>
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
										<img src="{{ url('public') }}/frontend/image/accessories/championshipsyear.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="Banggoithethao.html">Logo Win C1</a></h3>
										<h4 class="product-price">20.000VND <del class="product-old-price">25.000VND</del></h4>
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
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"><a href="Banggoithethao.html">CHI TIẾT SẢN PHẨM</a></span></button>
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
										<img src="{{ url('public') }}/frontend/image/accessories/euro.jpg" alt="">
										<div class="product-label">

											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="Tatdai1.html">Logo EURO</a></h3>
										<h4 class="product-price">20.000VND <del class="product-old-price">25.000VND</del></h4>
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
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"><a href="Tatdai1.html">CHI TIẾT SẢN PHẨM</a></span></button>
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
										<img src="{{ url('public') }}/frontend/image/accessories/facup.jpg" alt="">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="Tatngan.html">Logo FA Cup</a></h3>
										<h4 class="product-price">20.000VND<del class="product-old-price">25.000VND</del></h4>
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
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"><a href="Tatngan.html">CHI TIẾT SẢN PHẨM</a></span></button>
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
										<img src="{{ url('public') }}/frontend/image/accessories/laliga.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">SẢN PHẨM</p>
										<h3 class="product-name"><a href="Tatdai2.html">Logo Laliga</a></h3>
										<h4 class="product-price">20.000VND <del class="product-old-price">25.000VND</del></h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"><a href="Tatdai2.html">CHI TIẾT SẢN PHẨM</a></span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

							<div class="clearfix visible-lg visible-md"></div>

							<div class="row">
							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{ url('public') }}/frontend/image/accessories/C1&C2.jpg" alt="">
										<div class="product-label">

											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">PHỤ KIÊN</p>
										<h3 class="product-name"><a href="logoc1.html">LOGO ChampionLeague</a></h3>
										<h4 class="product-price">20.000VND <del class="product-old-price">25.000VND</del></h4>
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
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"><a href="logoc1.html">CHI TIẾT SẢN PHẨM</a></span></button>
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
										<img src="{{ url('public') }}/frontend/image/accessories/ligue1.jpg" alt="">
										<div class="product-label">
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">PHỤ KIỆN</p>
										<h3 class="product-name"><a href="logoeuro.html">LOGO Ligue1</a></h3>
										<h4 class="product-price">20.000VND <del class="product-old-price">25.000VND</del></h4>
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
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"><a href="logoeuro.html">CHI TIẾT SẢN PHẨM</a></span></button>
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
										<img src="{{ url('public') }}/frontend/image/accessories/premierleage.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">PHỤ KIỆN</p>
										<h3 class="product-name"><a href="logoc2.html">LOGO PremierLeague</a></h3>
										<h4 class="product-price">20.000VND <del class="product-old-price">25.000VND</del></h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"><a href="logoc2.html">CHI TIẾT SẢN PHẨM</a></span></button>
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
										<img src="{{ url('public') }}/frontend/image/accessories/seria.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">PHỤ KIỆN</p>
										<h3 class="product-name"><a href="logoc2.html">LOGO SeriA</a></h3>
										<h4 class="product-price">20.000VND <del class="product-old-price">25.000VND</del></h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"><a href="logoc2.html">CHI TIẾT SẢN PHẨM</a></span></button>
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
										<img src="{{ url('public') }}/frontend/image/accessories/respect.jpg" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">PHỤ KIỆN</p>
										<h3 class="product-name"><a href="logoc2.html">LOGO Respect</a></h3>
										<h4 class="product-price">20.000VND <del class="product-old-price">25.000VND</del></h4>
										<div class="product-rating">
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">YÊU THÍCH</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">SO SÁNH SẢN PHẨM</span></button>
											<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"><a href="logoc2.html">CHI TIẾT SẢN PHẨM</a></span></button>
										</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>THÊM VÀO GIỎ HÀNG</button>
									</div>
								</div>
							</div>
							<!-- /product -->

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


