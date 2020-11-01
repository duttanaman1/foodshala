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
  <nav class="navbar navbar-light bg-info justify-content-between">
    <a class="navbar-brand" href="index.php">
      <button class="btn btn-outline-secondary bg-light" type="button">Back</button>
    </a>
  </nav>
  <div class="container my-5">
    <div class="mx-auto card w-50">
      <div class="card-header">
        <center>Login</center>
      </div>
      <div class="card-body">
        <form action="sqlregister.php" method="POST" class="p-3 mx-5">
          <div class="form-group">
            <label for="exampleFormControlInput1">Username</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="username" name="username">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput2">Password</label>
            <input type="password" class="form-control" id="exampleFormControlInput2" placeholder="password" name="pass">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput3">Number</label>
            <input type="number" class="form-control" id="exampleFormControlInput2" placeholder="number" name="num">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect2">Example multiple select</label>
            <select multiple class="form-control" id="exampleFormControlSelect2" name="type">
              <option value="customer">Customer</option>
              <option value="restaurant">Restaurant</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" value="Register" class="btn btn-success mx-auto" name="submit">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>