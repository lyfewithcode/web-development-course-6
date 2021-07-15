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
    $z = 10;
    if($x == $z) {
        echo 'Yup, both are having same values<br>';
    } elseif($x == $y) {
        echo $x.' and '.$y.' are having same values';
    } else {
        echo 'Yo yo';
    }

?>

</body>
</html>