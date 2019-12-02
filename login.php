
<?php
  //kiểm tra ng dùng đã bấm vô nút submit chưa


$dangnhapsai = "";
// nếu ng dùng đã kích vào nút login thì thực hiện so sánh
if (isset($_POST['login'])) {
require 'config.php';
session_start();

  //lấy giá trị username và password từ form
  $username= $_POST['username'];
  $password= $_POST['password'];


  //lấy tất cả các tài khoản trong bảng member để so sánh với giá trị trong form

 $sql2="SELECT * FROM members WHERE username= :username && password= :password";
 $sttm2=$db->prepare($sql2);
 $sttm2->bindParam(':username', $username); 
  $sttm2->bindParam(':password', $password);
 // thực hiện câu lệnh sql
 $sttm2->execute();




 if ($sttm2->rowCount() == 1) {
   header("Location: quanli.php"); 
 }else{
   $dangnhapsai = "Tài khoản hoặc mật khẩu sai";
 }
}


?>

<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="images/favicon.png">
      <title>Robins-watch</title>
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
                              <li><a href="contact.php">contact us</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
    <section>
    <div class="container">
       <div class="form" style=" margin: auto; width:50%; height:300px;">
        <form method="POST">
            <h1 style="color: white;padding:10px; border-bottom: 1px solid #FFF">Login</h1>
            <input placeholder="Username" type="text" required="" name="username" style="margin-bottom: 20px;margin-left:200px; height:50px;"><br/>
            <input placeholder="Password" type="password" required="" name="password" style="margin-bottom: 20px;margin-left:200px; height:50px;"><br/>
        <button type="submit" name="login" style="margin-bottom: 20px;margin-left:200px; ">Login</button>
  <p style="color: red"><?= $dangnhapsai ?></p>
  </form>
        </div>
        <?php





?>
    </div>
    </section>
