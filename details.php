<?php
    require 'config.php';


?>

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
                                 <li><a href="checkout.html" class="log">Login</a></li>

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
                              <li class="active dropdown"><a href="index.php" >Home</a></li>
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
        <div class="page-index">
          <div class="container">
            <p>
              Home - Products Details
            </p>
          </div>
        </div>
      </div>
      <div class="clearfix">
      </div>
      <div class="container_fullwidth">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
            <?php
                                if(isset($_GET['id'])){
                                $id=$_GET['id'];

                                $sql="SELECT * FROM product WHERE pro_id=:id";
                                $sttm=$db->prepare($sql);
                                $sttm->bindParam(':id', $id);
                                $sttm->execute();
                                $result=$sttm->fetch();


            }


              ?>
              <div class="products-details">

                <div class="preview_image">
                  <div class="preview-small">
                    <img src="image/home/sanpham/<?= $result['imageURL'] ?>" style="height:180px; margin-left:100px">
                  </div>
                    <img src="image/home/sanpham/<?= $result['imageURL'] ?>" style="height:80px; margin-left:60px; border: 1px solid red">
                    <img src="image/home/sanpham/<?= $result['imageURL'] ?>" style="height:80px; margin-left:10px; border: 1px solid red">
                    <img src="image/home/sanpham/<?= $result['imageURL'] ?>" style="height:80px; margin-left:10px; border: 1px solid red">
                </div>

                <div class="products-description">
                  <h5 class="name" style="color: red">
                    <?= $result['name'] ?>
                  </h5>
                  <p>
                    <img alt="" src="images/star.png">
                    <a class="review_num" href="#">
                      02 Review(s)
                    </a>
                  </p>
                  <p>
                    Availability:
                    <span class=" light-red">
                      In Stock
                    </span>
                  </p>
                  <p style="color: #003399; font-size: 20px; padding-top: 5px">Kiểu dáng:
                    <p><?= $result['kieudang'] ?> </p>
                  </p>
                  <p style="color: #003399; font-size: 20px; padding-top: 5px">Chức năng:
                    <p><?= $result['chucnang'] ?> </p>
                  </p>
                  <p style="color: #003399; font-size: 20px; padding-top: 5px">Xuất xứ:
                    <p><?= $result['xuatxu'] ?> </p>
                  </p>
                  <p style="color: #003399; font-size: 20px; padding-top: 5px">Bảo hành:
                    <p><?= $result['baohanh'] ?> </p>
                  </p>
                  <hr class="border">
                  <div class="price">
                    Price :
                    <h2><?= number_format($result['price']) ?> VNĐ</h2>

                  </div>
                  <hr class="border">
                  <div class="wided">
                    <div class="qty">
                      Số lượng :
                      <select class="soluong" data-id="<?= $id ?>">
                                      <?php 
                                        for($i=1;$i<= 100; $i++){
                                          if ($i == $soluong) {
                                      ?>
                                      <option selected value="<?= $i ?>"><?= $i ?></option>

                                      <?php }else{ ?>
                                      <option value="<?= $i ?>"><?= $i ?></option>

                                      <?php }} ?>
                      </select>
                    </div>
                    <div class="button_group">
                        <a href="giohang.php?id=<?= $result['pro_id'] ?>" class="button add-cart">
                          Add To Cart
                        </a>
                        <button class="button compare" type="button">
                          <i class="fa fa-exchange">
                          </i>
                        </button>
                        <button class="button wishlist" type="button">
                          <i class="fa fa-heart-o">
                          </i>
                        </button>

                    </div>

                  </div>

                  <div class="clearfix">
                  </div>
                  <hr class="border">
                  <img src="images/share.png" alt="" class="pull-right">
                </div>

              </div>

              <div class="clearfix">
              </div>
              <div class="tab-box">
                <div id="tabnav">
                  <ul>
                    <li>
                      <a href="#Descraption">
                        DESCRIPTION
                      </a>
                    </li>
                    <li>
                      <a href="#Reviews">
                        REVIEW
                      </a>
                    </li>
                    <li>
                      <a href="#tags">
                        PRODUCT TAGS
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="tab-content-wrap">
                  <div class="tab-content" id="Descraption">
                    <p>
                      <?= $result['detail'] ?>
                    </p>
                  </div>
                  <div class="tab-content" id="Reviews">
                    <form>
                      <table>
                        <thead>
                          <tr>
                            <th>
                              &nbsp;
                            </th>
                            <th>
                              1 star
                            </th>
                            <th>
                              2 stars
                            </th>
                            <th>
                              3 stars
                            </th>
                            <th>
                              4 stars
                            </th>
                            <th>
                              5 stars
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              Quality
                            </td>
                            <td>
                              <input type="radio" name="quality" value="Blue"/>
                            </td>
                            <td>
                              <input type="radio" name="quality" value="">
                            </td>
                            <td>
                              <input type="radio" name="quality" value="">
                            </td>
                            <td>
                              <input type="radio" name="quality" value="">
                            </td>
                            <td>
                              <input type="radio" name="quality" value="">
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Price
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                            <td>
                              <input type="radio" name="price" value="">
                            </td>
                          </tr>
                          <tr>
                            <td>
                              Value
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                            <td>
                              <input type="radio" name="value" value="">
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <div class="form-row">
                            <label class="lebel-abs">
                              Your Name
                              <strong class="red">
                                *
                              </strong>
                            </label>
                            <input type="text" name="" class="input namefild">
                          </div>
                          <div class="form-row">
                            <label class="lebel-abs">
                              Your Email
                              <strong class="red">
                                *
                              </strong>
                            </label>
                            <input type="email" name="" class="input emailfild">
                          </div>
                          <div class="form-row">
                            <label class="lebel-abs">
                              Summary of You Review
                              <strong class="red">
                                *
                              </strong>
                            </label>
                            <input type="text" name="" class="input summeryfild">
                          </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                          <div class="form-row">
                            <label class="lebel-abs">
                              Your Name
                              <strong class="red">
                                *
                              </strong>
                            </label>
                            <textarea class="input textareafild" name="" rows="7" >
                            </textarea>
                          </div>
                          <div class="form-row">
                            <input type="submit" value="Submit" class="button">
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="tab-content" >
                    <div class="review">
                      <p class="rating">
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star-half-o gray">
                        </i>
                        <i class="fa fa-star-o gray">
                        </i>
                      </p>
                      <h5 class="reviewer">
                        Reviewer name
                      </h5>
                      <p class="review-date">
                        Date: 01-01-2014
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a eros neque. In sapien est, malesuada non interdum id, cursus vel neque.
                      </p>
                    </div>
                    <div class="review">
                      <p class="rating">
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star light-red">
                        </i>
                        <i class="fa fa-star-half-o gray">
                        </i>
                        <i class="fa fa-star-o gray">
                        </i>
                      </p>
                      <h5 class="reviewer">
                        Reviewer name
                      </h5>
                      <p class="review-date">
                        Date: 01-01-2014
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a eros neque. In sapien est, malesuada non interdum id, cursus vel neque.
                      </p>
                    </div>
                  </div>
                  <div class="tab-content" id="tags">
                    <div class="tag">
                      Add Tags :
                      <input type="text" name="">
                      <input type="submit" value="Tag">
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix">
              </div>
              <div id="productsDetails" class="hot-products" class="col-md-12 col-sm-12">
                <h3 class="title">
                  <strong>
                    Hot
                  </strong>
                  Products
                </h3>
                <div class="control">
                  <a id="prev_hot" class="prev" href="#">
                    &lt;
                  </a>
                  <a id="next_hot" class="next" href="#">
                    &gt;
                  </a>
                </div>
                <ul id="hot">
                  <li>
                    <div class="row">
                      <?php
                     require 'config.php';
                     $sql="SELECT * FROM product ";
                     $sttm=$db->prepare($sql);

                     // thực hiện câu lệnh sql
                     $sttm->execute();

                     //lấy tất cả kq từ bảng products
                     $result=$sttm->fetchAll();

                     foreach ($result as $value){
                  ?>
                  <div class="col-md-3 col-sm-12">
                    <div class="products">
                      <div class="offer">
                        New
                      </div>
                      <div class="thumbnail">
                        <a href="details.html">
                          <img src="image/home/sanpham/<?php echo $value['imageURL'] ?>" style="height:180px;">
                        </a>
                      </div>
                      <div class="productname"><?php echo $value['name'] ?></div>
                      <h4 class="price">
                        <?php echo $value['price'] ?>
                      </h4>
                      <div class="button_group">
                        <a href="giohang.php?id=<?= $value['pro_id'] ?>" class="button add-cart">
                          Add To Cart
                        </a>
                        <button class="button compare" type="button">
                          <i class="fa fa-exchange">
                          </i>
                        </button>
                        <button class="button wishlist" type="button">
                          <i class="fa fa-heart-o">
                          </i>
                        </button>
                      </div>
                    </div>
                  </div>


                <?php } ?>
                    </div>
                  </li>
                </ul>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div style="clear: both;"></div>
      
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
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.sequence-min.js"></script>
    <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="js/script.min.js" ></script>
   </body>
</html>
