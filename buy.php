<?php 
	require 'system/config.php';
	// 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$jumlah = @$_GET['jumlah'] ? $_GET['jumlah'] : 1;
		$cond = @$_GET['page']?$_GET['page']: "plus";
		if ($id=="") {
			header("location:destinasi.php");
		}else{
			$buy = $app->addCart($id, $jumlah, $cond);
		}
	}
	print_r($_SESSION['cart']);
	header("location:cart.php");
 ?>