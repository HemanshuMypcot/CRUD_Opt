<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <title>CRUD+ - Login</title>
  </head>
  <body>
    <!-- Navbar -->
    <?php include'navbar.php' ?>
    <?php
        $login=false;
        $showError=false;
        if($_SERVER["REQUEST_METHOD"]=="POST"){
          $user=$_POST['uname'];
          $pass=$_POST['upass'];
          // connecting to database
          $servername="localhost";
          $username="root";
          $password="";
          $database="dbhemanshu";

          //create a connection
          $conn =mysqli_connect($servername,$username,$password,$database);

          $sql="select * from users where username='$user' AND password='$pass'";
          $res=mysqli_query($conn,$sql);
          $num=mysqli_num_rows($res);
          $data=mysqli_fetch_assoc($res);
          if($num==1){
            $login=true;
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$user;
            $_SESSION['sno']=$data['sno'];
            $_SESSION['name']=$data['name'];
            $_SESSION['phone']=$data['phone'];
            $_SESSION['email']=$data['email'];
            $_SESSION['gender']=$data['gender'];
            $_SESSION['dob']=$data['dob'];

            header("location: welcome.php?id=" . $_SESSION['sno']);
          }
         
          if($login)
          {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Logged in Successfully!!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
          }
          else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Invalid credantials.</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
          }
        }
    ?>
    <!-- Login Page -->
    <h1 class="text-center">Login Page</h1>
    <div class="container">
    <form action="/php_tuto/login.php" method="post">
        <div class="form-group">
            <label for="exampleInputName1">username</label>
            <input type="text" class="form-control" id="exampleInputName1" aria-describedby="NameHelp" placeholder="Enter Username" name="uname" oninput="this.value = this.value.replace(/[^a-z,A-Z,0-9,@ ]/, '')" Required>      
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="upass" oninput="this.value=this.value.replace(/[^a-z,A-Z,0-9,@ ]/, '')" Required>
        </div>
        <button type="submit" class="btn btn-primary">Log In</button>
    </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>