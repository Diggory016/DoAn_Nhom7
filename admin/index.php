<?php session_start();
if (!isset($_SESSION['ad_pow'])) {
    header('Location: login.php');
    exit;
} ?>
<?php
include "header.php";
include "sidebar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    
</head>

<body>

    <!-- BEGIN CONTENT -->
    <div id="content">
        <h1><a href="index.php">
                <img width="" src="../img/Ridelite.png" alt="">
            </a></h1>
        </div>
    </div>
    <!-- END CONTENT -->

</body>

</html>


<?php include "footer.php" ?>