@extends('customers.layouts.master')
@section('content')
	<div id="content">
		<div class="content-page woocommerce">
			<div class="container">
				<div class="cart-content-page">
					<h2 class="title-shop-page">My WishList</h2>
					<form method="post">
						<div class="table-responsive">
							<table cellspacing="0" class="shop_table cart table">
								<thead>
									<tr>
										<th class="product-remove">&nbsp;</th>
										<th class="product-name">Product</th>
										<th class="product-price">Price</th>
										<th class="product-quantity">Description</th>
									</tr>
								</thead>
								<tbody>
									<tr class="cart_item">
										<td class="product-thumbnail">
											<a href="#"><img  src="/assets/images/item1.jpg"  width="300" height="70"/></a>
										</td>
										<td class="product-name">
											<a href="#">Luphen Caunoiteng kug </a>					
										</td>
										<td class="product-price">
											<span class="amount">$68.00</span>					
										</td>
										<td class="product-quantity">
											<div>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda cupiditate dolore, eius id nesciunt officia quaerat sequi. Accusantium asperiores dolorum, exercitationem facere laboriosam neque, quasi quis temporibus ullam vel velit.</p>
											</div>
										</td>
									</tr>
									<tr class="cart_item">
										<td class="product-thumbnail">
											<a href="#"><img src="/assets/images/item2.jpg" width="300" height="70"/></a>
										</td>
										<td class="product-name">
											<a href="#">Cooc Huyinh Phale </a>					
										</td>
										<td class="product-price">
											<span class="amount">$19.00</span>					
										</td>
										<td class="product-quantity">
											<div>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda cupiditate dolore, eius id nesciunt officia quaerat sequi. Accusantium asperiores dolorum, exercitationem facere laboriosam neque, quasi quis temporibus ullam vel velit.</p>
											</div>				
										</td>
									</tr>

								</tbody>
							</table>
						</div>
					</form>
				</div>
			</div>	
		</div>
		<!-- End Content Page -->
	</div>
	<!-- End Content -->
@endsection