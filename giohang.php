
<?php
    require 'config.php';
    session_start();

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        if(isset($_SESSION['giohang'][$id])){
          $soluong = $_SESSION['giohang'][$id];
        }else{
          $soluong=1;
        }
        
        

        $_SESSION['giohang'][$id]=$soluong;
    }else{
                
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
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js
"></script>
<script type="text/javascript" src="js/cart.js"></script>
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
                              <a href="giohang.php" class="cart-icon">cart <span class="cart_no"></span></a>
                            </li>
                        </ul>
                        <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                        <div class="navbar-collapse collapse">
                           <ul class="nav navbar-nav">
                              <li class="active dropdown"><a href="index.php" >Home</a></li>
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
           <div class="container_fullwidth">
              <div class="container shopping-cart">
               <div class="row">
               <div class="col-md-12">
               <h3 class="title" style="color: #ea1079">
                <b>Giỏ hàng của bạn</b>
               </h3>
              <div class="clearfix">
              </div>
              <table class="table">
                        <tr>
                                
                                <td style="color:red; font-size: 16px;">Tên sản phẩm</td>
                                <td style="color:red;font-size: 16px;">Hình ảnh</td>
                                <td style="color:red;font-size: 16px;">Số lượng</td>
                                <td style="color:red;font-size: 16px;"> Giá sản phẩm</td>
                                <td style="color:red;font-size: 16px;">Hành động</td>

                        </tr>
                        <tbody>

                            <?php
                                foreach ($_SESSION['giohang'] as $id => $soluong) {
                                $sql="SELECT * FROM product WHERE pro_id=:id";
                                $sttm=$db->prepare($sql);
                                $sttm->bindParam(':id', $id);
                                $sttm->execute();
                                $result=$sttm->fetch();
                            
                            ?>
                            <tr>
                            <td>
                                 <div class="productname"><?= $result['name'] ?></div>
                            </td>
                            <td>
                                 <img src="image/home/sanpham/<?= $result['imageURL'] ?>" alt="" style="width:70px;">
                            </td>
                            <td>
                                 <select class="soluong" data-id="<?= $id ?>">
                                      <?php 
                                        for($i=1;$i<= 100; $i++){
                                          if ($i == $soluong) {
                                      ?>
                                      <option selected value="<?= $i ?>"><?= $i ?></option>

                                      <?php }else{ ?>
                                      <option value="<?= $i ?>"><?= $i ?></option>

                                      <?php }} ?>>
                                    
                                 </select>
                            </td>
                            <td>
                                 <h5><?= number_format($result['price'] * $soluong )?> .VND</h5>
                            </td>
                            <td>
                                 <a href="xoagiohang.php?id=<?= $result['pro_id'] ?>"><i class="fa fa-close">Xóa</i></a>
                            </td>
                            </tr>
                             <?php } ?>
                        </tbody>
                        <tr>
                        <td colspan="12">
                             <a href="productgird.php"><input type="button" class="btn btn-primary" value="Tiếp tục mua hàng"></a>
                             <a href="thanhtoan.php"><input type="submit" class="btn btn-success" value="Thanh toán" name="" style="float: right"></a>
                    </td>
                </tr>

              </table>
            </div>
            </div>
            </div>
<div class="clearfix"></div>
<div class="footer">
            <div class="footer-info">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="footer-logo"><a href="#"><img src="image/home/logo_zps36816f3e_large.png" alt="" style="height: 150px; margin-top:-50px"></a></div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <h4 class="title">Contact <strong>Info</strong></h4>
                        <p>
                         TP ĐÀ NẴNG</p>
                        <p>Call Us : (084) 0905667090</p>
                        <p>Email :hungpvpd01220@fpt.edu.vn</p>
                     </div>
                     <div class="col-md-3 col-sm-6">
                        <h4 class="title">Customer<strong> Support</strong></h4>
                        <ul class="support">
                           <li><a href="#">FAQ</a></li>
                           <li><a href="#">Payment Option</a></li>
                           <li><a href="#">Booking Tips</a></li>
                           <li><a href="#">Infomation</a></li>
                        </ul>
                     </div>
                     <div class="col-md-3">
                        <h4 class="title">Get Our <strong>Newsletter </strong></h4>
                        <p>Lorem ipsum dolor ipsum dolor.</p>
                        <form class="newsletter">
                            <input type="text" name="" placeholder="Type your email....">
                            <input type="submit" value="SignUp" class="button">
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright-info">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <p>Copyright © 2012. Designed by <a href="#">PHẠM VĂN HÙNG</a>. All rights reseved</p>
                     </div>
                     <div class="col-md-6">
                        <ul class="social-icon">
                           <li><a href="#" class="linkedin"></a></li>
                           <li><a href="#" class="google-plus"></a></li>
                           <li><a href="#" class="twitter"></a></li>
                           <li><a href="#" class="facebook"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript==================================================-->
      
      
   </body>
</html>