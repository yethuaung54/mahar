@extends('customers.layouts.master')
@section('content')
	<div id="content">
		<div class="content-page">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
						<h2 class="title-shop-page">My Account</h2>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-ms-12">
								<div class="account-login">
									<form class="form-my-account">
										<h2 class="title">Login</h2>
										<p><input type="text" value="Username *" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" /></p>
										<p><input type="text" value="Password *" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" /></p>
										{{--<p>
											<input type="checkbox"  id="remember" /> <label for="remember">Remember me</label>
											<a href="#">Lost Password?</a>
										</p>--}}
										<p><input type="submit" value="Login" /></p>
									</form>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-ms-12">
								<div class="account-register">
									<form class="form-my-account">
										<h2 class="title">Register</h2>
										<p><input type="text" value="Username *" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" /></p>
										<p><input type="text" value="E-mail *" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" /></p>
										<p>
											<input type="radio" name="gender" value="customer" checked> Customer
											<input type="radio" name="gender" value="vendor"> Vendor <br>
										</p>
										<p><input type="text" value="Password *" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" /></p>
										<p><input type="text" value="Confirm Password *" onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" /></p>
										<p><input type="submit" value="Register" /></p>
									</form>
								</div>		
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Content Page -->
	</div>
	<!-- End Content -->
@endsection