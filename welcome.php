<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <title>CRUD+ - Welcome</title>
  </head>
  <body>
    <?php
        session_start();
        if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true) {
            header("location: login.php");
            exit;
        } 
        // changed here
        $id=$_SESSION['sno']; 
        include 'db_connect.php';
        $sql="select * from `users` where sno ='$id'";
        $res=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($res);

    ?>
    <!-- Displaying Data -->
    <a href="/php_tuto/logout.php" class="btn btn btn-primary float-right mr-3">Logout</a>
    <div class="jumbotron">
        <h1 class="display-4"><?php echo $row['name']; ?></h1>
        <p class="lead"><b>Phone: </b><?php echo $row['phone']; ?></p>
        <p class="lead"><b>Email: </b><?php echo $row['email']; ?></p>
        <p class="lead"><b>Gender: </b><?php echo $row['gender']; ?></p>
        <p class="lead"><b>Date Of Birth: </b><?php echo $row['dob']; ?></p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="edit.php?update=<?php echo $_SESSION['sno']; ?> " role="button">Edit</a>
        <a class="btn btn-danger btn-lg" href="delete.php?deleteId=<?php echo $_SESSION['sno']; ?> " role="button">Delete</a>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS --> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>