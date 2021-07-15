<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style type="text/css">
    
    </style>
</head>
<body>
    
<?php
    $var = 4;

    switch($var) {
        case 1:
            echo 'You pressed 1';
            break;
        case 2:
            echo 'You pressed 2';
            break;
        case 3:
            echo 'You pressed 3';
            break;
        case 4:
            echo 'You pressed 4';
            break;
        default:
            echo 'You pressed something else';
    }

    $var = "Apple";

    switch($var) {
        case "Apple":
            echo 'You pressed Apple';
            break;
        case "Mango":
            echo 'You pressed Mango';
            break;
        case "Orange":
            echo 'You pressed Orange';
            break;
        case "Pineapple":
            echo 'You pressed Pineapple';
            break;
        default:
            echo 'You pressed something else';
    }
?>

</body>
</html>