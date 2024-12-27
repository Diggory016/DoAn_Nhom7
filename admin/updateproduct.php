<?php
include "config.php";
include "models/db.php";
include "models/product.php";
$product = new Product;

$product_id = $_POST['product_id'];
$product_img = isset($_FILES["fileUpload"]["name"]) ? $_FILES["fileUpload"]["name"] : "";
$product_name = $_POST['product_name'];
$product_description = $_POST['product_description'];
$product_detail = $_POST['product_detail'];
$product_price = $_POST['product_price'];
$product_quantity = $_POST['product_quantity'];
$cat_id = $_POST['cat_id'];
$provider_id = $_POST['provider_id'];
$product->updateProduct($product_img, $product_name, $product_description, $product_detail, $product_price, $product_quantity, $cat_id, $provider_id, $product_id);

if (isset($_FILES['fileUpload'])) {
    $target_dir = "../image/";
    $target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
    move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file);
} else {
    echo "ko upload duoc";
}

header('location:products.php');
