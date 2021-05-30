<?php
require('permission.php');
require_once('database.php');
$config = [
   'host' => 'localhost',
   'user' => 'root',
   'pass' => '',
   'dbname' => 'btl'
];
$db = new Database($config);
if (!empty($_POST['account'])) {
   if (($_POST['account']) == 'del') {
      $id = $_GET['id'];
      $db->table('account')->delete($id);
   } else {
      $name = $_POST['name'];
      $user_name = $_POST['user_name'];
      $password = $_POST['password'];
      $email = $_POST['email'];

      $data = [
         'name' => $name,
         'user_name' => $user_name,
         'password' => $password,
         'email' => $email,
      ];
      $db->table('account')->insert($data);
   }
}
if (!empty($_POST['product'])) {
   if ($_POST['product'] == 'del') {
      $id = $_GET['id'];
      $db->table('product')->delete($id);
   } else {
      $name = $_POST['name'];
      $price = $_POST['price'];
      $discount = $_POST['discount'];
      $amount = $_POST['amount'];
      $detail = $_POST['detail'];
      $data = [
         'name' => $name,
         'price' => $price,
         'discount' => $discount,
         'amount' => $amount,
         'detail' => $detail,
      ];
      switch ($_POST['product']) {
         case 'add':
            $img = $_FILES['img']['tmp_name'];
            $path = './uploads/' . $_FILES['img']['name'];
            move_uploaded_file($img, $path);

            $data['img'] = $path;
            $data['id_user'] = $_SESSION['id_user'];
            $db->table('product')->insert($data);
            break;
         case 'edit':
            $id = $_GET['id'];
            $db->table('product')->update($id, $data);
            break;
      }
   }
}
if ($_SESSION['permission'] == 2)
   $list_item = $db->table('list_item')->search();
else $list_item = $db->table('list_item')->get(['id_user' => $_SESSION['id_user']]);
$list_user = $db->table('account')->search();
usort($list_item, function ($a, $b) {
   return $a['id'] > $b['id'];
});
usort($list_user, function ($a, $b) {
   return $a['permission'] < $b['permission'];
});
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <title>Bootstrap Example</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
   <script src="./asset/js/jquery-3.6.0.slim.min.js"></script>
   <script src="./asset/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="css/admin-page.css">
</head>

<body>
   <header class="bg-dark" style="margin-bottom: 20px;">
      <img src="images/logo.png" id="logo" width="300px" height="50px" alt="logo" style="margin: auto" />
   </header>

   <div class="container-fluid">
      <div class="row">
         <div class="col-md-2">
            <div id="bg-control">
               <nav id="menu" class="nav nav-tabs nav-justified">
                  <a class="text-uppercase"><?php echo $list_item[0]['full_name'] ?></a>
                  <a href="index.php">Trang chủ</a>
                  <a href="#product" data-toggle="tab">Quản lý sản phẩm</a>
                  <a <?php if ($_SESSION['permission'] != 2)
                        echo ('style="display: none;"') ?> href="#account" data-toggle="tab">
                     Quản lý thành viên
                  </a>
                  <a href="login.php">Đăng xuất</a>
               </nav>
            </div>
         </div>
         <div class="col-md-10">
            <div id="bg-content">
               <div class="tab-content" style="padding: 20px">
                  <div id="product" class="container tab-pane fade show active">
                     <h1><strong>Quản lý sản phẩm</strong></h1>
                     <button type="button" class="send" data-toggle="modal" data-target="#add-product">
                        THÊM MỚI
                     </button>

                     <!-- Modal -->
                     <form action="" method="post" class="was-validated" enctype="multipart/form-data">
                        <div class="modal fade" id="add-product" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                           <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title">Thêm sản phẩm</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                                 <div class="modal-body">
                                    <div class="form-group">
                                       <div class="form-group">
                                          <label for="name"><b>Tên sản phẩm</b></label>
                                          <input type="text" name="name" id="name" class="form-control" required>
                                       </div>
                                       <div class="form-group">
                                          <label for="img"><b>Hình minh hoạ</b></label>
                                          <input type="file" name="img" id="img" class="form-control" required>
                                       </div>
                                       <div class="form-group">
                                          <label for="price"><b>Giá tiền</b></label>
                                          <input type="number" name="price" id="price" class="form-control" required>
                                       </div>
                                       <div class="form-group">
                                          <label for="discount"><b>Giảm giá</b></label>
                                          <input type="number" name="discount" id="discount" class="form-control" value="0">
                                       </div>
                                       <div class="form-group">
                                          <label for="amount"><b>Số lượng</b></label>
                                          <input type="number" name="amount" id="amount" class="form-control" required>
                                       </div>
                                       <div class="form-group">
                                          <label for="detail"><b>Chi tiết</b></label>
                                          <textarea name="detail" id="detail" cols="30" rows="5" class="form-control"></textarea>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                       Huỷ</button>
                                    <button type="submit" name="product" value="add" class="btn btn-primary">
                                       Lưu</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>

                     <table class="table table-striped">
                        <thead class="thead-light">
                           <tr>
                              <th>STT</th>
                              <th>ID</th>
                              <th>Tên</th>
                              <th>Hình ảnh</th>
                              <th>Đơn giá</th>
                              <th>Giảm giá</th>
                              <th>Số lượng</th>
                              <th>Đã bán</th>
                              <th>Mô tả</th>
                              <th <?php if ($_SESSION['permission'] < 2) echo 'style="display: none;"' ?>>
                                 Người bán</th>
                              <th colspan="2">Thao tác</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           for ($i = 0; $i < count($list_item); $i++) : ?>
                              <tr>
                                 <td><?php echo $i + 1 ?></td>
                                 <td><?php echo $list_item[$i]['id'] ?></td>
                                 <td><?php echo $list_item[$i]['name'] ?></td>
                                 <td><img width="100px" src="<?php echo $list_item[$i]['img'] ?>"></td>
                                 <td class="currency"><?php echo $list_item[$i]['price'] ?></td>
                                 <td><?php echo $list_item[$i]['discount'] ?> %</td>
                                 <td><?php echo $list_item[$i]['amount'] ?></td>
                                 <td><?php echo $list_item[$i]['sold'] ?></td>
                                 <td><?php echo $list_item[$i]['detail'] ?></td>
                                 <td <?php if ($_SESSION['permission'] < 2) echo 'style="display: none;"' ?>>
                                    <?php echo $list_item[$i]['full_name'] ?>
                                 </td>
                                 <td>
                                    <button class="btn btn-warning " data-toggle="modal" data-target="#edit-product-<?php echo $i ?>">
                                       Sửa
                                    </button>

                                    <!-- Modal -->
                                    <form action="?id=<?php echo $list_item[$i]['id'] ?>" method="post" class="was-validated" enctype="multipart/form-data">
                                       <div class="modal fade" id="edit-product-<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h5 class="modal-title">Sửa sản phẩm</h5>
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                   </button>
                                                </div>
                                                <div class="modal-body">
                                                   <div class="form-group">
                                                      <div class="form-group">
                                                         <label for="name"><b>Tên sản phẩm</b></label>
                                                         <input type="text" name="name" id="name" class="form-control" required value="<?php echo $list_item[$i]['name'] ?>">
                                                      </div>
                                                      <div class="form-group">
                                                         <label for="price"><b>Giá tiền</b></label>
                                                         <input type="number" name="price" id="price" class="form-control" required value="<?php echo $list_item[$i]['price'] ?>">
                                                         <div class="form-group">
                                                            <label for="discount"><b>Giảm giá</b></label>
                                                            <input type="number" name="discount" id="discount" class="form-control" value="<?php echo $list_item[$i]['discount'] ?>">
                                                         </div>
                                                      </div>
                                                      <div class="form-group">
                                                         <label for="amount"><b>Số lượng</b></label>
                                                         <input type="number" name="amount" id="amount" class="form-control" required value="<?php echo $list_item[$i]['amount'] ?>">
                                                      </div>
                                                      <div class="form-group">
                                                         <label for="detail"><b>Chi tiết</b></label>
                                                         <textarea name="detail" id="detail" cols="30" rows="5" class="form-control">
                                                            <?php echo $list_item[$i]['detail'] ?>
                                                         </textarea>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="modal-footer">
                                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                      Huỷ</button>
                                                   <button type="submit" name="product" value="edit" class="btn btn-primary">
                                                      Lưu</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </td>
                                 <td>
                                    <!-- Button trigger modal -->
                                    <button class="btn btn-danger " data-toggle="modal" data-target="#del-product-<?php echo $list_item[$i]['id'] ?>">
                                       Xoá
                                    </button>

                                    <!-- Modal -->
                                    <form action="?id=<?php echo $list_item[$i]['id'] ?>" method="post">
                                       <div class="modal fade" id="del-product-<?php echo $list_item[$i]['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h5 class="modal-title">Xác nhận</h5>
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                   </button>
                                                </div>
                                                <div class="modal-body">
                                                   Xoá sản phẩm <?php echo $list_item[$i]['name'] ?> ?
                                                </div>
                                                <div class="modal-footer">
                                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                                                   <button type="submit" class="btn btn-danger" name="product" value="del">Xoá</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </td>
                              </tr>
                           <?php endfor ?>
                        </tbody>
                     </table>
                  </div>
                  <div id="account" class="container tab-pane fade">
                     <h1><strong>Quản lý thành viên</strong></h1>
                     <form action="" method="post" class="was-validated">
                        <!-- Button trigger modal -->
                        <button type="button" class="send" data-toggle="modal" data-target="#add-account">
                           THÊM MỚI
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="add-account" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                           <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title">Thêm người dùng</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                                 <div class="modal-body">
                                    <div class="form-group">
                                       <label for="name">Họ và tên</label>
                                       <input type="text" name="name" id="name" class="form-control" required autocomplete="new-password">
                                    </div>
                                    <div class="form-group">
                                       <label for="user_name">Tên tài khoản</label>
                                       <input type="text" name="user_name" id="user_name" class="form-control" required autocomplete="new-password">
                                    </div>
                                    <div class="form-group">
                                       <label for="password">Mật khẩu</label>
                                       <input type="password" name="password" id="password" class="form-control" required autocomplete="new-password">
                                    </div>
                                    <div class="form-group">
                                       <label for="email">Email</label>
                                       <input type="email" name="email" id="email" class="form-control" required autocomplete="new-password">
                                    </div>
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                       Huỷ</button>
                                    <button type="submit" name="account" value="add" class="btn btn-primary">
                                       Lưu</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                     <table class="table table-striped">
                        <thead class="thead-light">
                           <tr>
                              <th>STT</th>
                              <th>ID</th>
                              <th>Họ và tên</th>
                              <th>Tên tài khoản</th>
                              <th>Email</th>
                              <th>Vai trò</th>
                              <th colspan="2">Thao tác</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           for ($i = 1; $i < count($list_user); $i++) : ?>
                              <tr>
                                 <td><?php echo $i + 1 ?></td>
                                 <td><?php echo $list_user[$i]['id'] ?></td>
                                 <td><?php echo $list_user[$i]['name'] ?></td>
                                 <td><?php echo $list_user[$i]['user_name'] ?></td>
                                 <td><?php echo $list_user[$i]['email'] ?></td>
                                 <td>
                                    <?php
                                    switch ($list_user[$i]['permission']) {
                                       case '0':
                                          echo "Khách hàng";
                                          break;
                                       case '1':
                                          echo "Người dùng";
                                          break;
                                       case '2':
                                          echo "Quản trị viên";
                                          break;
                                    } ?>
                                 </td>
                                 <td>
                                    <!-- Button trigger modal -->
                                    <button class="btn btn-danger " data-toggle="modal" data-target="#del-account-<?php echo $list_user[$i]['id'] ?>">
                                       Xoá
                                    </button>
                                    <!-- Modal -->
                                    <form action="?id=<?php echo $list_user[$i]['id'] ?>" method='post'>
                                       <div class="modal fade" id="del-account-<?php echo $list_user[$i]['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h5 class="modal-title">Xác nhận</h5>
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                   </button>
                                                </div>
                                                <div class="modal-body">
                                                   Xoá tài khoản <?php echo $list_user[$i]['user_name'] ?> ?
                                                </div>
                                                <div class="modal-footer">
                                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                                                   <button type="submit" name="account" value="del" class="btn btn-danger">Xoá</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </td>
                              </tr>
                           <?php endfor ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
<script src="./main.js"></script>

</html>