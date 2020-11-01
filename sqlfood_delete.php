<?php
include("connect.php");
if ($_POST['submit'] != NULL) {
    $id = $_POST['id'];
    mysqli_query($con, "DELETE FROM `food` WHERE id='$id' ");
    header("Location: http://localhost/foodshala/viewrestaurant_edit.php");
}
