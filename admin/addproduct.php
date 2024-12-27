<?php
include "config.php";
include "models/db.php";
include "models/product.php"; 
$product = new Product;

$product_img = $_FILES["fileUpload"]["name"];
$product_name = $_POST['product_name'];
$product_description = $_POST['product_description'];
$product_detail = $_POST['product_detail'];
$product_price = $_POST['product_price'];
$product_quantity = $_POST['product_quantity'];
$cat_id = $_POST['cat_id'];
$provider_id = $_POST['provider_id'];
$product->addProduct($product_img,$product_name,$product_description,$product_detail,$product_price,$product_quantity,$cat_id,$provider_id);

$target_dir = "../image/";
$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
move_uploaded_file($_FILES["fileUpload"]["tmp_name"],$target_file);
header('location:products.php');