<!-- Header -->
<?php $page_title = "من نحن" ?>
<?php include './assets/header.php' ?>
<?php include './assets/parts/slider.php' ?>


<div class="container">
	<div id="contact" class="cf">
		<h1>تواصل معنا</h1>
		<div class="form">
			<form>
				<div class="inputs-warpper">
					<label for="name">الإسم بالكامل:</label>
					<input type="text" id="name" placeholder="الإسم" required>
				</div>
				<div class="inputs-warpper">
					<label for="email">البريد الإلكتروني:</label>
					<input type="email" id="email" placeholder="البريد الإلكتروني" required>
				</div>
				<div class="inputs-warpper">
					<label for="subject">الموضوع:</label>
					<input type="text" id="subject" placeholder="الموضوع" required>
				</div>
				<div class="inputs-warpper">
					<label for="message">الرسالة:</label>
					<textarea id="message" cols="30" rows="10" placeholder="الرسالة" required></textarea>
				</div>
				<button type="submit">إرسال <i class="fa fa-paper-plane"></i></button>
			</form>
		</div><!--/form-->
		<div class="details">
			<span class="heading"><i class="fa fa-phone-square"></i> أرقام الهاتف:</span>
			<ul>
				<li>010000000</li>
				<li>010000000</li>
				<li>010000000</li>
			</ul>
			<span class="heading"><i class="fa fa-map-marker"></i> عنوان:</span>
			<ul>
				<li>12 التحرير - القاهرة - مصر</li>
			</ul>
		</div>
	</div><!--/#contact-->
</div><!--/container-->



<!-- Footer -->
<?php include './assets/footer.php' ?>