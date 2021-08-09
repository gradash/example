<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php


    $a = 55;
    $str = "Helloworld";

    if($str != "Helloworld") {
        echo "first";
    } else if($a === 5) {
        echo "second";
    }
    else {
        echo "third";
    }


    if($a = 55 && $str = "Helloworld"){
        echo "</br>two conditions</br>";


        echo ("007" === "7" ? "EQUAL" : "not equal");
    }













?>
</body>
</html>