<?php
include("connect.php");

if ($_POST['submit'] != NULL) {
    $name = $_POST['username'];
    $password = $_POST['pass'];
    $type = $_POST['type'];
    $num = $_POST['num'];
    if (mysqli_query($con, "INSERT INTO users VALUES (NULL,'$name','$password','$type','$num')")) {
        $_SESSION['name'] = $name;
        echo  $_SESSION['name'];
        if ($type == "customer") {
            header("Location: http://localhost/foodshala/viewcustomer.php");
        } else {
            header("Location: http://localhost/foodshala/viewrestaurant.php");
        }
    } else {
        echo "Error";
    }
}
