<?php 
	session_start();

	$soluongmoi = $_POST['soluongmoi'];
	$id = $_POST['id'];

	$_SESSION['giohang'][$id] = $soluongmoi;
?>  