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
    $y = "5";
    
    if($x == $y) {
        // echo 'Both are having same values<br>';
        if($x === $y) {
            echo 'Both are identical';
        } else {
            echo 'Both are having same values but are not of same type';
        }
    } else {
        // this part will not execute for our condition 
    }

?>

</body>
</html>