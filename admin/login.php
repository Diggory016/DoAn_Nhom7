<?php session_start();
ob_start();
?>
<?php 
include "config.php";
include "models/db.php";
include "models/user.php";
$pow =new User();
if(isset($_POST['dangnhap'])&&($_POST['dangnhap']))  
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $pow ->dangnhap($username,$password);
    var_dump($pow);
    $_SESSION['ad_pow']=$pow;      
    if($pow == 1) {
        header('location: index.php');
    }else
    {
        echo 'Sai Username hoac Password';
        header('location: login.php');
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="../img/logo.png" type="image/icon type">
    <style>
        /* Toàn bộ trang */
        body {
            background-image: url("../img/login.png");
            background-size: cover;
            color: #fff; /* Màu chữ trắng */
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Tiêu đề */
        h1 {
            color: black; /* Tiêu đề màu trắng */
            margin-bottom: 20px; /* Khoảng cách giữa tiêu đề và form */
        }

        /* Form login */
        form {
            background-color: #fff; /* Màu nền form trắng */
            color: #000; /* Màu chữ đen */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Tạo bóng */
            width: 300px;
        }

        /* Nhãn và ô nhập */
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        /* Nút submit */
        input[type="submit"] {
            background-color: #000; /* Nút màu đen */
            color: #fff; /* Chữ trắng */
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: red; /* Màu tối hơn khi hover */
            color: black;
        }
    </style>
</head>
<body>
    <h1>Login Form</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        Username <input type="text" name="username" id=""> <br>
        Password <input type="password" name="password" id=""> <br>
        <input type="submit" name="dangnhap" value="Login">
    </form>
</body>
</html>