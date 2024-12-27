<?php 
	$mode = getIndex('mode','product');
	if($mode=='user')
		include 'module/users/index.php';
	else if($mode=='product')
		include 'module/products/index.php';
	else if($mode == 'detail')
		include 'module/comments/index.php';
	else if($mode == 'news')
		include 'module/news/index.php';
	else if($mode == 'order')
		include 'module/orders/index.php';
	else if($mode =='exit'){
		if(isset($_SESSION['user'])){
			unset($_SESSION['user']);
			unset($_SESSION['wishlist']);
			header("location:index.php");
		}
	}
 ?>