<?php include("connect.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodShala</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-light bg-info fixed-top justify-content-between">
        <a class="navbar-brand">
            <h3 class="text-light">FOODSHALA</h3>
        </a>

        <div class="mr-2">
            <button class="btn btn-outline-success bg-light" type="button"><a href="login.php">Login</a></button>
            <button class="btn btn-outline-secondary bg-light" type="button"><a href="register.php">Register</a></button>
        </div>

    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="height:500px">
            <div class="carousel-item active">
                <img class="w-100 img-fluid" src="img/slide1.jpg" alt="First slide">

            </div>
            <div class="carousel-item">
                <img class="w-100 img-fluid" src="img/slide2.jpg" alt="Second slide">

            </div>
            <div class="carousel-item">
                <img class="w-100 img-fluid" src="img/slide3.jpg" alt="Third slide">

            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="container">
        <div class="card my-2 p-3">
            <h2>About</h2>
            <p class=ml-5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus optio alias accusantium, voluptatem est dignissimos id tenetur eaque, adipisci ullam nobis voluptate provident, reiciendis libero atque ipsam expedita. Aliquid, totam!</p>
        </div>
        <div class="card my-2 p-3">
            <h2>Vision</h2>
            <p class=ml-5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus optio alias accusantium, voluptatem est dignissimos id tenetur eaque, adipisci ullam nobis voluptate provident, reiciendis libero atque ipsam expedita. Aliquid, totam!</p>
        </div>
    </div>
    <?php include("footer.php"); ?>
</body>

</html>