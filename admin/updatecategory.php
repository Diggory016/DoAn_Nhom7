<?php
include "config.php";
include "models/db.php";
include "models/category.php"; 
$cate = new Category;

$cat_id = $_POST['cat_id'];
$cat_name = $_POST['cat_name'];

$cate->updateCate($cat_name, $cat_id);

header('location:categories.php');