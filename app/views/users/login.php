<?php require APPROOT . '/views/inc/header.php'; ?>


<div class="row jumbotron">
	<div class="card">
		<div class="card_body">
			<h2>Login </h2>
			<p>Please Fill in youre credentials to login</p>
			<form action="<?php echo URLROOT ?>/users/login" method="POST">


				<div class="form-group <?php echo (!empty($data['email_err']) ? 'is-invalid' : '') ?>">
					<label for="email">Email: <sup>*</sup></label>
					<input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>"
					>
					<span class="invalid-feedback"><small class="text-danger"><?php echo $data['email_err'];?></small></span>
				</div>

				<div class="form-group <?php echo (!empty($data['password_err']) ? 'is-invalid' : '') ?>">
					<label for="password">Password: <sup>*</sup></label>
					<input type="password" name="password" class="form-control" value="<?php echo $data['password']; ?>"
					>
					<span class="invalid-feedback"><small class="text-danger"><?php echo $data['password_err'];?></small></span>
				</div>

				<div class="row">
					<div class="col-md-6">
						<input type="submit"  class="btn btn-success btn-block" name="submit" value="Login">
					</div>
					<div class="col-md-6">
						<a href="<?php echo URLROOT ?>/users/register" class="btn btn-primary btn-block ">Have an account ? Register </a>
					</div>
				</div>
			</form>
		</div>
	</div>
		
</div>




	
<?php require APPROOT . '/views/inc/footer.php'; ?>

