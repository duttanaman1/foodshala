<?php
include("connect.php");
if ($_POST['submit'] != null) {
    $id = $_POST['id'];
    mysqli_query($con, "Update orders set status='done' where id='$id' ");
    header("location: http://localhost/foodshala/viewrestaurant.php");
}
