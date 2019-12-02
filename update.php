<?php 
	require 'config.php';
	$id = $_GET['id'];
	$sql="SELECT * FROM product WHERE pro_id = :id";
	$sttm=$db->prepare($sql);
    $sttm->bindParam(':id',$id);                     
	$sttm->execute();

	$result=$sttm->fetch();
?>
<?php 
	if (isset($_POST['update'])) {
		$name = $_POST['name'];
		$price = $_POST['price'];
		$image = $_FILES['imageURL']['name'];
		$detail = $_POST['detail'];

		$sql = "UPDATE product SET name = :name, price = :price, imageURL = :imageURL, detail = :detail WHERE pro_id = :id";
		$sttm = $db->prepare($sql);

		$sttm->bindParam(':id', $id);
		$sttm->bindParam(':name', $name);
		$sttm->bindParam(':price', $price);
		$sttm->bindParam(':imageURL', $image);
		$sttm->bindParam(':detail', $detail);
 
		$sttm->execute();

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
                              <ul class="option-cart-item">
                                 <li>
                                    
                                 <button>CheckOut</button></li>
                              </ul>
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
	<section class="title" style="text-align: center">
            <h2 style="color: #ac2925; font-size: 20px;padding-top: 20px;">CẬP NHẬT SẢN PHẨM</h2>
	</section>
	<section class="col-sm-8" style="margin-left: 400px">
		<form action="" method="POST" enctype="multipart/form-data">
			<input type="hidden" value="update_process" name="action">
			<input type="hidden" value="<?php echo $set['news_id'] ?>" name="news_id">
			<table class="table table-hover" style="width: 600px">
				
				<tr>
					<td width="100" style="color:#020202; ">Tên sản phẩm</td>
					<td width="500"><input type="text" name="name" class="form-control" value="<?php echo $result['name'] ?>"></td>
				</tr>
                                <tr>
					<td style="color:#020202">Giá sản phẩm</td>
					<td width="500"><input type="text" name="price" class="form-control" value="<?php echo $result['price'] ?>"></td>
				</tr>
				<tr>
					<td style="color:#020202">Hình ảnh</td>
					<td><input type="file" name="imageURL"></td>
				
				<tr>
					<td style="color:#020202">Chi tiết sản phẩm</td>
					<td><textarea name="detail" class="form-control"><?php echo $result['detail'] ?></textarea></td>
				</tr>
				<tr>
					<td colspan="2">
						<a href="admin.php"><input type="button" class="btn btn-primary" value="Trở lại"></a>
						<input type="submit" class="btn btn-success" value="Cập nhật" name="update">
					</td>
				</tr>
			</table>
		</form>
	</section>
</body>
</html>

 