<?php
session_start();
$_SESSION['permission'] = 1;
$_SESSION['id_user'] = 2;
if (
  // empty($_SESSION['id']) || 
  $_SESSION['permission'] == 0
) header('location:login.php');