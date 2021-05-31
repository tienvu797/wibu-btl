<?php
session_start();
require_once('database.php');
$config = [
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'dbname' => 'btl'
];
$db = new Database($config);
$top_sell = $db->table('top_sell')->search();
$expensive = $db->table('expensive')->search();
$sale = $db->table('sale')->search();
?>
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
                                            <li class="active"> <a href="index.php">Trang chủ</a> </li>
                                            <li> <a href="blog.php">Bài viết</a> </li>
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
    <!-- end header -->
    <section class="slider_section">
        <div class="w3-content w3-section">
            <img class="mySlides" src="images/baner1.jpg" style="width:100%; height: 400px;">
            <img class="mySlides" src="images/baner2.jpg" style="width:100%; height: 400px;">
            <img class="mySlides" src="images/baner3.jpg" style="width:100%; height: 400px;">
            <img class="mySlides" src="images/baner4.jpg" style="width:100%; height: 400px;">
        </div>
    </section>
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>
    <!-- our product -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h2 class="title a center" style="margin-top: 30px;">
                        <strong class="black">Sản phẩm bán chạy </strong>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="product-bg">
        <div class="product-bg-white">
            <div class="top-content">
                <div class="container-fluid">
                    <div id="carousel-example" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner row w-100 mx-auto" role="listbox">
                            <div class="carousel-item col-xl-3 col-lg-3 col-md-6 col-sm-12 active" id="imgcorousel">
                                <a href="item.php?id=<?php echo $top_sell[0]['id'] ?>">
                                    <img src="<?php echo $top_sell[0]['img'] ?>" class="img-fluid mx-auto d-block" alt="<?php echo $top_sell[0]['name'] ?>">
                                    <h3><?php echo $top_sell[0]['name'] ?></h3>
                                </a>
                            </div>
                            <?php for ($i = 1; $i < count($top_sell); $i++) : ?>
                                <div class="carousel-item col-xl-3 col-lg-3 col-md-6 col-sm-12 " id="imgcorousel">
                                    <a href="item.php?id=<?php echo $top_sell[$i]['id'] ?>">
                                        <img src="<?php echo $top_sell[$i]['img'] ?>" class="img-fluid mx-auto d-block" alt="<?php echo $top_sell[$i]['name'] ?>">
                                        <h3><?php echo $top_sell[$i]['name'] ?></h3>
                                    </a>
                                </div>
                            <?php endfor ?>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example" role="button" color="black" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example" role="button" color="black" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <script>
                $('#carousel-example').on('slide.bs.carousel', function(e) {
                    /*
                        CC 2.0 License Iatek LLC 2018 - Attribution required
                    */
                    var $e = $(e.relatedTarget);
                    var idx = $e.index();
                    var itemsPerSlide = 5;
                    var totalItems = $('.carousel-item').length;

                    if (idx >= totalItems - (itemsPerSlide - 1)) {
                        var it = itemsPerSlide - (totalItems - idx);
                        for (var i = 0; i < it; i++) {
                            // append slides to end
                            if (e.direction == "left") {
                                $('.carousel-item').eq(i).appendTo('.carousel-inner');
                            } else {
                                $('.carousel-item').eq(0).appendTo('.carousel-inner');
                            }
                        }
                    }
                });
            </script>
        </div>
    </div>
    <div class="product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2><strong class="black">Sản phẩm cao cấp</strong></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-bg">
        <div class="product-bg-white">
            <div class="container">
                <div class="row">
                    <?php foreach ($expensive as $item) : ?>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <a href="item.php?id=<?php echo $item['id'] ?>">
                                <div class="product-box">
                                    <i><img src="<?php echo $item['img'] ?>" /></i>
                                    <h3><?php echo $item['name'] ?></h3>
                                    <span class="currency" <?php if ($item['discount'] != 0) echo ('style="text-decoration-line: line-through;color:#6c757d!important"') ?>>
                                        <?php echo $item['price'] ?>
                                    </span>
                                    <span class="currency">
                                        <?php if ($item['discount'] != 0) echo $item['price'] * $item['discount'] / 100; ?>
                                    </span>
                                </div>
                            </a>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
    <div class="product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2><strong class="black">Sản phẩm khuyến mãi</strong></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-bg">
        <div class="product-bg-white">
            <div class="container">
                <div class="row">
                    <?php foreach ($sale as $item) : ?>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                            <a href="item.php?id=<?php echo $item['id'] ?>">
                                <div class="product-box">
                                    <i><img src="<?php echo $item['img'] ?>" /></i>
                                    <h3><?php echo $item['name'] ?></h3>
                                    <span class="currency text-secondary" style="text-decoration-line: line-through;">
                                        <?php echo $item['price'] ?>
                                    </span>
                                    <span class="currency"><?php echo $item['price'] * $item['discount'] / 100 ?>
                                    </span>
                                </div>
                            </a>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
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
<script src="./main.js"></script>

</html>