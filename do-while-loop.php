<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style type="text/css">
    
    </style>
</head>
<body>
    
<?php
    $x = 1;
    while($x <= 10) {
        echo 'Hi <br>';
        // $x ++;
        // $x = x + 2;
        $x += 2;
    }
    
    $y = 1;
    do {
        echo 'I am do while loop<br>';
        $y += 2;
    } while($y <= 10);

?>

</body>
</html>