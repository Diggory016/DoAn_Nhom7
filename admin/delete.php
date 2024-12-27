<?php
include "config.php";
include "models/db.php";
include "models/product.php";
include "models/category.php";
include "models/provider.php";
include "models/user.php";
$product = new Product();
$cate = new Category();
$provider = new Provider();
$user = new User();

if (isset($_GET['product_id'])) {
    $id = $_GET['product_id'];
    $product->delete($id);
    header("location: products.php");
} elseif (isset($_GET['cat_id'])) {
    $id = $_GET['cat_id'];
    $cate->deleteCate($id);
    header("location: categories.php");
} elseif (isset($_GET['provider_id'])) {
    $id = $_GET['provider_id'];
    $provider->deleteProvider($id);
    header("location: providers.php");
} elseif (isset($_GET['ad_id'])) {
    $id = $_GET['ad_id'];
    $user->deleteUser($id);
    header("location: users.php");
}
