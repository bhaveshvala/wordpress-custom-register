<?php
/*
* template name: tpl-register
*/
get_header();
?>
<form id="registerUser" method="post" action="">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="firstname" class="sr-only">First name</label>
				<input type="text" class="form-control" placeholder="First name" id="firstname" name="firstname" required="required">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="lastName" class="sr-only">Last name</label>
				<input type="text" class="form-control" placeholder="Last name" id="lastName" name="lastName" required="required">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="form-group">
				<label for="mobileNumber" class="sr-only">Mobile number</label>
				<input type="text" class="form-control" placeholder="Mobile number" id="mobileNumber" name="mobileNumber" required="required">
			</div>
		</div>
		<div class="col-12">
			<div class="form-group">
				<label for="regemailID" class="sr-only">Email id</label>
				<input type="email" class="form-control" placeholder="Email id" id="regemailID" name="regemailID" required="required">
			</div>
		</div>
		<div class="col-12">
			<div class="form-group">
				<label for="regpassword" class="sr-only">Password</label>
				<input type="password" class="form-control" placeholder="Password" id="regpassword" name="regpassword" required="required">
			</div>
		</div>
		<div class="col-12">
			<div class="form-group">
				<label for="confirmPassword" class="sr-only">Confirm password</label>
				<input type="password" class="form-control" placeholder="Confirm password" id="confirmPassword" name="confirmPassword" required="required">
			</div>
		</div>
		<div class="col-12 text-center">
			<div class="form-group m-0 mb-2">
				<button type="submit" class="btn btn-primary" title="Register">Register</button>
			</div>
		</div>
		<div class="col-12 text-center">
			<p class="successRegister text-success"></p>
		</div>
	</div>
</form>
<?php
get_footer();
?>