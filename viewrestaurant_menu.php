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


<div class="container mt-5">
    <div class="list-group">
        <?php
        $foodsql = mysqli_query($con, "SELECT * FROM food");
        if (mysqli_num_rows($foodsql)) {
            while ($food = mysqli_fetch_assoc($foodsql)) {
        ?>
                <a class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h2 class="mb-1"><?php echo $food['name'] ?></h2>
                        <?php
                        if ($food['type'] == "non") {
                        ?>
                            <button class="btn btn-outline-danger">
                                <h4><?php echo $food['price'] ?></h4>
                            </button>
                        <?php
                        } else {
                        ?>
                            <button class="btn btn-outline-success">
                                <h4><?php echo $food['price'] ?></h4>
                            </button>
                        <?php
                        }
                        ?>
                    </div>
                    <small><?php echo $food['restname'] ?></small>
                    <p class="mb-1"><?php echo $food['desp'] ?>
                        -----Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        <br>
                        Call at: <?php echo $food['phone']; ?>
                    </p>
                    <?php ?>
                    <?php
                    if ($food['type'] == "non") {
                    ?>
                        <h5 class="m-2">Type: <button class="btn btn-danger">Non Veg</button></h5>
                    <?php
                    } else {
                    ?>
                        <h5 class="m-2">Type: <button class="btn btn-success">Veg</button></h5>
                    <?php
                    }
                    ?>

                </a>
        <?php
            }
        }
        ?>
    </div>
</div>