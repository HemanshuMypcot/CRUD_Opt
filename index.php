<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form</title>
  </head>
  <body>
  <?php
        if($_SERVER["REQUEST_METHOD"]=='POST'){
            // Taking Data from FORM
            $name=$_POST['name'];
            $email=$_POST['email'];
            $pass=$_POST['pass'];

            // Connecting to the database
            $servername="localhost";
            $username="root";
            $password="";
            $database="dbhemanshu";                                                                                        

            // Create connection
            $conn=mysqli_connect($servername,$username,$password,$database);

            //create a db
            $sql="INSERT INTO `users` (`name`, `email`, `password`, `date`) VALUES ('$name', '$email', '$pass', current_timestamp())";
            $res=mysqli_query($conn,$sql);
            if($res){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> insert data
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
            }
            else{
                echo mysqli_error($conn);
            }
        }
    ?>
    <h1 class="text-center">Sign Up Page</h1>
    <div class="container">
    <form action="/php_tuto/index.php" method="post" >
        <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" id="exampleInputName1" aria-describedby="NameHelp" placeholder="Enter Name" name="name">      
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>