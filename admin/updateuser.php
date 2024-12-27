<?php
include "config.php";
include "models/db.php";
include "models/user.php";
$user = new User();

//Xu ly them
$ad_id = $_POST['ad_id'];
$ad_user = $_POST['ad_user'];
$ad_pwd = $_POST['ad_pwd'];
$ad_name = $_POST['ad_name'];
$ad_email = $_POST['ad_email'];
$ad_phone = $_POST['ad_phone'];
$ad_pow = $_POST['ad_pow'];

$user->updateUser($ad_user,$ad_pwd,$ad_name,$ad_email,$ad_phone,$ad_pow,$ad_id);
header('location:users.php');