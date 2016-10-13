<!-- Header -->
<?php $page_title = "أضف برنماج" ?>
<?php include './assets/header.php' ?>

<div class="container">
	<div id="addProgrameForm" class="cf">
		<h1>أضف برنامج</h1>
		<div class="form">
			<form>
				<div class="inputs-warpper">
					<label for="name">أسم القناة:</label>
					<input type="text" id="name" placeholder="الإسم" required>
				</div>
				<div class="inputs-warpper">
					<label for="email">اسم البرنامج:</label>
					<input type="email" id="email" placeholder="اسم البرنامج" required>
				</div>
				<div class="inputs-warpper">
					<label for="subject">أسم المقدم:</label>
					<input type="text" id="subject" placeholder="أسم المقدم" required>
				</div>
				<div class="inputs-warpper">
					<label for="subject">أسم المقدم:</label>
					<input type="text" id="subject" placeholder="أسم المقدم" required>
				</div>
				<button type="submit">حفظ <i class="fa fa-paper-plane"></i></button>
			</form>
		</div><!--/form-->
		<div class="table">
		<h1>جميع البرامج</h1>
			<ul>
				<li class="table-head">
					<span class="programe-name">أسم البرنامج</span>
					<span class="programe-remove"></span>
				</li>
				<?php for ($i=0; $i < 10; $i++) { ?>
					<li class="table-row">
						<span class="programe-name">عشرة علي عشرة</span>
						<span class="programe-remove">
							<button><i class="fa fa-trash-o"></i></button>
						</span>
					</li>
				<?php } ?>
				
			</ul>
		</div>
	</div><!--/#contact-->
</div><!--/container-->



<!-- Footer -->
<?php include './assets/footer.php' ?>