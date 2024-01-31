<?php
            session_start();
            if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true) {
                header("location: login.php");
                exit;
            }
        ?>
<?php
    if(isset($_GET['deleteId'])){
        include 'db_connect.php';
        $id=$_GET['deleteId'];

        $sql="delete from `users` where sno='$id'";
        $res=mysqli_query($conn,$sql);
        if($res){
           header('location: login.php');
        }
        else{
            echo mysqli_error($res);
        }
    }
?>