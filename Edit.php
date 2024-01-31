<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <title>CRUD+ - Update Profile</title>
  </head>
  <body>

    <?php
    session_start();
    include 'db_connect.php';
    $naam="";
    $id=$_SESSION['sno'];
        if(isset($_POST['submit'])){

            // Getting Data from input
            $name=$_POST['name'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $gender=$_POST['gender'];
            $dob=$_POST['dob'];
            $naam=$name;

            $sql="UPDATE `users` SET `name` = '$name',`phone` = '$phone',`email` = '$email',`gender` = '$gender',`dob` = '$dob' WHERE `users`.`sno` = '$id'";

            $res = mysqli_query($conn, $sql);
            if ($res) {
                header("location: welcome.php?id=$id");
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    ?>
   
    <h1 class="text-center">Update Profile</h1>
    <div class="container">
    <form action="/php_tuto/edit.php" method='post'>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name" name="name" value="<?php echo $_SESSION['name']; ?>" oninput="this.value = this.value.replace(/[^a-z,A-Z ]/, '')">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Enter Phone" name="phone" value="<?php echo $_SESSION['phone']; ?>" oninput="this.value = this.value.replace(/[^0-9, ]/, '')">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email" name="email" readonly value="<?php echo $_SESSION['email']; ?>">
        </div>
        <div class="form-group">
            <label for="phone">Gender:</label>
            <div class="gen">

                Male <input type="radio" name="gender" value="male" aria-label="Radio button for following text input" Required>
                Female <input type="radio" name="gender" value="female" aria-label="Radio button for following text input" Required>
                Other <input type="radio" name="gender" value="other" aria-label="Radio button for following text input" Required>
            </div>
        </div>
        <div class="form-group">
            <label for="DOB">DOB</label>
            <input type="date" class="form-control" id="DOB" aria-describedby="emailHelp" placeholder="Enter DOB" name="dob" value="<?php echo $_SESSION['dob']; ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Update Profile</button>
    </form>
    </div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>