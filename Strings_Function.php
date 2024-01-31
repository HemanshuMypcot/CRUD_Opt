<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //String Functions

        $title="Welcome to Hello World";

        // String length
        echo strlen($title)."<br>";                                 
        
        // Positions
        echo strpos($title,"to")."<br>";

        // Sub String 
        echo substr($title,0,9)."<br>";

        // Word Count
        echo str_word_count($title)."<br>";
        ?>
</body>
</html>