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
                <a class="nav-link" href="viewrestaurant.php">Orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="viewrestaurant_edit.php">Edit Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="viewrestaurant_menu.php">All Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="viewrestaurant_history.php">History</a>
            </li>

        </ul>
    </div>
</nav>


<div class="conatiner m-5">
    <div class="card">
        <div class="card-header">
            Orders
        </div>
        <div class="card-body">
            <div class="list-group">

                <?php
                $ordersql = mysqli_query($con, "SELECT * FROM orders where restname='$usr' and status='paid' order by datetime desc");
                if (mysqli_num_rows($ordersql)) {
                    while ($order = mysqli_fetch_assoc($ordersql)) {
                ?>
                        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h2 class="mb-1"><?php echo $order['foodname'] ?></h2>
                                <?php
                                if ($order['foodtype'] == "non") {
                                ?>
                                    <button class="btn btn-outline-danger">
                                        <h4><?php echo $order['quantity'] . ' X' . $order['price']; ?></h4>
                                    </button>
                                <?php
                                } else {
                                ?>
                                    <button class="btn btn-outline-success">
                                        <h4><?php echo $order['quantity'] . ' X' . $order['price']; ?></h4>
                                    </button>
                                <?php
                                }
                                ?>
                            </div>
                            <p class="mb-1">
                                <?php
                                $ordfood = $order['foodname'];
                                echo $ordfood;
                                $food = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM food where name='$ordfood' "));
                                echo $food['desp'];
                                ?>
                                -----------Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </p>
                            <h5>Customer: <?php echo $order['custname']; ?>
                                Phone: <button class="btn btn-info btn-sm">
                                    <?php
                                    $usrname = $order['custname'];
                                    $mob = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users where username='$usrname' "));
                                    echo $mob['number'];
                                    ?>
                                </button></h5>
                            <form action="sqlcart_done.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $order['id']; ?>">
                                <input type="submit" value="Order Done?" name="submit" class="btn btn-warning btn-lg">
                            </form>
                        </a>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>