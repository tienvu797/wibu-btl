<?php
session_start();
// $_SESSION['permission'] = 1;
// $_SESSION['id_user'] = 2;
if (empty($_SESSION)) {
  session_destroy();
  header('location:login.php');
}
