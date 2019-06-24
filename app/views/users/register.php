<?php require APPROOT . '/views/inc/header.php'; ?>


<div class="row jumbotron">
	<div class="card">
		<div class="card_body">
			<h2>Create An Acoount</h2>
			<p>Please Fill out this form to register with us</p>
			<form action="<?php echo URLROOT; ?>/users/register" method="POST">
				<div class="form-group <?php echo (!empty($data['name_err']) ? 'has-error has-feedback' : '') ?>">
					<label for="name">Name: <sup>*</sup></label>
					<input type="text" name="name" class="form-control " value="<?php echo $data['name']; ?>"
					>
					<span class="invalid-feedback"><small class="text-danger">	<?php echo $data['name_err'];?> </small></span>
				</div>

				<div class="form-group <?php echo (!empty($data['email_err']) ? 'has-error has-feedback' : '') ?>">
					<label for="email">Email: <sup>*</sup></label>
					<input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>"
					>
					<span class="invalid-feedback"><small class="text-danger"><?php echo $data['email_err'];?></small></span>
				</div>

				<div class="form-group <?php echo (!empty($data['password_err']) ? 'has-error has-feedback' : '') ?>">
					<label for="password">Password: <sup>*</sup></label>
					<input type="password" name="password" class="form-control" value="<?php echo $data['password']; ?>"
					>
					<span class="invalid-feedback"><small class="text-danger"><?php echo $data['password_err'];?></small></span>
				</div>

				<div class="form-group <?php echo (!empty($data['confirm_password_err']) ? 'has-error has-feedback' : '') ?>">
					<label for="confirm_password">Confirm Password: <sup>*</sup></label>
					<input type="password" name="confirm_password" class="form-control" value="<?php echo $data['confirm_password']; ?>"
					>
					<span class="invalid-feedback"><small class="text-danger"><?php echo $data['confirm_password_err'];?></small></span>
				</div>
				<div class="row">
					<div class="col-md-6">
						<input type="submit" class="btn btn-success btn-block" name="submit" value="Register">
					</div>
					<div class="col-md-6">
						<a href="<?php echo URLROOT ?>/users/login" class="btn btn-primary btn-block ">Have an account ? Login </a>
					</div>
				</div>
			</form>
		</div>
	</div>
		
</div>

<!--  <div class="form-group has-error has-feedback">
      <label class="col-sm-2 control-label" for="inputError">Input with error and glyphicon</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputError">
        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
      </div>
    </div> -->



	
<?php require APPROOT . '/views/inc/footer.php'; ?>

