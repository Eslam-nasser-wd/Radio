<!-- Header -->
<?php $page_title = "البرامج" ?>
<?php include './assets/header.php' ?>

<!-- Programmes -->
<div class="top-player cf">
	<div class="container">
		<?php include 'assets/parts/player.php' ?>
	</div>
	<audio id="music" style="display: none">
		<source src="assets/audio/1.MP3" type="audio/mpeg" />
	</audio>
</div>

<!-- bread crumbs -->
<div class="bread-crumbs">
	<div class="container">
		<ul>
			<li><a href="#">الرئيسية</a></li>
			<i class="fa fa-angle-left"></i>
			<li>البرامج</li>
		</ul>
	</div>
</div>

<!-- Actions bar -->
<div class="actions-bar">
	<div class="container">
		<ul class="filters">
			<li class="single-filter">
				<label for="newer">الترتيب</label>
				<select id="newer">
					<option value="">الأحدث</option>
					<option value="">الأقدم</option>
				</select>
			</li><!--/single-filter-->
			<li class="single-filter">
				<label for="counter">العدد</label>
				<select id="counter">
					<option>10</option>
					<option>15</option>
					<option>20</option>
					<option>25</option>
				</select>
			</li><!--/single-filter-->
			<li class="single-filter">
				<label for="toggler">طريقة العرض</label>
				<div class="toggle-views">
					<div class="single-toggler rows">
						<i class="fa fa-th-list"></i>
					</div>
					<div class="single-toggler grid active">
						<i class="fa fa-th"></i>
					</div>
				</div>
			</li><!--/single-filter-->
		</ul>
		<ul class="indicators">
			<li>
				<i class="fa fa-pencil-square"></i>
				تمت المشاهدة مؤخرا
			</li>
			<li>
				<i class="fa fa-clock-o"></i>
				أخر الإضافات
			</li>
		</ul>
	</div>
</div>
<div class="cf"></div>
<div class="container">
	<div id="cardsWarpper" class="cf">
		<div class="left-side">
		<?php for ($i=1; $i < 10; $i++) { ?>
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
		</div><!--/left-side-->
		<div class="right-side">
			<h1>قائمة البرامج</h1>
			<ul class="programes-list">
				<a href="#">
					<li>
						<i class="fa fa-play-circle"></i>
						عشره علي عشره
					</li>
				</a>
				<a href="#" class="active">
					<li>
						<i class="fa fa-play-circle"></i>
						عشره علي عشره
					</li>
				</a>
				<a href="#">
					<li>
						<i class="fa fa-play-circle"></i>
						عشره علي عشره
					</li>
				</a>
				<a href="#">
					<li>
						<i class="fa fa-play-circle"></i>
						عشره علي عشره
					</li>
				</a>
				<a href="#">
					<li>
						<i class="fa fa-play-circle"></i>
						عشره علي عشره
					</li>
				</a>
				<a href="#">
					<li>
						<i class="fa fa-play-circle"></i>
						عشره علي عشره
					</li>
				</a>
			</ul>
			<div class="ads">
				إعلان
			</div>
			<div class="update">
				<div class="update-programs">
					حدث البرامج
					<i class="fa fa-angle-left"></i>
				</div>
			</div>
		</div>
	</div><!--/cardswarpper-->
</div><!--/container-->


<!-- Footer -->
<?php include './assets/footer.php' ?>