<?php
if (!empty($_SESSION['id'])) session_destroy();
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
            <form class="form-signin">
              <div class="form-label-group">
                <input type="text" id="inputEmail" class="form-control" required autofocus autocomplete="new-password">
                <label for="inputEmail">Tài khoản</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" required autocomplete="new-password">
                <label for="inputPassword">Mật khẩu</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Nhớ mật khẩu</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Đăng nhập</button>
              <hr class="my-4">
              <a href="index.php" class="btn btn-lg btn-exit btn-block text-uppercase">
                Quay lại
              </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>