<?php 
	$id_don_hang = $_GET['id_don_hang']; 

	//$id = 2

	require 'config.php';
    $sql="DELETE FROM don_hang WHERE id_don_hang = :id_don_hang";
    $sttm = $db->prepare($sql);
    $sttm->bindParam(':id_don_hang', $id_don_hang); //(':id', $id) :id = $id

    //thực hiện câu lệnh
    $sttm->execute();

    // hàm chuyển trang
    header("Location: quan-li-don-hang.php");
?>  