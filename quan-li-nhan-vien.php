<?php
  ob_start();
  session_start();

  if (isset($_POST["logout"])){
    unset($_SESSION['username']);
    unset($_SESSION['password']);

    header("Location: login.php");
  }
?>
<?php
	//Kết nối tới CSDL
	require('config.php');

	// nếu tồn tại hàm post add, tức là nếu người dùng bấm vào nút submit có name = add
	if (isset($_POST['add'])) {
		$name = $_POST['name'];
		$price = $_POST['price'];
		$image = $_FILES['imageURL']['name'];

		$kieudang= $_POST['kieudang'];
		$xuatxu= $_POST['xuatxu'];
		$chucnang= $_POST['chucnang']; 
		$baohanh= $_POST['baohanh'];

		$sql = "INSERT INTO product(name, price, imageURL, detail, kieudang, xuatxu, chucnang, baohanh) VALUES (:name, :price, :imageURL, :detail, :kieu-dang,:xuat-xu, :chuc-nang, :bao-hanh )";
		$sttm = $db->prepare($sql);
		$sttm->bindParam(':name', $name);
		$sttm->bindParam(':price', $price);
		$sttm->bindParam(':imageURL', $image);
		$sttm->bindParam(':kieudang', $kieudang);
		$sttm->bindParam(':xuatxu', $xuatxu);
		$sttm->bindParam(':chucnang', $chucnang);
		$sttm->bindParam(':baohanh', $baohanh);
 		$sttm->execute();

		//upload hình ảnh


		header("Location: quan-li-nhan-vien.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="images/favicon.png">
<title>Admin</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
<link href="css/sequence-looptheme.css" rel="stylesheet" media="all"/>
<link href="css/style.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
</head>
<body id="home">
<div class="wrapper">


   <style>
      table {
border-collapse: collapse;
}

table, th, td {
border: 1px solid black;
text-align: center;
}
img {
width: 200px;
}

  </style>
   <div class="clearfix"></div>


<body>
<section class="title" style=" background:#FF9900;height:90px">
<h2 style="padding-left: 30px; color:yellow; font-size: 26px; padding-top:30px;">Trang quản lý admin</h2>
<form method="post" style="  margin-top: -30px" >
<button class="glyphicon glyphicon-home" name="logout" style="background-color: #FFFF00;
 float: right;"><span style="padding-left:3px">Logout</span></button>
</form>
</section>
<section class="col-sm-3" style="background:#002200; height:800px;margin-top:-15px">
<p style="color:#00FF00; font-size:25px; padding-left:14px;padding-bottom:10px;padding-top:10px"><b>Phạm Văn Hùng</b></p>
<p style="color:#FF66CC; font-size:15px; padding-left:14px;padding-bottom:10px">Quản lý</p>
<ul class="sidebar-menu" class="col-sm-4" style="margin-left:10px">
  <li class="active" style=" height:50px"><a href="quanli.php" style="font-size:25px; color:Linen"><span>Bảng điều khiển</span></a></li>

  <li style=" height:50px"><a href="admin.php" style="font-size:25px; color:Linen;"><span>Sản phẩm</span></a></li>

  <li style=" height:50px"><a href="quan-li-don-hang.php" style="font-size:25px; color:Linen"><span>Đơn hàng</span></a></li>

  <li style=" height:50px"><a href="quan-li-nhan-vien.php" style="font-size:25px; color:Linen"><span>Nhân viên</span></a></li>
</ul>

</section>
<section class="col-sm-9">

    <a href="them-nhan-vien.php"><div class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Thêm nhân viên</div></a>


    <div class="clearfix"></div>
    <table class="col-sm-12" style="margin-top: 30px; background-color: white; width:100%;">
      <tr>
                                <td  style="color:red; font-size: 16px;width: 5%; height:40px; text-align:center;padding-top:10px; ">STT</td>
                                <td  style="color:red; font-size: 16px;width: 10%">Họ và tên</td>
                                <td style="color:red;font-size: 16px;width: 10%">Số điện thoại</td>
                                <td style="color:red;font-size: 16px;width: 10%">Email</td>
                                <td style="color:red;font-size: 16px;width: 30%" >Địa chỉ</td>
                                <td style="color:red;font-size: 16px;width: 12%">Hành động</td>

                        </tr>
                      <?php
                         require 'config.php';
                         $sql="SELECT * FROM nhanvien3";
                         $sttm=$db->prepare($sql);

                         // thực hiện câu lệnh sql
                         $sttm->execute();

                         //lấy tất cả kq từ bảng products
                         $result=$sttm->fetchAll();

                         foreach ($result as $value){
                      ?>
                        <tr>
                                <td style="color:#020202;padding-top:-200px"><?php echo $value['id'] ?></td>
                                <td style="color:#020202;"><?php echo $value['ho_ten'] ?></td>

                                <td style="color:#020202;">(084) <?php echo $value['sdt'] ?></td>
                                <td style="color:#020202;"><?php echo $value['email'] ?></td>
                                <td style="color:#020202;">(084) <?php echo $value['dia_chi'] ?></td>

                                <td style="color:#020202;"><a href="xoa-nhan-vien.php?id=<?=$value['id'] ?>">xóa</a><br><a href="update.php?id=<?=$value['id'] ?>">sửa</a></td>
      </tr>

                         <?php } ?>
                        </table>

</section>
</body>
</html>
