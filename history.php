<?php require 'system/config.php'; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $setting['title']; ?> &mdash; <?php echo $setting['subtitle']; ?></title>
	<?php include 'template/meta_head.php'; ?>
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<?php include 'template/header.php'; ?>

		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Riwayat Pembelian Tiket</h3>
					</div>
				</div>
				<div class="row">
					
					<div class="col-md-12 animate-box">
						<div class="table">
							<table class="table">
								<tr class="text-center">
									<th>No</th>
									<th>Destinasi Wisata</th>
									<th>Kota</th>
									<th>Tgl Order</th>
									<th>Aksi</th>
								</tr>
								<?php 
									$i=1;
									while ($i <=10) {
								 ?>
								<tr>
									<td><?php echo $i; ?></td>
									<td>Paket Trip Jogja</td>
									<td>Yogyakarta</td>
									<td>27/19/2019</td>
									<td>
										<a href="" class="btn btn-sm btn-primary">Bayar</a>
										<a href="" class="btn btn-sm btn-danger">Hapus Pesanan</a>
									</td>
								</tr>
							<?php $i++;} ?>
							</table>
						</div>
					</div>
				</div>
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
