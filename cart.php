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
    <link rel="stylesheet" type="text/css" href="css/cart.css">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout product_page">
    <header>
        <!-- header inner -->
        <div class="header sticky-top">
            <div class="head_top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo"> <a href="index.php"><img src="images/logo.png" alt="logo" /></a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="search">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-append">
                                        <button id="btn-search" class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <li><button id="buy" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Đăng nhập</button></li>
                            <div id="btn-card">
                                <a href="cart.php"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                            <div id="id01" class="modal">
                                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                <form class="modal-content" action="/action_page.php">
                                    <div class="container">
                                        <h1>Đăng nhập</h1>
                                        <p>Điền tài khoản và mật khẩu của bạn.</p>
                                        <hr>
                                        <label for="user"><b>Tên đăng nhập</b></label>
                                        <input type="text" placeholder="Enter Email" name="email" required>
                                        <label for="psw"><b>Mật khẩu</b></label>
                                        <input type="password" placeholder="Enter Password" name="psw" required>
                                        <div class="clearfix">
                                            <button id="btnlog" type="submit" class="signupbtn">Đăng nhập</button>
                                            <button id="btnlog" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Thoát</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="header">
                        <div class="col-xl-7 col-lg-7 col-md-9 col-sm-9 center">
                            <div class="menu-area">
                                <div class="limit-box">
                                    <nav class="main-menu">
                                        <ul class="menu-area-main">
                                            <li> <a href="index.php">Trang chủ</a> </li>
                                            <li> <a href="blog.php">Bài viết</a> </li>
                                            <li class="active"> <a href="product.php">Sản phẩm </a></li>
                                            <li> <a href="about.php">Giới thiệu</a> </li>
                                            <li class="mean-last"> <a href="signup.php">Đăng ký</a> </li>
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
                        <h2>Giỏ hàng</h2>
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
    <div class="product-bg">
        <div class="product-bg-white">
            <div class="container-fluid">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Sản phẩm </th>
                            <th>Tên</th>
                            <th>Giá </th>
                            <th>Số lượng</th>
                            <th>Tổng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td><img width="90" height="70" src="images/a.jpg" alt=""></td>
                            <td>Norton Internet Security</td>
                            <td>$25.00</td>
                            <td>
                                <div class="quantity buttons_added">
                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="1" min="0" step="1">
                                </div>
                            </td>
                            <th>$25.00</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td><img width="90" height="70" src="images/c.jpg" alt=""></td>
                            <td>Norton Internet Security</td>
                            <td>$25.00</td>
                            <td>
                                <div class="quantity buttons_added">
                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="1" min="0" step="1">
                                </div>
                            </td>
                            <th>$25.00</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td><img width="90" height="70" src="images/b.jpg" alt=""></td>
                            <td>Norton Internet Security</td>
                            <td>$25.00</td>
                            <td>
                                <div class="quantity buttons_added">
                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="1" min="0" step="1">
                                </div>
                            </td>
                            <th>$25.00</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td><img width="90" height="70" src="images/e.jpg" alt=""></td>
                            <td>Norton Internet Security</td>
                            <td>$25.00</td>
                            <td>
                                <div class="quantity buttons_added">
                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="1" min="0" step="1">
                                </div>
                            </td>
                            <th>$25.00</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class=" col-md-12" id="btnCart">
                                    <button class="send">Thanh toán</button>
                                </div>
                            </td>
                            <th>$100.00</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <ul class="sociel">
                            <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="contact">
                            <h3>conatct us</h3>
                            <span>123 Second Street Fifth Avenue,<br>
                                Manhattan, New York
                                +987 654 3210</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="contact">
                            <h3>ADDITIONAL LINKS</h3>
                            <ul class="lik">
                                <li> <a href="#">About us</a></li>
                                <li> <a href="#">Terms and conditions</a></li>
                                <li> <a href="#">Privacy policy</a></li>
                                <li> <a href="#">News</a></li>
                                <li> <a href="#">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="contact">
                            <h3>service</h3>
                            <ul class="lik">
                                <li> <a href="#"> Data recovery</a></li>
                                <li> <a href="#">Computer repair</a></li>
                                <li> <a href="#">Mobile service</a></li>
                                <li> <a href="#">Network solutions</a></li>
                                <li> <a href="#">Technical support</a></li>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="contact">
                            <h3>IT NEXT THEME</h3>
                            <span>Tincidunt elit magnis <br>
                                nulla facilisis. Dolor <br>
                                sagittis maecenas. <br>
                                Sapien nunc amet <br>
                                ultrices, </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
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