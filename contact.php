<?php require 'system/config.php'; ?>
<?php 
	if (isset($_POST['contact'])) {
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$contactUs = $app->contactUs($fullname, $email, $message);
		if ($contactUs == 1) {
			echo "<script>alert('Berhasil menghubungi kami. Silahkan tunggu pembalasan email dari kami')</script>";
		}else{
			echo "<script>alert('Error!')</script>";

		}
	}
 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $setting['title']; ?> &mdash; Kontak Kami</title>
	<?php include 'template/meta_head.php'; ?>
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<?php include 'template/header.php'; ?>

		<!-- end:header-top -->
	
		
		<div id="fh5co-contact" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Kontak Kami</h3>
						<p>Hubungi kami melalui Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
					</div>
				</div>
				<form action="" method="POST">
					<div class="row animate-box">
						<div class="col-md-6">
							<h3 class="section-title">Alamat Kami</h3>
							<p>Anda bisa mencari kami Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
							<ul class="contact-info">
								<li><i class="icon-location-pin"></i>Blater, Kalimanah, Purbalingga</li>
								<li><i class="icon-phone2"></i>+ 628191-4928-029</li>
								<li><i class="icon-mail"></i><a href="#">info@<?php echo strtolower($setting['title']); ?>.com</a></li>
								<li><i class="icon-globe2"></i><a href="#">www.<?php echo strtolower($setting['title']); ?>.com</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="fullname" class="form-control" placeholder="Nama Lengkap" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" name="email" class="form-control" placeholder="Email Aktif" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" name="contact" value="Send Message" class="btn btn-primary">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
		<?php include 'template/footer.php'; ?>
	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<?php include 'template/meta_footer.php'; ?>

	</body>
</html>

