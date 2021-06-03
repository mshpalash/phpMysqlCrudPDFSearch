
<?php

session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Add New Student</title>
  </head>
  <body>

<br><br><br>

<div class="container">
    <div class="row">

         <div class="col-md-6 col-md-offset-3">

 <?php if(isset($_SESSION['error'])){?>
        <div class="alert alert-warning" role="alert">
          <strong>warning!</strong> wrong email or password.
        </div>
        <?php }?>

         <?php if(isset($_SESSION['reg_msg'])){?>
        <div class="alert alert-success" role="alert">
          <strong>Success!</strong> <?php echo $_SESSION['reg_msg'];?>
        </div>
        <?php }?>

            <h2>Login</h2>

            <form action="confirmlogin.php" method="POST">
              <div class="form-group">
                <label for="Email">Email : </label>
                <input required type="Email" class="form-control" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="password">Password : </label>
                <input type="Password" class="form-control" name="password" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-success">Login</button>
              <a class="btn btn-link" href="registration.php">Create New Account</a>
            </form>
            
        </div>
    </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php unset($_SESSION['error']);?>
<?php unset($_SESSION['reg_msg']);?>