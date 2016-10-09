<!-- Header -->
<?php $page_title = "من نحن" ?>
<?php include './assets/header.php' ?>
<?php include './assets/parts/slider.php' ?>

<div class="container">
	<div id="about" class="cf">
		<h1>راديو إستيشن</h1>
		<div class="services">
			<?php for ($i=1; $i < 5; $i++) { ?>
				<div class="single-service">
					<img src="assets/img/icons/<?php echo $i ?>.svg" alt="">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus a molestias deserunt, earum distinctio.
					</p>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<!-- Footer -->
<?php include './assets/footer.php' ?>