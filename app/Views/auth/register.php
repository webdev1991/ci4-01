<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>sign up</title>
</head>
<body>
	

<div class="container">

	<div class="row">
		<div class="col-md-4 col-md-offset-4">

			
			<form action="<?= base_url('/authller/save') ?>" method="post" accept-charset="utf-8">
				<?= csrf_field();  ?>

				<h3 style="text-align:center; ">Sign up</h3>
				
			<div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">Name</label>
			  <input type="name" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Enter name">
			 <div class="text-danger"><?= \Config\Services::validation()->showError('name'); ?> </div>
			 
			</div>

			<div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">Email</label>
			  <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
			  <div class="text-danger"><?= \Config\Services::validation()->showError('email'); ?> </div>
			</div>

			<div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">Password</label>
			  <input type="password" class="form-control" name="password" id="exampleFormControlInput1" placeholder="password">
			  <div class="text-danger"><?= \Config\Services::validation()->showError('password'); ?> </div>
			</div>

			<div class="mb-3">
			  <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
			  <input type="password" class="form-control" name="cpassword" id="exampleFormControlInput1" placeholder="password">
			  <div class="text-danger"><?= \Config\Services::validation()->showError('cpassword'); ?> </div>
			</div>
			<br>
			<div class="mb-3">
			  <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
			</div>
			<br>
			<a href="<?= site_url('authller'); ?>">Already have an account, log in</a>

			</form>			
		</div>
	</div>
</div>


</body>
</html>