<?php
include "config.php";
include "models/db.php";
include "models/category.php";
$cate = new Category();

//Xu ly them
$cat_name = $_POST['cat_name'];

$cate->addCate($cat_name);
header('location:categories.php');