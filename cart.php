<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
require('permission.php');
require_once('database.php');
$config = [
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'dbname' => 'btl'
];
$db = new Database($config);
if (!empty($_POST)) {
    if (!empty($_POST['id'])) {
        if ($_POST['cart'] == 'continue')
            for ($i = 0; $i < count($_POST['id']); $i++)
                if ($_POST['amount'][$i] != 0)
                    $db->table('cart')->update($_POST['id'][$i], ['amount' => $_POST['amount'][$i]]);
                else $db->table('cart')->delete($_POST['id'][$i]);
        if ($_POST['cart'] == 'ok') {
            for ($i = 0; $i < count($_POST['id']); $i++)
                if ($_POST['amount'][$i] != 0) {
                    $data = [
                        'id_customer' => $_SESSION['id'],
                        'amount' => $_POST['amount'][$i],
                        'price' => $_POST['output'][$i],
                        'time' => date('Y-m-d H:i:s'),
                    ];

                    $res = $db->table('cart')->get(['id' => $_POST['id'][$i]]);
                    $data['id_product'] = $res[0]['id_product'];

                    $res = $db->table('product')->get(['id' => $data['id_product']]);
                    $data['id_seller'] = $res[0]['id_user'];

                    $db->table('history')->insert($data);
                    $db->table('cart')->delete($_POST['id'][$i]);
                } else $db->table('cart')->delete($_POST['id'][$i]);
        }
    }
    header('location:index.php');
}
if (!empty($_GET)) {
    $id = $_GET['id'];
    $item = $db->table('product')->get(['id' => $id])[0];
    $data = [
        'id_customer' => $_SESSION['id'],
        'id_product' => $id
    ];
    $check = $db->table('cart')->get($data);
    if (count($check) == 0) {
        $db->table('cart')->insert($data);
    } else {
        $data['amount'] = $check[0]['amount'] + 1;
        $db->table('cart')->update($check[0]['id'], $data);
    }
}
$res = $db->table('show_cart')->get(['id_customer' => $_SESSION['id']]);
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
                <form action="" method="post">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Sản phẩm</th>
                                <th>Tên</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Tạm tính</th>
                                <th>Giảm giá</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < count($res); $i++) : ?>
                                <input type="text" name="id[]" value="<?php echo $res[$i]['id'] ?>" style="display: none;">
                                <tr>
                                    <td><?php echo $i + 1 ?></td>
                                    <td><img width="100px" src="<?php echo $res[$i]['img'] ?>" alt=""></td>
                                    <td><?php echo $res[$i]['name'] ?></td>
                                    <td class="currency price"><?php echo $res[$i]['price'] ?></td>
                                    <td>
                                        <div class="quantity buttons_added">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="<?php echo $res[$i]['amount'] ?>" min="0" onchange="changeData(this,<?php echo $i ?>)" name="amount[]">
                                        </div>
                                    </td>
                                    <th class="currency temp"></th>
                                    <td class="discount"><?php echo $res[$i]['discount'] ?> %</td>
                                    <th class="currency final"></th>
                                    <input type="text" name="output[]" style="display: none;" class="output">
                                </tr>
                            <?php endfor ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <button type="submit" name="cart" value="continue" class="send text-dark" style="background-color: #ccc;">
                                        Tiếp tục mua hàng
                                    </button>
                                </td>
                                <td>
                                    <button type="submit" name="cart" value="ok" class="send">
                                        Thanh toán
                                    </button>
                                </td>
                                <td></td>
                                <th class="currency" id="sum"></th>
                            </tr>
                        </tfoot>
                    </table>
                </form>
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