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
                                            <li class="active"> <a href="blog.php">Bài viết</a> </li>
                                            <li> <a href="product.php">Sản phẩm </a></li>
                                            <li> <a href="about.php">Giới thiệu</a> </li>
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
    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>bài viết</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Lastestnews -->
    <div class="Lastestnews blog">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
                    <div class="news-box">
                        <figure><img id="imgblog" src="images/1.jpg" alt="img" /></figure>
                        <h3>Mua đồng hồ</h3>
                        <span>Tháng 5-20</span><span>Comment</span>
                        <div class="detail-news">
                            <p>Bộ kim xanh navy, vòng bezel xoắn thừng mạ vàng sang trọng và dây da cá sấu bền bỉ quen thuộc của dòng đồng hồ cao cấp nhà Ogival được chế tác một cách tỉ mỉ, đạt độ hoàn thiện cao tạo nên cỗ máy hoàn hảo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
                    <div class="news-box">
                        <figure><img id="imgblog" src="images/2.jpg" alt="img" /></figure>
                        <h3>Cách đeo đồng hồ Music</h3>
                        <span>Tháng 5-20</span>
                        <div class="detail-news">
                            <p>Bộ kim xanh navy, vòng bezel xoắn thừng mạ vàng sang trọng và dây da cá sấu bền bỉ quen thuộc của dòng đồng hồ cao cấp nhà Ogival được chế tác một cách tỉ mỉ, đạt độ hoàn thiện cao tạo nên cỗ máy hoàn hảo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
                    <div class="news-box">
                        <figure><img id="imgblog" src="images/3.jpg" alt="img" /></figure>
                        <h3>Chương trình hạ giá</h3>
                        <span>Tháng 5-20</span>
                        <div class="detail-news">
                            <p>Bộ kim xanh navy, vòng bezel xoắn thừng mạ vàng sang trọng và dây da cá sấu bền bỉ quen thuộc của dòng đồng hồ cao cấp nhà Ogival được chế tác một cách tỉ mỉ, đạt độ hoàn thiện cao tạo nên cỗ máy hoàn hảo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
                    <div class="news-box">
                        <figure><img id="imgblog" src="images/1.jpg" alt="img" /></figure>
                        <h3>Mua đồng hồ</h3>
                        <span>Tháng 5-20</span><span>Comment</span>
                        <div class="detail-news">
                            <p>Bộ kim xanh navy, vòng bezel xoắn thừng mạ vàng sang trọng và dây da cá sấu bền bỉ quen thuộc của dòng đồng hồ cao cấp nhà Ogival được chế tác một cách tỉ mỉ, đạt độ hoàn thiện cao tạo nên cỗ máy hoàn hảo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
                    <div class="news-box">
                        <figure><img id="imgblog" src="images/2.jpg" alt="img" /></figure>
                        <h3>Cách đeo đồng hồ Music</h3>
                        <span>Tháng 5-20</span>
                        <div class="detail-news">
                            <p>Bộ kim xanh navy, vòng bezel xoắn thừng mạ vàng sang trọng và dây da cá sấu bền bỉ quen thuộc của dòng đồng hồ cao cấp nhà Ogival được chế tác một cách tỉ mỉ, đạt độ hoàn thiện cao tạo nên cỗ máy hoàn hảo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
                    <div class="news-box">
                        <figure><img id="imgblog" src="images/3.jpg" alt="img" /></figure>
                        <h3>Chương trình hạ giá</h3>
                        <span>Tháng 5-20</span>
                        <div class="detail-news">
                            <p>Bộ kim xanh navy, vòng bezel xoắn thừng mạ vàng sang trọng và dây da cá sấu bền bỉ quen thuộc của dòng đồng hồ cao cấp nhà Ogival được chế tác một cách tỉ mỉ, đạt độ hoàn thiện cao tạo nên cỗ máy hoàn hảo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Lastestnews -->
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