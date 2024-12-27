<?php
// Khởi tạo session
session_start();

// Hủy session
session_unset();
session_destroy();

// Chuyển hướng về trang login.php
header('Location: login.php');
exit;
?>