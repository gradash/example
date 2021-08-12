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
   /* for($i=100;$i>0;$i-=5){
        echo $i.'</br>';
    }


    $i = 1;
    while($i <= 10){
        echo $i.'</br>';
        $i++;
    }

    $i=100;
    do{
    echo $i;
    } while($i < 10);


    for ($el = 100; $el > 10; $el /= 2){
        if ($el<15)
            break;

        if($el%2 === 0)
            continue;

        echo $el.'</br>';
    }


    $list = [5,6,7,3,4,5];
    for($i = 0;$i < count($list); $i++)
        echo "Element $i: $list[$i]"."</br>";
*/

   // $list = ["age" => 30,"name" => "Denis","hobby" => "football"];
    $arr = [5,67,78,4,3,6];
    foreach ($arr as $value)
        echo "Value: $value"."</br>";

    //foreach ($list as $item => $value){
   //     echo "Key: $item. Value $value.</br>";
   // }

?>
</body>
</html>