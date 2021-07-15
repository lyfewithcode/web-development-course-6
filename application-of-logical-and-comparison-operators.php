<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style type="text/css">
    
    </style>
</head>
<body>
    
<?php
    $x = 5;
    $y = 10;
    $z = 15;
    $p = 5;

    if($z >= $x) {
        echo "$z is greeater than $x<br>";
    }

    if($p >= $x) {
        echo "$p is greter than equal to $x<br>";
    }

    if(($z > $x) && ($z > $y)) {
        echo "$z is greatest number<br>";
    }

    if(($z > $x) || ($z > $y)) {
        echo "$z is greatest number";
    }

    /*
    and - check both the condition are true (true if both are true)
    or - true, if one of them is true
    xor - 0,0 - false, false => false; true xor false => true; false xor true => true; true xor true => false
    one should be true
    */

?>

</body>
</html>