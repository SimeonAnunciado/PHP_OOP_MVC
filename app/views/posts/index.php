<?php require APPROOT . '/views/inc/header.php'; ?>

	<?php flash('post_message'); ?>



<div class="row">
	<div class="col-md-6">
		<h1 style="margin: 0;">Posts</h1>
	</div>
	<div class="col-md-6">
		<a href="<?php echo URLROOT ?>/posts/add" class="btn btn-primary pull-right">
			<span class="glyphicon glyphicon-pencil"></span> Add Posts
			
		</a>
	</div>

	

</div>

	<br><br>
	
		<?php foreach ($data['posts'] as $post) :?>
			<div class="well well-sm">
				
				<p class=""> <?php echo $post->title; ?></p>
				<p class=""> <?php echo $post->body; ?></p>
				<p class=""><strong>Written by </strong><?php echo $post->name; ?> On  <?php echo Date_formater($post->postCreated);  ?></p>
				<a href="<?php echo URLROOT ?>/posts/show/<?php echo $post->postId ?>" class="btn btn-sm btn-primary btn-block">More</a>
			</div>
			<br>
		<?php endforeach ?>



<?php require APPROOT . '/views/inc/footer.php'; ?>