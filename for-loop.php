<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style type="text/css">
    
    </style>
</head>
<body>
    
<?php
    for($x = 1; $x <= 10; $x ++) {
        echo 'I am from for loop<br>';
    }

    $x = 1;
    for(; $x <= 10;) {
        echo 'I am from for loop 2<br>';
        $x += 2;
    }
?>

</body>
</html>