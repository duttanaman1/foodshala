<?php
include("connect.php");

if ($_POST['submit'] != NULL) {
    $restname = $_POST['restname'];
    $name = $_POST['name'];
    $desp = $_POST['desp'];
    $price = $_POST['price'];
    $type = $_POST['type'];
    $phone = $_POST['phone'];
    if (mysqli_query($con, "INSERT INTO `food` values(null, '$restname','$name','$desp','$price','$type','$phone')")) {
        header("Location: http://localhost/foodshala/viewrestaurant_edit.php");
    }
}
