@extends('customers.layouts.master')
@section('content')
	<div id="content">
		<div class="content-shop left-sidebar">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-8 col-xs-12 main-content">
						<div class="main-content-shop">
							<div class="main-detail">
								<div class="row">
									<div class="col-md-5 col-sm-12 col-xs-12">
										<div class="detail-gallery">
											<div class="mid">
												<img src="/assets/images/photos/extras/17.jpg" width="350" height="450"/>
											</div>
										</div>
										<!-- End Gallery -->
									</div>
									<div class="col-md-7 col-sm-12 col-xs-12">
										<div class="detail-info">
											<h2 class="title-detail">Burberry Pink & Black</h2>
											<div class="product-code">
												<label>Item Code: </label> <span>#12980496023</span>
											</div>
											<div class="product-stock">
												<label>Availability: </label> <span>In stock</span>
											</div>
											<div class="info-price info-price-detail">
												<label>Price:</label> <span>$59.52</span><del>$17.96</del>
											</div>
											<div class="attr-info">
												<a class="addcart-link" href="#"><i class="fa fa-shopping-cart"></i> Order</a>
												<a class="addcart-link" href="#"><i class="fa fa-heart-o"></i> Add To WishList</a>

											</div>
											<!-- End Attr Info -->
										</div>
										<!-- Detail Info -->
									</div>
								</div>
							</div>
							<!-- End Main Detail -->
							<div class="tab-detail">
								<div class="title-tab-detail">
									<ul role="tablist">
										<li class="active"><a href="#details" data-toggle="tab">Product Details </a></li>
									</ul>
								</div>
								<div class="content-tab-detail">
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="details">
											<div class="table-content-tab-detail">
												<div class="title-table-detail"><span>Return Policy</span></div>
												<div class="icon-table-detail"><img src="/assets/images/grid/rv1.png" alt="" /></div>
												<div class="info-table-detail">
													<p>If the product you receive is not as described or low quality, the seller promises that you may return it before order completion (when you click ‘Confirm Order Received’ or exceed confirmation timeframe) and receive a full refund. The return shipping fee will be paid by you. Or, you can choose to keep the product and agree the refund amount directly with the seller.</p>
												</div>
											</div>
											<div class="table-content-tab-detail">
												<div class="title-table-detail"><span>Seller Service</span></div>
												<div class="icon-table-detail"><img src="/assets/images/grid/rv2.png" alt="" /></div>
												<div class="info-table-detail">
													<h3>On-time Delivery</h3>
													<p>If you do not receive your purchase within 60 days, you can ask for a full refund before order completion (when you click ‘Confirm Order Received’ or exceed confirmation timeframe).</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Tab Detail -->
							{{--<div class="upsell-detail">
								<h2 class="title-default">UPSELL PRODUCTS</h2>
								<div class="upsell-detail-slider">
									<div class="wrap-item">
										<div class="item">
											<div class="item-product">
												<div class="product-thumb">
													<a class="product-thumb-link" href="#">
														<img class="first-thumb" alt="" src="/assets/images/photos/extras/3.jpg">
														<img class="second-thumb" alt="" src="/assets/images/photos/extras/4.jpg">
													</a>
													<div class="product-info-cart">
														<div class="product-extra-link">
															<a class="wishlist-link" href="#"><i class="fa fa-heart-o"></i></a>
															<a class="compare-link" href="#"><i class="fa fa-toggle-on"></i></a>
															<a class="quickview-link" href="#"><i class="fa fa-search"></i></a>
														</div>
														<a class="addcart-link" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
													</div>
												</div>
												<div class="product-info">
													<h3 class="title-product"><a href="#">Burberry Pink & black</a></h3>
													<div class="info-price">
														<span>$59.52</span><del>$17.96</del>
													</div>
													<div class="product-rating">
														<div class="inner-rating" style="width:100%"></div>
														<span>(6s)</span>
													</div>
												</div>
											</div>
										</div>
										<!-- End Item -->
										<div class="item">
											<div class="item-product">
												<div class="product-thumb">
													<a class="product-thumb-link" href="#">
														<img class="first-thumb" alt="" src="/assets/images/photos/extras/15.jpg">
														<img class="second-thumb" alt="" src="/assets/images/photos/extras/16.jpg">
													</a>
													<div class="product-info-cart">
														<div class="product-extra-link">
															<a class="wishlist-link" href="#"><i class="fa fa-heart-o"></i></a>
															<a class="compare-link" href="#"><i class="fa fa-toggle-on"></i></a>
															<a class="quickview-link" href="#"><i class="fa fa-search"></i></a>
														</div>
														<a class="addcart-link" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
													</div>
												</div>
												<div class="product-info">
													<h3 class="title-product"><a href="#">Burberry Pink & black</a></h3>
													<div class="info-price">
														<span>$59.52</span><del>$17.96</del>
													</div>
													<div class="product-rating">
														<div class="inner-rating" style="width:100%"></div>
														<span>(6s)</span>
													</div>
												</div>
											</div>
										</div>
										<!-- End Item -->
										<div class="item">
											<div class="item-product">
												<div class="product-thumb">
													<a class="product-thumb-link" href="#">
														<img class="first-thumb" alt="" src="/assets/images/photos/extras/18.jpg">
														<img class="second-thumb" alt="" src="/assets/images/photos/extras/17.jpg">
													</a>
													<div class="product-info-cart">
														<div class="product-extra-link">
															<a class="wishlist-link" href="#"><i class="fa fa-heart-o"></i></a>
															<a class="compare-link" href="#"><i class="fa fa-toggle-on"></i></a>
															<a class="quickview-link" href="#"><i class="fa fa-search"></i></a>
														</div>
														<a class="addcart-link" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
													</div>
												</div>
												<div class="product-info">
													<h3 class="title-product"><a href="#">Burberry Pink & black</a></h3>
													<div class="info-price">
														<span>$59.52</span><del>$17.96</del>
													</div>
													<div class="product-rating">
														<div class="inner-rating" style="width:100%"></div>
														<span>(6s)</span>
													</div>
												</div>
												<div class="percent-saleoff">
													<span><label>55%</label> OFF</span>
												</div>
											</div>
										</div>
										<!-- End Item -->
										<div class="item">
											<div class="item-product">
												<div class="product-thumb">
													<a class="product-thumb-link" href="#">
														<img class="first-thumb" alt="" src="/assets/images/photos/extras/1.jpg">
														<img class="second-thumb" alt="" src="/assets/images/photos/extras/2.jpg">
													</a>
													<div class="product-info-cart">
														<div class="product-extra-link">
															<a class="wishlist-link" href="#"><i class="fa fa-heart-o"></i></a>
															<a class="compare-link" href="#"><i class="fa fa-toggle-on"></i></a>
															<a class="quickview-link" href="#"><i class="fa fa-search"></i></a>
														</div>
														<a class="addcart-link" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
													</div>
												</div>
												<div class="product-info">
													<h3 class="title-product"><a href="#">Burberry Pink & black</a></h3>
													<div class="info-price">
														<span>$59.52</span><del>$17.96</del>
													</div>
													<div class="product-rating">
														<div class="inner-rating" style="width:100%"></div>
														<span>(6s)</span>
													</div>
												</div>
											</div>
										</div>
										<!-- End Item -->
										<div class="item">
											<div class="item-product">
												<div class="product-thumb">
													<a class="product-thumb-link" href="#">
														<img class="first-thumb" alt="" src="/assets/images/photos/extras/11.jpg">
														<img class="second-thumb" alt="" src="/assets/images/photos/extras/12.jpg">
													</a>
													<div class="product-info-cart">
														<div class="product-extra-link">
															<a class="wishlist-link" href="#"><i class="fa fa-heart-o"></i></a>
															<a class="compare-link" href="#"><i class="fa fa-toggle-on"></i></a>
															<a class="quickview-link" href="#"><i class="fa fa-search"></i></a>
														</div>
														<a class="addcart-link" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
													</div>
												</div>
												<div class="product-info">
													<h3 class="title-product"><a href="#">Burberry Pink & black</a></h3>
													<div class="info-price">
														<span>$59.52</span><del>$17.96</del>
													</div>
													<div class="product-rating">
														<div class="inner-rating" style="width:100%"></div>
														<span>(6s)</span>
													</div>
												</div>
											</div>
										</div>
										<!-- End Item -->
										<div class="item">
											<div class="item-product">
												<div class="product-thumb">
													<a class="product-thumb-link" href="#">
														<img class="first-thumb" alt="" src="/assets/images/photos/extras/19.jpg">
														<img class="second-thumb" alt="" src="/assets/images/photos/extras/20.jpg">
													</a>
													<div class="product-info-cart">
														<div class="product-extra-link">
															<a class="wishlist-link" href="#"><i class="fa fa-heart-o"></i></a>
															<a class="compare-link" href="#"><i class="fa fa-toggle-on"></i></a>
															<a class="quickview-link" href="#"><i class="fa fa-search"></i></a>
														</div>
														<a class="addcart-link" href="#"><i class="fa fa-shopping-cart"></i> Add to Cart</a>
													</div>
												</div>
												<div class="product-info">
													<h3 class="title-product"><a href="#">Burberry Pink & black</a></h3>
													<div class="info-price">
														<span>$59.52</span><del>$17.96</del>
													</div>
													<div class="product-rating">
														<div class="inner-rating" style="width:100%"></div>
														<span>(6s)</span>
													</div>
												</div>
												<div class="percent-saleoff">
													<span><label>55%</label> OFF</span>
												</div>
											</div>
										</div>
										<!-- End Item -->
									</div>
								</div>
							</div>--}}
							<!-- End Upsell Detail -->
						</div>
						<!-- End Main Content Shop -->
					</div>
					<div class="col-md-3 col-sm-4 col-xs-12 sidebar">
						<div class="sidebar-shop sidebar-left">
							<div class="widget widget-related-product">
								<h2 class="widget-title">RELATED PRODUCTS</h2>
								<ul class="list-product-related">
									<li class="clearfix">
										<div class="product-related-thumb">
											<a href="#"><img src="/assets/images/photos/extras/3.jpg" alt="" /></a>
										</div>
										<div class="product-related-info">
											<h3 class="title-product"><a href="#">Burberry Pink</a></h3>
											<div class="info-price">
												<span>$59.52</span><del>$17.96</del>
											</div>
										</div>
									</li>
									<li class="clearfix">
										<div class="product-related-thumb">
											<a href="#"><img src="/assets/images/photos/extras/21.jpg" alt="" /></a>
										</div>
										<div class="product-related-info">
											<h3 class="title-product"><a href="#">Burberry Pink</a></h3>
											<div class="info-price">
												<span>$59.52</span><del>$17.96</del>
											</div>
										</div>
									</li>
									<li class="clearfix">
										<div class="product-related-thumb">
											<a href="#"><img src="/assets/images/photos/extras/2.jpg" alt="" /></a>
										</div>
										<div class="product-related-info">
											<h3 class="title-product"><a href="#">Burberry Pink</a></h3>
											<div class="info-price">
												<span>$59.52</span><del>$17.96</del>
											</div>
										</div>
									</li>
									<li class="clearfix">
										<div class="product-related-thumb">
											<a href="#"><img src="/assets/images/photos/extras/2.jpg" alt="" /></a>
										</div>
										<div class="product-related-info">
											<h3 class="title-product"><a href="#">Burberry Pink</a></h3>
											<div class="info-price">
												<span>$59.52</span><del>$17.96</del>
											</div>
										</div>
									</li>
									<li class="clearfix">
										<div class="product-related-thumb">
											<a href="#"><img src="/assets/images/photos/extras/2.jpg" alt="" /></a>
										</div>
										<div class="product-related-info">
											<h3 class="title-product"><a href="#">Burberry Pink</a></h3>
											<div class="info-price">
												<span>$59.52</span><del>$17.96</del>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<!-- End Related Product -->
						</div>
						<!-- End Sidebar Shop -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Content Shop -->
	</div>
	<!-- End Content -->
@endsection