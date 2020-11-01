<?php
include("connect.php");
if ($_POST['submit'] != NULL) {
    $foodid = $_POST['foodid'];
    $foodname = $_POST['foodname'];
    $custname = $_POST['custname'];
    $restname = $_POST['restname'];
    $price = $_POST['price'];
    $quan = $_POST['quan'];
    $type = $_POST['type'];
    if (mysqli_query($con, "INSERT into orders values(null, '$foodid','$foodname','$type','$custname','$restname','$price','$quan','unpaid','null')")) {
        header("Location: http://localhost/foodshala/viewcustomer.php");
    } else {
        echo "error";
    }
}
