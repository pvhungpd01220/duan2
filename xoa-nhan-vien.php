<?php
	$id = $_GET['id'];

	//$id = 2

	require 'config.php';
    $sql="DELETE FROM nhanvien3 WHERE id = :id";
    $sttm = $db->prepare($sql);
    $sttm->bindParam(':id', $id); //(':id', $id) :id = $id

    //thực hiện câu lệnh
    $sttm->execute();

    // hàm chuyển trang
    header("Location: quan-li-nhan-vien.php"); 
?>
 