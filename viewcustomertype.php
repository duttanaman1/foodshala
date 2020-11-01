<div class="list-group">
    <?php
    $foodsql = mysqli_query($con, "SELECT * FROM food order by type");
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
                    <h5 class="m-2">Type: <button class="btn btn-danger btn-sm">Non Veg</button></h5>
                <?php
                } else {
                ?>
                    <h5 class="m-2">Type: <button class="btn btn-success btn-sm">Veg</button></h5>
                <?php
                }
                ?>
                <form action="sqlcart_add.php" method="POST" class="w-75">
                    <input type="number" name="quan" style="width:50px" value="1">
                    <input type="hidden" name="foodid" value="<?php echo $food['id']; ?>">
                    <input type="hidden" name="foodname" value="<?php echo $food['name']; ?>">
                    <input type="hidden" name="restname" value="<?php echo $food['restname']; ?>">
                    <input type="hidden" name="custname" value="<?php echo $usr; ?>">
                    <input type="hidden" name="price" value="<?php echo $food['price']; ?>">
                    <input type="hidden" name="type" value="<?php echo $food['type']; ?>">
                    <input type="submit" value="Add to Cart" class="btn btn-warning" name="submit">
                </form>
            </a>
    <?php
        }
    }
    ?>
</div>