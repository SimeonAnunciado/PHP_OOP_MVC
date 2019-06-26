<?php require APPROOT . '/views/inc/header.php'; ?>


<div class="jumbotron jumbotron-fluid ">
	<div class="container">
		<h3><?php echo $data['title']; ?></h3>
		<p><?php echo $data['description']; ?></p>


		<?php 
		foreach($_SESSION as $session ){
			echo $session . '<br>';
		}

		?>
	</div>	
</div>




	
<?php require APPROOT . '/views/inc/footer.php'; ?>

