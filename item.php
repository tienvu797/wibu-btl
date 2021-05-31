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
$id = $_GET['id'];
$item = $db->table('product')->get(['id' => $id])[0];
$random = $db->table('random')->search();
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
    <title>Wibu+</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/carousel.css">
    <link rel="stylesheet" type="text/css" href="css/log.css">
    <link rel="stylesheet" type="text/css" href="css/cart.css">
</head>

<body class="main-layout product_page">
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
                        <h2>chi tiết sản phẩm</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our product -->
    <div class="product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="item-bg">
        <div class="row">
            <div class="col-md-6">
                <div class="image-item">
                    <img src="<?php echo $item['img'] ?>" alt="<?php echo $item['name'] ?>" width="70%">
                </div>
            </div>
            <div class="col-md-5">
                <div class="describe-item">
                    <h2><?php echo $item['name'] ?></h2>
                    <h3>
                        <span <?php if ($item['discount'] != 0) echo ('style="text-decoration-line: line-through;color:#6c757d!important"') ?> class="currency">
                            <?php echo $item['price'] ?>
                        </span>
                        <span class="currency">
                            <?php echo $item['price'] * $item['discount'] / 100 ?>
                        </span>
                    </h3>
                    <!-- <h3><b>1.618.000VNĐ &ensp;</b><del>1.904.000VNĐ</del></h3> -->
                    <div class="describe">
                        <p><?php echo $item['detail'] ?></p>
                    </div>
                    <div class=" col-md-12">
                        <form method="get" action="cart.php">
                            <button class="send" name="id" value="<?php echo $item['id'] ?>" type="submit">
                                MUA NGAY</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="item-bg">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#info">Thông tin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#describe">Mô tả</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#rate">Đánh giá</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="info" class="container tab-pane active">
                            <br>
                            <h3>Thông tin </h3>
                            <p>Chưa có thông tin.</p>
                        </div>
                        <div id="describe" class="container tab-pane fade">
                            <br>
                            <h3>Mô tả</h3>
                            <p>Chưa có mô tả.</p>
                        </div>
                        <div id="rate" class="container tab-pane fade">
                            <br>
                            <h3>Đánh giá</h3>
                            <p>Chưa có đánh giá.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-bg" id="bg-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2 class="title a center" style="margin-top: 30px;">
                            <strong class="black">Sản phẩm ngẫu nhiên </strong>
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
                                    <a href="item.php?id=<?php echo $random[0]['id'] ?>">
                                        <img src="<?php echo $random[0]['img'] ?>" class="img-fluid mx-auto d-block" alt="<?php echo $random[0]['name'] ?>">
                                        <h3><?php echo $random[0]['name'] ?></h3>
                                    </a>
                                </div>
                                <?php for ($i = 1; $i < count($random); $i++) : ?>
                                    <div class="carousel-item col-xl-3 col-lg-3 col-md-6 col-sm-12 " id="imgcorousel">
                                        <a href="item.php?id=<?php echo $random[$i]['id'] ?>">
                                            <img src="<?php echo $random[$i]['img'] ?>" class="img-fluid mx-auto d-block" alt="<?php echo $random[$i]['name'] ?>">
                                            <h3><?php echo $random[$i]['name'] ?></h3>
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