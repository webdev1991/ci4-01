<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>log in</title>
</head>
<body>
	

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">

			<form action="<?= base_url('/authller/check') ?>" method="post" accept-charset="utf-8">
				<?= csrf_field();  ?>
				<h3 style="text-align:center;">Log In</h3>
				
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
			<br>
			<div class="mb-3">
			  <button type="submit" class="btn btn-primary btn-block">Log In</button>
			</div>
			<br>

			<a href="<?= site_url('authller/register'); ?>">Create an account</a>
			</form>			
		</div>
	</div>
</div>


</body>
</html>