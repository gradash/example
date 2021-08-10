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

    $nums = array(4, 5, 7, -20, 10, 0, 8);
    $nums[1] = 45; //change int in massive
    echo $nums[1];

    echo "</br>";

    $arr = [3,6,'5',2,8,true,6,9,0.5,0.7,"56","arrr"];
    $arr[1] = "false";
    echo $arr[1];


    echo "</br>";


    $list = ["age" => 37, "name" => "Denis", "hobby" => "running"];
    echo $list["hobby"].'</br>';

    //mnogomernie massivi
    $matrix = [
            [4,5.6,6,7],
            [6,8],
            [8,5,4,23]
            ];

    echo $matrix[0][2]=7;//pereopredeljaem element massiva

?>
</body>
</html>