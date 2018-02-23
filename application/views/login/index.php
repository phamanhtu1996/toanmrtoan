<?php
$user = array(
	'id' => 'user',
	'name' => 'username',
	'class' => 'form-control',
);
$pass = array(
	'id' => 'post',
	'name' => 'password',
	'class' => 'form-control'
);
$hidden = array(
	'type' => 'hidden',
	'id' => 'passeye-0'
);
$submit = array(
	'type' => 'submit',
	'class' => 'btn btn-primary btn-block',
	'content' => 'Login',
	'id' => 'login'
)
?>
<html>
<head>
	<link rel="stylesheet" href="<?=public_url()?>/member/bootstrap.min.css">
	<link rel="stylesheet" href="<?=public_url()?>/member/mycss.css">
</head>
<body class="my-login-page">
	<section class="h-100">
		<div class="container-fluid h-100">
			<div class="row justify-content-between h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="<?=public_url()?>/member/logo.jpg">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<?=form_open('login');?>
								<?=validation_errors()?>
								<div class="form-group">
									<label for="email">Username</label>
									<?=form_input($user)?>
<!--									<input id="email" type="email" class="form-control" name="email" value="" required="" autofocus="">-->
									<span><?=form_error('username')?></span>
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<div style="position:relative">
										<?=form_password($pass)?>
<!--										<input id="password" type="password" class="form-control" name="password" required="" data-eye="" style="padding-right: 60px;">-->
										<?=form_input($hidden);?>
<!--										<input type="hidden" id="passeye-0">-->
										<div class="btn btn-primary btn-sm mybtn" id="passeye-toggle-0">Show</div>
										<span><?=form_error('password')?></span>
									</div>
								</div>
<!--								<div class="form-group">-->
<!--									<label>-->
<!--										<input type="checkbox" name="remember"> Remember Me-->
<!--									</label>-->
<!--								</div>-->
								<div class="form-group no-margin">
									<?=form_button($submit)?>
<!--									<button type="submit" class="btn btn-primary btn-block">-->
<!--										Login-->
<!--									</button>-->
								</div>
							<?=form_close()?>
						</div>
					</div>
					<div class="footer">
						Copyright © 2017 — Your Company
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
