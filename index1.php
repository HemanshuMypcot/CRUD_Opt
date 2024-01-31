<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
       
        
            // Connecting to the database
            $servername="localhost";
            $username="root";
            $password="";
            $database="dbhemanshu";                                                                                        

            // Create connection
            $conn=mysqli_connect($servername,$username,$password,$database);

            //create a db
            $sql="select * from `users`";

            $res=mysqli_query($conn,$sql);
            $num= mysqli_num_rows($res);
            if($num>0){
                // for ($i=1; $i <=$num; $i++) { 
                //     # code...
                //     echo var_dump(mysqli_fetch_assoc($res));
                //     echo "<br>";
                //     echo "<br>";
                // }

                while ($row =mysqli_fetch_assoc($res)) {
                    echo $row['name']." ".$row['username'];
                    echo "<br>";
                    echo "<br>";
                }
            }



        
    ?>
</body>
</html>