<?php
include("connect.php");

if ($_POST['submit'] != NULL) {
    $name = $_POST['username'];
    $password = $_POST['pass'];
    $sql = mysqli_query($con, "SELECT * FROM users where username='$name' AND password = '$password' ");
    if (mysqli_num_rows($sql) > 0) {
        $user = mysqli_fetch_assoc($sql);
        $_SESSION['name'] = $name;
        if ($user['type'] == "customer") {
            header("Location: http://localhost/foodshala/viewcustomer.php");
        } else {
            header("Location: http://localhost/foodshala/viewrestaurant.php");
        }
    } else {
        echo "<h1>ERROR</h1>";
    }
}
