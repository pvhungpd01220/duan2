
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
             <div class="container">
             <div class="row">
            <div class="col-md-3">
              <div class="category leftbar">
                <h3 class="title">
                  Categories
                </h3>
                <ul>
                  <li>
                    <a href="#">
                      Đồng hồ Epos Swiss
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Đồng hồ Bruno Sohnle Glashutte
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Stuhrling Original Swiss
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Đồng hồ Epos Swiss
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Đồng hồ Bruno Sohnle Glashutte
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Stuhrling Original Swiss
                    </a>
                  </li>
                </ul>
              </div>
              <div class="clearfix">
              </div>
              <div class="branch leftbar">
                <h3 class="title">

Trademark
                </h3>
                <ul>
                  <li>
                    <a href="#">
                      ASUS
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      ROMA
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      TITAN
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      New Trend
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      USYYY
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      NHUEA
                    </a>
                  </li>
                </ul>
              </div>
              <div class="clearfix">
              </div>
              <div class="price-filter leftbar">
                <h3 class="title">
                  Price
                </h3>
                <form class="pricing">
                  <label>
                    $
                    <input type="number">
                  </label>
                  <span class="separate">
                    -
                  </span>
                  <label>
                    $
                    <input type="number">
                  </label>
                  <input type="submit" value="Go">
                </form>
              </div>
              <div class="clearfix">
              </div>
              <div class="clolr-filter leftbar">
                <h3 class="title">
                  Color
                </h3>
                <ul>
                  <li>
                    <a href="#" class="red-bg">
                      light red
                    </a>
                  </li>
                  <li>
                    <a href="#" class=" yellow-bg">
                      yellow"
                    </a>
                  </li>
                  <li>
                    <a href="#" class="black-bg ">
                      black
                    </a>
                  </li>
                  <li>
                    <a href="#" class="pink-bg">
                      pink
                    </a>
                  </li>
                  <li>
                    <a href="#" class="dkpink-bg">
                      dkpink
                    </a>
                  </li>
                  <li>
                    <a href="#" class="chocolate-bg">
                      chocolate
                    </a>
                  </li>
                  <li>
                    <a href="#" class="orange-bg">
                      orange-bg
                    </a>
                  </li>
                  <li>
                    <a href="#" class="off-white-bg">
                      off-white
                    </a>
                  </li>
                  <li>
                    <a href="#" class="extra-lightgreen-bg">
                      extra-lightgreen
                    </a>
                  </li>
                  <li>
                    <a href="#" class="lightgreen-bg">
                      lightgreen
                    </a>
                  </li>
                  <li>
                    <a href="#" class="biscuit-bg">
                      biscuit
                    </a>
                  </li>
                  <li>
                    <a href="#" class="chocolatelight-bg">
                      chocolatelight
                    </a>
                  </li>
                </ul>
              </div>
              <div class="clearfix">
              </div>

              <div class="clearfix">
              </div>
              <div class="others leftbar">
                <h3 class="title">
                  Others
                </h3>
              </div>
              <div class="clearfix">
              </div>
              <div class="others leftbar">
                <h3 class="title">
                  Others
                </h3>
              </div>
              <div class="clearfix">
              </div>
              <div class="fbl-box leftbar">
                <h3 class="title">
                  Facebook
                </h3>
                <span class="likebutton">
                  <a href="#">
                    <img src="images/fblike.png" alt="">
                  </a>
                </span>
                <p>
                  12k people like Flat Shop.
                </p>
                <ul>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                    </a>
                  </li>
                </ul>
                <div class="fbplug">
                  <a href="#">
                    <span>
                      <img src="images/fbicon.png" alt="">
                    </span>
                    Facebook social plugin
                  </a>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="leftbanner">
                <img src="images/banner-small-01.png" alt="">
              </div>
            </div>
            <div class="col-md-9">
              <div class="banner">
                <div class="bannerslide" id="bannerslide">
                  <ul class="slides">
                    <li>
                      <a href="#">
                        <img src="images/banner-01.jpg" alt=""/>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="images/banner-02.jpg" alt=""/>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div class="products-grid">
                <div class="toolbar">
                  <div class="sorter">
                    <div class="view-mode">
                      <a href="productlitst.html" class="list">
                        List
                      </a>
                      <a href="#" class="grid active">
                        Grid
                      </a>
                    </div>
                    <div class="sort-by">
                      Sort by :
                      <select name="" >
                        <option value="Default" selected>
                          Default
                        </option>
                        <option value="Name">
                          Name
                        </option>
                        <option value="Price">
                          Price
                        </option>
                      </select>
                    </div>
                    <div class="limiter">
                      Show :
                      <select name="" >
                        <option value="3" selected>
                          3
                        </option>
                        <option value="6">
                          6
                        </option>
                        <option value="9">
                          9
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="pager">
                    <a href="#" class="prev-page">
                      <i class="fa fa-angle-left">
                      </i>
                    </a>
                    <a href="#" class="active">
                      1
                    </a>
                    <a href="#">
                      2
                    </a>
                    <a href="#">
                      3
                    </a>
                    <a href="#" class="next-page">
                      <i class="fa fa-angle-right">
                      </i>
                    </a>
                  </div>
                </div>
             </div>
             <h1>Chúc mừng bạn đã đạt hàng thành công !!!</h1>
             <h1>Hãy đợi chúc tôi xác nhận đơn hàng nhé !!! (-_-)</h1>
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
                        <p> TP ĐÀ NẴNG</p>
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
                        <p>Copyright © 2012. Designed by <a href="#">PHẠM VĂN HÙNGư</a>. All rights reseved</p>
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