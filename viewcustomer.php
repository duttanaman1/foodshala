<?php
include("header.php");
?>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="viewcustomer.php"><button class="btn btn-primary">Menu</button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="viewcustomer_cart.php"> <button class="btn btn-primary">View Cart</button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="viewcustomer_history.php"> <button class="btn btn-primary">Previous orders</button></a>
            </li>
        </ul>
    </div>
</nav>
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-2">
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Resturant</a>
                <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Type</a>
                <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Price</a>
            </div>
        </div>
        <div class="col-10">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <?php include('viewcustomerrest.php'); ?>
                </div>
                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                    <?php include('viewcustomertype.php'); ?>
                </div>
                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                    <?php include('viewcustomerprice.php'); ?>
                </div>
            </div>
        </div>
    </div>

</div>