@extends('customers.layouts.master')
@section('content')
	<div id="content">
		<div class="content-page woocommerce">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
						<h2 class="title-shop-page">Order Form</h2>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-ms-12">
								<div class="check-billing">
									<form class="form-my-account">
										<h2 class="title">Billing Details</h2>
										<p class="clearfix box-col2">
											<input type="text" value="First Name *" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" />
											<input type="text" value="last name *" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" />
										</p>
										<p><input type="text" value="Company Name" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" /></p>
										<p class="clearfix box-col2">
											<input type="text" value="Email *" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" />
											<input type="text" value="phone *" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" />
										</p>
										<p>
											<select name="country" id="country">
												<option value="">Country*</option>
												<option value="">United State</option>
												<option value="">England</option>
												<option value="">Germany</option>
												<option value="">France</option>
											</select>
										</p>
										<p><input type="text" value="Address *" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" /></p>
										<p class="clearfix box-col2">
											<input type="text" value="Postcode / Zip" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" />
											<input type="text" value="Town / City *" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" />
										</p>{{--
										<p>
											<input type="checkbox"  id="remember" /> <label for="remember">Create an account?</label>
										</p>--}}
									</form>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-ms-12">
								<div class="check-address">
									<form class="form-my-account">
										<p>
											<textarea cols="30" rows="10" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''">Order Notes</textarea>
										</p>
									</form>
								</div>		
							</div>
						</div>
						<h3 class="order_review_heading">Your order</h3>
						<div class="woocommerce-checkout-review-order" id="order_review">
							<div class="table-responsive">
								<table class="shop_table woocommerce-checkout-review-order-table">
									<thead>
										<tr>
											<th class="product-name">Product</th>
											<th class="product-total">Price</th>
										</tr>
									</thead>
									<tbody>
										<tr class="cart_item">
											<td class="product-name">
												Luphen Caunoiteng kug&nbsp; <span class="product-quantity">× 1</span>
											</td>
											<td class="product-total">
												<span class="amount">$68.00</span>						
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<input type="submit" class="btnorder" data-value="Place order" value="Place order" id="place_order" name="woocommerce_checkout_place_order">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Content Page -->
	</div>
	<!-- End Content -->
@endsection