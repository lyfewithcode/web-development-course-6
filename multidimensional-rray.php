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

    // multi dimensional array
    $myArray2 = array(
                    "Name"=>"Yuda",
                    "Age"=>25,
                    "Phone"=>
                        array("Landline"=>123456,
                                "Mobile"=>
                                    array(
                                        123456,
                                        456789
                                    )
                                )
                            );
    echo '<br>';
    print_r($myArray2);
    echo '<br>';
    echo $myArray2["Phone"]["Mobile"][1];
    echo '<br>';
    echo '<pre>',print_r($myArray2),'</pre>';
?>

</body>
</html>