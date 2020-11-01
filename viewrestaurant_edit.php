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

<div class="conatiner m-2">
    <div class="row">
        <div class="col-3">
            <div class="list-group" id="myList" role="tablist">
                <a class="list-group-item list-group-item-action bg-success" data-toggle="list" href="#add" role="tab">ADD</a>
                <a class="list-group-item list-group-item-action bg-warning" data-toggle="list" href="#update" role="tab">UPDATE</a>
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content">
                <div class="tab-pane " id="add" role="tabpanel">
                    <form action="sqlfood_add.php" method="POST" class="form-group">
                        <div class="row w-75 border p-3" style="background-color:rgb(0, 255, 30,0.5)">
                            <div class="col-md-4">Food name</div>
                            <div class="col-md-8"><input type="text" name="name" class="form-control"><br></div>
                            <div class="col-md-2">Price</div>
                            <div class="col-md-4"> <input type="Number" name="price" class="form-control"></div>
                            <div class="col-md-2">type</div>
                            <div class="col-md-4">
                                <select name="type" class="form-control">
                                    <option value="non">Non Veg</option>
                                    <option value="veg"> Veg</option>
                                </select><br>
                            </div>
                            <div class="col-md-4">Phone</div>
                            <div class="col-md-8"><input type="Number" name="phone" class="form-control"><br></div>
                            <div class="col-md-4">Description</div>
                            <div class="col-md-8"><textarea name="desp" rows="3" class="form-control"></textarea></div>
                            <input type="hidden" value="<?php echo $usr; ?>" name="restname">

                            <input type="submit" value="Add" class="btn btn-success" name="submit">
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="update" role="tabpanel">
                    <form action="sqlfood_update.php" method="POST" class="form-group">
                        <div class="row w-75 border p-3" style="background-color:rgb(255, 238, 0,0.5)">
                            <div class="col-md-4">Food name</div>
                            <div class="col-md-8">
                                <select name="name" class="form-control">
                                    <?php
                                    $foodsql = mysqli_query($con, "SELECT * FROM food where restname='$usr'");
                                    if (mysqli_num_rows($foodsql)) {
                                        while ($food = mysqli_fetch_assoc($foodsql)) {
                                    ?>
                                            <option value="<?php echo $food['name']; ?>"><?php echo $food['name']; ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select><br></div>
                            <div class="col-md-2">Price</div>
                            <div class="col-md-4"> <input type="Number" name="price" class="form-control"></div>
                            <div class="col-md-2">type</div>
                            <div class="col-md-4">
                                <select name="type" class="form-control">
                                    <option value="non">Non Veg</option>
                                    <option value="veg"> Veg</option>
                                </select><br>
                            </div>
                            <div class="col-md-4">Description</div>
                            <div class="col-md-8"><textarea name="desp" rows="3" class="form-control"></textarea></div>
                            <input type="hidden" value="<?php echo $usr; ?>" name="restname">

                            <input type="submit" value="Update" class="btn btn-warning" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $('#myList a:last-child').tab('show')
        })
    </script>
</div>
<div class="container mt-5">
    <div class="list-group">
        <?php
        $foodsql = mysqli_query($con, "SELECT * FROM food where restname='$usr'");
        if (mysqli_num_rows($foodsql)) {
            while ($food = mysqli_fetch_assoc($foodsql)) {
        ?>
                <a class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h2 class="mb-1"><?php echo $food['name'] ?></h2>
                        <form action="sqlfood_delete.php" method="POST">
                            <input type="submit" value="Delete" class="btn btn-info" name="submit">
                            <input type="hidden" value="<?php echo $food['id']; ?>" name="id">
                        </form>

                    </div>
                    <p class="mb-1"><?php echo $food['desp'] ?>
                        -----Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        <br>


                        <?php ?>
                        <?php
                        if ($food['type'] == "non") {
                        ?>
                            Type: <button class="btn btn-danger btn-sm">Non Veg</button>
                        <?php
                        } else {
                        ?>
                            Type: <button class="btn btn-success btn-sm">Veg</button>
                        <?php
                        }
                        ?>
                        <?php
                        if ($food['type'] == "non") {
                        ?>
                            <button class="btn btn-outline-danger btn-sm">
                                <?php echo $food['price'] ?>
                            </button>
                        <?php
                        } else {
                        ?>
                            <button class="btn btn-outline-success btn-sm">
                                <?php echo $food['price'] ?>
                            </button>
                        <?php
                        }
                        ?>
                    </p>
                </a>
        <?php
            }
        }
        ?>
    </div>
</div>