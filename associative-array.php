<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style type="text/css">
    
    </style>
</head>
<body>
    
<?php
    // indexed array
    $myArray = array("Yuda", "Raka", "Devi");
    print_r($myArray);
    echo '<br>';
    echo $myArray[0];

    // associative array
    $myArray1 = array("Name"=>"Yuda", "Age"=>25, "Phone"=>45678);
    echo '<br>';
    print_r($myArray1);
    echo $myArray1['Age'];
?>

</body>
</html>