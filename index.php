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
 /*   echo "<b>PHP</b> Storm";
    echo "<br>Learning";
    echo "<br>\"Brackets\"";
    echo '<br>"Brackets2"';
*/


    const MY_AGE = 37;
    echo "MY_AGE Const: ".MY_AGE.'<br>';
    $number = 42; //int
    $num = 0.55; // float

    $str = "Variable: "; //string
    $bool = true; //bool

    $a = 0.5; //float
    $b = "0.5"; //string
    echo $a + floatval($b); // type conversion



    echo $str.$number.'. '.'Variable2: '.$num.'.';



?>
</body>
</html>
