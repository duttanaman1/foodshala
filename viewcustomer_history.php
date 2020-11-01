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
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Cart Items
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Food Name</th>
                        <th scope="col">Resturant Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sum = 0;
                    $ordersql = mysqli_query($con, "Select * from orders where custname='$usr' and status='done' ");
                    if (mysqli_num_rows($ordersql)) {
                        while ($orders = mysqli_fetch_assoc($ordersql)) {
                    ?>
                            <?php
                            if ($orders['foodtype'] == 'non') {
                            ?>
                                <tr class="text-danger">
                                <?php
                            } else {
                                ?>
                                <tr class="text-success">
                                <?php
                            }
                                ?>
                                <td><?php echo $orders['foodname']; ?></td>
                                <td><?php echo $orders['restname']; ?></td>
                                <td><?php echo $orders['quantity']; ?></td>
                                <?php
                                $sum = $sum + $orders['price'] * $orders['quantity'];
                                if ($orders['foodtype'] == 'non') {
                                ?>
                                    <td><button class="btn btn-danger"><?php echo $orders['price'] * $orders['quantity']; ?></button></td>
                                <?php
                                } else {
                                ?>
                                    <td><button class="btn btn-success"><?php echo $orders['price'] * $orders['quantity']; ?></button></td>
                                <?php
                                }
                                ?>
                                </tr>
                        <?php
                        }
                    }
                        ?>

                </tbody>
            </table>
        </div>

    </div>
</div>