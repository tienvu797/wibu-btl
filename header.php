<?php
// session_start();
$text = "Đăng nhập";
$href = "login.php";
if (!empty($_SESSION['id'])) {
  $text = $_SESSION['name'];
  $href = 'menu-admin.php';
}
?>
<div class="container">
  <div class="row justify-content-around">
    <div class="col-md-3 logo_section">
      <div class="full">
        <div class="center-desk">
          <div class="logo"> <a href="index.php"><img src="images/logo.png" alt="logo" /></a> </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="search">
        <form method="get" action="product.php">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" name="name">
            <div class="input-group-append">
              <button id="btn-search" class="btn btn-success" type="submit"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="col-md-3 row justify-content-around">
      <div id="btn-card">
        <a href="cart.php"><i class="fa fa-shopping-cart"></i></a>
      </div>
      <!-- <li> -->
        <a href="<?php echo $href ?>"><button id="buy" style="width: 160px">
            <?php echo $text ?></button>
        </a>
      <!-- </li> -->
    </div>
  </div>
</div>