<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Arrays Functions

        // Count
        $arr=[1,2,3,4,5];
        $arr1=[6,7,8,9];
        echo count($arr)."<br>";
        foreach ($arr as $val) {
            echo $val." ";
        }

        // Array push -> add element in array
        echo array_push($arr,0)."<br>";
        foreach ($arr as $val) {
            echo $val." ";
        }

        // Array pop -> remove last element from array
        echo array_pop($arr)."<br>";
        foreach ($arr as $val) {
            echo $val." ";
        }

        // Array Shift ->remove first element from array
        echo array_shift($arr)."<br>";
        foreach ($arr as $val) {
            echo $val." ";
        }

        // Array Un_shift -> Add first element in array
        echo array_unshift($arr,12)."<br>";
        foreach ($arr as $val) {
           echo $val." ";
        }

        // Array merge -> merge two array
        // $result=array_merge($arr,$arr1);
        // echo var_dump($result);

        // array_reverse ->Array should be in reverse order
        // $result=array_reverse($arr);
        // echo var_dump($result);
        foreach ($arr as $val) {
            echo $val." ";
        }

        $arr1=["a"=>1,"b"=>2];
        // array_keys($arr1);
        // array_values($arr1);
        // in_array($arr1);
        // array_search(2,$arr1);

        echo "<br>";

       

    ?>
</body>
</html>