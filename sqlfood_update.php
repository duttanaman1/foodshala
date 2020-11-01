<?php
include("connect.php");

if ($_POST['submit'] != NULL) {
    $restname = $_POST['restname'];
    $name = $_POST['name'];
    $desp = $_POST['desp'];
    $price = $_POST['price'];
    $type = $_POST['type'];

    if (mysqli_query($con, "UPDATE `food` set `desp`='$desp',`price`='$price',`type`='$type' where restname='$restname' and name='$name' ")) {
        header("Location: http://localhost/foodshala/viewrestaurant_edit.php");
    }
}
