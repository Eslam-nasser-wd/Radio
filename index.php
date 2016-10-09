<!-- Header -->
<?php $page_title = "Home" ?>
<?php include './assets/header.php' ?>
<?php include './assets/parts/slider.php' ?>


<div class="container">
	<div id="index">
		<div class="top-player cf">
			<?php include 'assets/parts/player.php' ?>
			<audio id="music" style="display: none">
				<source src="assets/audio/1.MP3" type="audio/mpeg" />
			</audio>
		</div><!--/top-player-->
		<div class="songs-list">
			<ul>
				<li>
					<span class="indicator"></span>
					<span class="name">إذاعة الشباب برنامج عشرة علي عشرة</span>
					<span class="lenght">25:00</span>
					<span class="heart"><i class="fa fa-heart"></i></span>
					<span class="share"><i class="fa fa-share"></i></span>
					<span class="play"><i class="fa fa-play"></i></span>
				</li>
				<li>
					<span class="indicator"></span>
					<span class="name">إذاعة الشباب برنامج عشرة علي عشرة</span>
					<span class="lenght">25:00</span>
					<span class="heart"><i class="fa fa-heart"></i></span>
					<span class="share"><i class="fa fa-share"></i></span>
					<span class="play"><i class="fa fa-play"></i></span>
				</li>
				<li>
					<span class="indicator"></span>
					<span class="name">إذاعة الشباب برنامج عشرة علي عشرة</span>
					<span class="lenght">25:00</span>
					<span class="heart"><i class="fa fa-heart"></i></span>
					<span class="share"><i class="fa fa-share"></i></span>
					<span class="play"><i class="fa fa-play"></i></span>
				</li>
			</ul>
			<div class="show-all">
				<div class="all-programs">
					مشاهدة المزيد
					<i class="fa fa-angle-left"></i>
				</div>
			</div>
		</div>
	</div><!--/#index-->
	<div class="all-programmes">
		<span class="label">
			مشاهدة كل البرامج
		</span>
		<br>
		<h2>برنامج راديو تستيشن</h2>
		<div class="cf"></div>
		<?php for ($i=1; $i < 4; $i++) { ?>
			<div class="single-card">
				<div class="image">
					<img src="assets/img/thumps/<?php echo $i ?>.png" alt="">
				</div><!--/image-->
				<div class="heading">
					<h3>عشره علي عشره</h3>
					<p>مع هيثم آمين</p>
				</div><!--heading-->
				<div class="details-btn">
					<a href="#">التفاصيل</a>
				</div><!--/details-btn-->
			</div><!--/single-card-->
		<?php } ?>
		<div class="cf"></div>
	</div>
</div>



<!-- Footer -->
<?php include './assets/footer.php' ?>