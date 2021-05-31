<?php
session_start();
if (!empty($_SESSION['id'])) session_destroy();
require_once('database.php');
$config = [
  'host' => 'localhost',
  'user' => 'root',
  'pass' => '',
  'dbname' => 'btl'
];
$register = [
  'name' => '',
  'user_name' => '',
  'email' => '',
];
$login = [
  'user_name' => '',
  'password' => '',
];
$err_login = [
  'user_name' => '',
  'password' => '',
];
$err_register = [
  'user_name' => '',
  'email' => '',
  'password2' => ''
];
$db = new Database($config);
$isRegister = false;
if (!empty($_POST)) {
  if ($_POST['account'] == 'login') {
    $login = [
      'user_name' => $_POST['user_name'],
      'password' => $_POST['password']
    ];
    $res = $db->table('account')->get(['user_name' => $login['user_name']]);
    if (count($res) == 0) {
      $login['user_name'] = '';
      $err_login['user_name'] = 'Tài khoản không tồn tại';
    } else if ($login['password'] == $res[0]['password']) {
      $_SESSION = $res[0];
      header('location:index.php');
    } else {
      $err_login['password'] = 'Mật khẩu không chính xác';
    }
  }

  if ($_POST['account'] == 'register') {
    $isRegister = true;
    $isValid = true;
    $register = [
      'name' => $_POST['name'],
      'user_name' => $_POST['user_name'],
      'email' => $_POST['email'],
      'password' => $_POST['password'],
    ];
    if (count($db->table('account')->get(['user_name' => $register['user_name']])) != 0) {
      $err_register['user_name'] = 'Tài khoản đã tồn tại';
      $register['user_name'] = '';
      $isValid = false;
    }
    if (count($db->table('account')->get(['email' => $register['email']])) != 0) {
      $err_register['email'] = 'Email đã được sử dụng';
      $register['email'] = '';
      $isValid = false;
    }
    if ($_POST['password'] != $_POST['password2']) {
      $err_register['password2'] = 'Hai mật khẩu phải trùng khớp';
      $isValid = false;
    }
    if ($isValid) {
      $db->table('account')->insert($register);
      $isRegister = false;
      $login['user_name'] = $register['user_name'];
      $login['password'] = $register['password'];
    }
  }
}
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập</title>
  <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
  <script src="./asset/js/jquery-3.6.0.slim.min.js"></script>
  <script src="./asset/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./css/login.css">
</head>


<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h1 class="card-title text-center"><img src="images/logo.png" alt="logo" />
            </h1>

            <nav id="menu" class="nav nav-tabs nav-justified">
              <a class="nav-link <?php if (!$isRegister) echo 'active' ?>" href="#login" data-toggle="tab">Đăng nhập</a>
              <a class="nav-link <?php if ($isRegister) echo 'active' ?>" href="#register" data-toggle="tab">Đăng ký</a>
            </nav>
            <hr>

            <div class="tab-content">
              <div id="login" class="tab-pane fade <?php if (!$isRegister) echo 'show active' ?>">
                <form class=" form-account was-validated" method="post">
                  <div class="form-label-group">
                    <input type="text" name="user_name" id="user_name" class="form-control" required autocomplete="new-password" value="<?php echo $login['user_name'] ?>" autofocus>
                    <label for="user_name">Tài khoản</label>
                    <div class="invalid-feedback"><?php echo $err_login['user_name'] ?></div>
                  </div>
                  <div class="form-label-group">
                    <input type="password" name="password" id="password" class="form-control" required autocomplete="new-password" value="">
                    <label for="password">Mật khẩu</label>
                    <div class="invalid-feedback"><?php echo $err_login['password'] ?></div>
                  </div>
                  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="account" value="login">
                    Đăng nhập
                  </button>
                </form>
              </div>
              <div id="register" class="tab-pane fade <?php if ($isRegister) echo 'show active' ?>">
                <form class=" form-account was-validated" method="post">
                  <div class="form-label-group">
                    <input type="text" name="name" id="name" class="form-control" required autocomplete="new-password" value="<?php echo $register['name'] ?>" autofocus>
                    <label for="name">Tên người dùng</label>
                  </div>
                  <div class="form-label-group">
                    <input type="text" name="user_name" id="user_name" class="form-control" required autocomplete="new-password" value="<?php echo $register['user_name'] ?>">
                    <label for="user_name">Tài khoản</label>
                    <div class="invalid-feedback"><?php echo $err_register['user_name'] ?></div>
                  </div>
                  <div class="form-label-group">
                    <input type="email" name="email" id="email" class="form-control" required autocomplete="new-password" value="<?php echo $register['email'] ?>">
                    <label for="email">Email</label>
                    <div class="invalid-feedback"><?php echo $err_register['email'] ?></div>
                  </div>
                  <div class="form-label-group">
                    <input type="password" name="password" id="password" class="form-control" required autocomplete="new-password" value="">
                    <label for="password">Mật khẩu</label>
                  </div>
                  <div class="form-label-group">
                    <input type="password" name="password2" id="password2" class="form-control" required autocomplete="new-password" value="">
                    <label for="password2">Nhập lại mật khẩu</label>
                    <div class="invalid-feedback"><?php echo $err_register['password2'] ?></div>
                  </div>
                  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="account" value="register">
                    Đăng ký
                  </button>
                </form>
              </div>
              <hr>
              <div class="form-account">
                <a href="index.php" class="btn btn-lg btn-exit btn-block text-uppercase">
                  Trang chủ
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>