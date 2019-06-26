<?php require APPROOT . '/views/inc/header.php'; ?>


	<a href="<?php echo URLROOT?>/posts/" class="btn btn-default"> Back to Home</a>
	<div class="card">
		<div class="card_body">
			<h2>Add Post </h2>
			<p>Create a Post with this form</p>
			<form action="<?php echo URLROOT ?>/posts/add" method="POST">

				<div class="form-group <?php echo (!empty($data['title_err']) ? 'is-invalid' : '') ?>">
					<label for="title">Title: <sup>*</sup></label>
					<input type="text" name="title" class="form-control" value="<?php echo $data['title']; ?>"
					>
					<span class="invalid-feedback"><small class="text-danger"><?php echo $data['title_err'];?></small></span>
				</div>

				<div class="form-group <?php echo (!empty($data['body_err']) ? 'is-invalid' : '') ?>">
					<label for="body">Body: <sup>*</sup></label>
					<textarea  name="body" class="form-control"><?php echo $data['body']; ?></textarea>
					<span class="invalid-feedback"><small class="text-danger"><?php echo $data['body_err']; ?></small></span>
				</div>
				<input type="submit" value="Submit" class="btn btn-success" name="submit">

			</form>
		</div>
	</div>
		




	
<?php require APPROOT . '/views/inc/footer.php'; ?>

