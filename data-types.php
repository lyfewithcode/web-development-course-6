<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style type="text/css">
    
    </style>
</head>
<body>
    
<?php
    $string = "Bob"; // string
    $number = 15; // integer
    $float = -6.7876; // float
    echo $float;
    $bool = true; //boolean
    $myArray = array("John", "Bob", "Marie"); // array
    print_r($myArray);
    echo "<br>";
    var_dump($number);
    echo "<br>";
    var_dump($float);
    echo "<br>";
    var_dump($myArray);
    echo "<br>";
    var_dump($bool);
    // object
    $p = null; //null
    echo "<br>";
    var_dump($p);

    function myFunction() {
        echo "My Function";
    }
    $x = myFunction(); // resource
    
?>

</body>
</html>