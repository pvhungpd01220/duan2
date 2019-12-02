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

		$sql = "INSERT INTO product(name, price, imageURL, kieudang, xuatxu, chucnang, baohanh) VALUES (:name, :price, :imageURL, :kieudang,:xuatxu, :chucnang, :baohanh )";
		$sttm = $db->prepare($sql);
		$sttm->bindParam(':name', $name);
		$sttm->bindParam(':price', $price);
		$sttm->bindParam(':imageURL', $image);
		$sttm->bindParam(':kieudang', $kieudang); 
		$sttm->bindParam(':xuatxu', $xuatxu);
		$sttm->bindParam(':chucnang', $chucnang);
		$sttm->bindParam(':baohanh', $baohanh);
 
      /*var_dump($name);
      var_dump($price);
      var_dump($image);
      var_dump($kieudang);
      var_dump($xuatxu);
      var_dump($chucnang);
      var_dump($baohanh);
      exit();*/

 		$sttm->execute();

		//upload hình ảnh
		move_uploaded_file($_FILES["imageURL"]["tmp_name"], "images/".$image);

		header("Location: admin.php");
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
   <style type="text/css">
   	tr:hover{
   		background-color: none;
   	}
   </style>
   <body id="home">
      <div class="wrapper">
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-2 col-sm-2">
                     <div class="logo"><a href="index.php"><img src="image/home/logo_zps36816f3e_large.png" alt="FlatShop" style="height:80px;"></a></div>
                  </div>
                  <div class="col-md-10 col-sm-10">


                           <div class="col-md-3" style="float: right;">
                              <ul class="usermenu">
                                 <li><a href="login.php" class="log">Login</a></li>

                              </ul>
                           </div>
                           <div class="col-md-12" style="float:left" >
                                <ul class="social-icon">
                           <li><a href="#" class="linkedin"></a></li>
                           <li><a href="#" class="google-plus"></a></li>
                           <li><a href="#" class="twitter"></a></li>
                           <li><a href="#" class="facebook"></a></li>
                                </ul>
                           </div>
                        </div>
                     </div>
                     <div class="clearfix"></div>
                     <div class="header_bottom">
                        <ul class="option">
                           <li id="search" class="search">
                              <form><input class="search-submit" type="submit" value=""><input class="search-input" placeholder="Enter your search term..." type="text" value="" name="search"></form>
                           </li>
                           <li class="option-cart">
                              <a href="#" class="cart-icon">cart <span class="cart_no"></span></a>
                           </li>
                        </ul>
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                           <ul class="nav navbar-nav">
                              <li class="active dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a></li>
                              <li><a href="productgird.php">Product</a></li>
                              <li><a href="productgird.php">Thương hiệu</a></li>
                              <li><a href="productgird.php">Phụ kiện đồng hồ</a></li>
                              <li><a href="productgird.php">About</a></li>
                              <li><a href="contact.html">contact us</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
<body>
	<section class="title" style="text-align: center; margin:auto">
            <h2 style="color: #ac2925; font-size: 26px;padding-top: 20px;">THÊM SẢN PHẨM</h2>
	</section>
	<section class="col-sm-8" style="margin-left: 400px">
		<form action="" method="POST" enctype="multipart/form-data" >
			<input type="hidden" value="update_process" name="action">
			<input type="hidden" value="<?php echo $set['news_id'] ?>" name="news_id">
			<table class="table table-hover" style="width: 600px">

				<tr>
					<td width="100" style="color:#020202">Tên sản phẩm:</td>
					<td width="500" ><input type="text" name="name" class="form-control" value=""></td>
				</tr>
        <tr>
					<td style="color:#020202">Giá sản phẩm:</td>
					<td width="500"><input type="text" name="price" class="form-control" value=""></td>
				</tr>
				<tr>
					<td style="color:#020202">Hình ảnh:</td>
					<td><input type="file" name="imageURL"></td>

				<tr>
					<td style="color:#020202">Kiểu dáng:</td>
					<td><input type="text" name="kieudang" class="form-control"></input></td>
				</tr>
				<tr>
					<td style="color:#020202">Chức năng:</td>
					<td><input type="text" name="chucnang" class="form-control"></input></td>
				</tr>
				<tr>
					<td style="color:#020202">Xuất xứ:</td>
					<td><input type="text" name="xuatxu" class="form-control"></input></td>
				</tr>
				<tr>
					<td style="color:#020202">Bảo hành:</td>
					<td><input type="text" name="baohanh" class="form-control"></input></td>
				</tr>
				<tr>
					<td colspan="2">
						<a href="admin.php"><input type="button" class="btn btn-primary" value="Trở lại"></a>
						<input type="submit" class="btn btn-success" value="Thêm" name="add">
					</td>
				</tr>
			</table>
		</form>
	</section>
</body>
</html>
