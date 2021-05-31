<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>wibu+</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="css/carousel.css">
   <link rel="stylesheet" type="text/css" href="css/log.css">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
   <!-- header -->
   <header>
      <!-- header inner -->
      <div class="header sticky-top">
         <div class="head_top">
            <?php include('header.php') ?>
            <div class="container">
               <div class="header">
                  <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9 center">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li> <a href="index.php">Trang chủ</a> </li>
                                 <li> <a href="blog.php">Bài viết</a> </li>
                                 <li> <a href="product.php">Sản phẩm </a></li>
                                 <li class="active"> <a href="about.php">Giới thiệu</a> </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end header inner -->
   </header>
   <!-- end header -->
   <div class="brand_color">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Giới thiệu</h2>
               </div>
            </div>
         </div>
      </div>

   </div>


   <div class="about">
      <div class="container">
         <div class="row">
            <dir class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
               <div class="about_box">
                  <figure><img src="images/pc_layout.png" /></figure>
               </div>
            </dir>
            <dir class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
               <div class="about_box">
                  <h3>WIBU+</h3>
                  <p>Là thương hiệu được sáng lập bởi Shogoro Yshida, cho đến thời điểm hiện tại nó đã tồn tại được khoảng 60 năm. Trước sự xuất hiện rất nhiều dòng đồng hồ khác đến từ Thụy Sỹ, Nhật Bản… Orient vẫn là thương hiệu được rất nhiều người yêu thích. Hiện nay, dòng đồ hồ này liên tục đổi mới về mẫu mã cũng như kỹ thuật để đáp ứng nhu cầu và thị hiếu của khách hàng.</p>
                  <p>WIBU+ cung cấp các loại đồng hồ như: Đồng hồ đeo tay thời trang, Đồng hồ đôi, Đồng hồ cây, Đồng hồ treo tường, Đồng hồ để bàn đến từ các thương hiệu cao cấp như: Longines, Orient, Romanson, Seiko, Tissot, Century, Citizen, D&G, Chronoswiss, Perrelet, Breitling, Rado, Frederique Constant, Roamer,… Trong đó, Candino và Roamer đến từ Thụy Sỹ, Orient đến từ Nhật Bản và dòng đồng hồ thời trang Romanson đến từ Hàn Quốc.</p>
               </div>
            </dir>
         </div>
      </div>
   </div>


   <!-- service -->
   <div class="service">
      <div class="container">
         <div class="row">
            <div class="col-md-8 offset-md-2">
               <div class="title">
                  <h2>Cung cấp <strong class="black">dịch vụ </strong></h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
               <div class="service-box">
                  <i><img src="icon/service1.png" /></i>
                  <h3>Dịch vụ nhanh chóng</h3>
                  <p>Mọi dịch vụ đều nhanh chóng, thuận tiện đối với khách hàng.</p>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
               <div class="service-box">
                  <i><img src="icon/service2.png" /></i>
                  <h3>Bảo mật thông tin</h3>
                  <p>Thông tin cá nhân, cũng như giao dịch được giữ kín.</p>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
               <div class="service-box">
                  <i><img src="icon/service3.png" /></i>
                  <h3>Đội ngũ chuyên gia</h3>
                  <p>Tập hợp đội ngũ chuyên gia, tư vấn, bảo hành cho khách hàng</p>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
               <div class="service-box">
                  <i><img src="icon/service4.png" /></i>
                  <h3>Giá cả hợp lý</h3>
                  <p>Giá cả vô cùng phải chăng, vừa vặn với hầu bao của khách hàng. </p>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
               <div class="service-box">
                  <i><img src="icon/service5.png" /></i>
                  <h3>Bảo hành trong 90 ngày</h3>
                  <p>Bảo hành miễn phí tất cả các lỗi trong 90 ngày</p>
               </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
               <div class="service-box">
                  <i><img src="icon/service6.png" /></i>
                  <h3>Uy tín, chất lượng</h3>
                  <p>Cam kết đảm bảo uy tín,<br> chất lượng 100%</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end service -->
   <?php include('footer.html') ?>
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script>
      $(document).ready(function() {
         $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
         });

         $(".zoom").hover(function() {

            $(this).addClass('transition');
         }, function() {

            $(this).removeClass('transition');
         });
      });
   </script>
</body>

</html>