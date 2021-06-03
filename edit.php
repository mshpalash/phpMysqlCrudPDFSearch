
<?php

session_start();

if (!isset($_SESSION['login'])) {
   header("Location:login.php");
} 

$id= $_GET['id'];

$conn=mysqli_connect('localhost','root','','sms');

$sql="select * from students where id=$id";

$result=mysqli_query($conn,$sql);

$std=mysqli_fetch_assoc($result);

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
        <div class="col-md-3">
            <a class="btn btn-info" href="index.php">Students List</a>
        </div>
         <div class="col-md-9">
            <h2>Edit Student</h2>

            <form action="update.php?id=<?php echo $id?>" method="POST">
              <div class="form-group">
                <label for="name">Name : </label>
                <input required type="text" class="form-control" name="name" placeholder="Student Name" value="<?php echo $std['name']?>">
              </div>
              <div class="form-group">
                <label for="name">Age : </label>
                <input type="text" class="form-control" name="age" placeholder="Age" value="<?php echo $std['age']?>">
              </div>
              <div class="form-group">
                <label for="name">Roll : </label>
                <input type="text" class="form-control" name="roll" placeholder="Roll" value="<?php echo $std['roll']?>">
              </div>
              <div class="form-group">
                <label for="name">Address : </label>
                <input type="text" class="form-control" name="address" placeholder="Address" value="<?php echo $std['address']?>">
              </div>
              <div class="form-group">
                <label for="name">Mobile : </label>
                <input type="text" class="form-control" name="mobile" placeholder="Mobile" value="<?php echo $std['mobile']?>">
              </div>
              <button type="submit" class="btn btn-success">Submit</button>
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