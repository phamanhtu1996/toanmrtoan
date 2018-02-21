<?php
$user = array(
	'name' => 'username',
	'size' => 25,
	'class' => 'form-control',
	'placeholder' => 'Ten dang nhap'
);
$pass = array(
	'name' => 'password',
	'size' => 16,
	'class' => 'form-control',
	'placeholder' => 'Mat khau'
);
$email = array(
	'name' => 'email',
	'size' => 255,
	'class' => 'form-control',
	'placeholder' => 'example@gmail.com'
);
$add = array(
	'name' => 'address',
	'size' => 1000,
	'class' => 'form_control',
	'placeholder' => 'Apartment, studio, or floor'
);
$province = array(
	'name' => 'province',
	'size' => 50,
	'class' => 'form_control',
	'options' => $options
)
?>

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="purple">
						<h4 class="title">Member List</h4>
						<p class="category">Here is a subtitle for this table</p>
					</div>
					<div class="card-content">
						<?=validation_errors();?>
						<?=form_open('form');?>
							<div class="form-group row">
								<div class="form-group col-md-6">
									<label for="inputEmail4">Username</label>
									<?=form_input($user)?>
								</div>
								<div class="form-group col-md-6">
									<label for="inputPassword4">Password</label>
									<?=form_password($pass)?>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-12">
								<label for="inputAddress">Email</label>
								<?=form_input($email)?>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-md-12">
								<label for="inputAddress2">Address</label>
								<?=form_input($add)?>
								</div>
							</div>
							<div class="form-group row">
								<div class="form-group col-md-6">
									<label for="inputCity">City</label>
									<?=form_dropdown()?>
								</div>
								<div class="form-group col-md-4">
									<label for="inputState">State</label>
									<select id="inputState" class="form-control">
										<option selected>Choose...</option>
										<option>...</option>
									</select>
								</div>
								<div class="form-group col-md-2">
									<label for="inputZip">Zip</label>
									<input type="text" class="form-control" id="inputZip">
								</div>
							</div>
							<div class="form-group row">
								<div class="form-check col-md-4">
									<input class="form-check-input" type="checkbox" id="gridCheck">
									<label class="form-check-label" for="gridCheck">
										Check me out
									</label>
								</div>
							</div>
							<div class="row justify-content-around">
								<div class="col-md-4">
								<button type="submit" class="btn btn-primary">Sign in</button>
								</div>
							</div>
						<?=form_close()?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
