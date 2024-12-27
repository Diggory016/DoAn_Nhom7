<?php
include "config.php";
include "models/db.php";
include "models/provider.php";
$provider = new Provider();

//Xu ly them
$provider_name = $_POST['provider_name'];
$provider_email = $_POST['provider_email'];
$provider_phone = $_POST['provider_phone'];

$provider->addProvider($provider_name,$provider_email,$provider_phone);
header('location:providers.php');