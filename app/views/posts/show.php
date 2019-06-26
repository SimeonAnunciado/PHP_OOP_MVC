<?php require APPROOT . '/views/inc/header.php'; ?>


	<a href="<?php echo URLROOT?>/posts/" class="btn btn-default"> Back to Home</a>

	<p><?php echo $data['post']->title; ?></p>
	<p>Written By : <?php echo $data['user']->name; ?> On <?php echo $data['post']->created_at; ?></p>
	<p><?php echo $data['post']->body; ?></p>

	<?php if($data['post']->user_id === $_SESSION['user_id']) : ?>
		<hr>
		<a href="<?php echo URLROOT ?>/posts/edit/ " class="btn btn-default" >Edit</a>


		<form action="<?php echo URLROOT?>/posts/delete" method="POST" class="pull-right">
			<input type="submit" value="Delete" class="btn btn-danger">
		</form>



	<?php endif ?>


<?php require APPROOT . '/views/inc/footer.php'; ?>

