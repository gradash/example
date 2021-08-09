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

    $str="Hello";
    echo "VAR: $str";
    echo "<input type='text'></br>";


    $length = strlen($str);
    echo $length."</br>";
    $some = "    some text        ";
    echo strtoupper(trim($some))."</br>";
    echo strtolower($some)."</br>";

    echo md5("HelloWorld");



?>
</body>
</html>