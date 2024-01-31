<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class p1{
            public function __construct(){
                echo "Start P1";
            }
            public function some(){
                echo "something";
            }
        }
        $p=new p1();
        echo "<br>";
        $p->some();
    ?>
</body>
</html>