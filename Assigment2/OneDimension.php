<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);
     echo "<br> <br> diplay all elemnts of array <br>";

    foreach($numbers as $num){
        echo $num . "";
    }       

     echo "<br>";
     echo " <br>Calculate and print total of all elements ";

     $total =0;
     $evenTotal=0;
     $oddTotal = 0;
     
     foreach($numbers as $num){
        $total= $total + $num;

        if($num % 2 ===0){
            $evenTotal = $evenTotal+$num;

        }else{
            $oddTotal = $oddTotal + $num;
        }

     }
     echo "<br><br> total of all element is ". $total;
     echo "<br> total of all event is " . $evenTotal;
     echo "<br> total os all odd is  "  .  $oddTotal;

     echo "<br> <br>";

     $min = $numbers[0];
      $max = $numbers[0];

     foreach($numbers as $num){
        if($num <$min){
            $min =$num;
        }elseif($num >$max ){
            $max = $num;
        }
     }
     echo "<br> minimam element is ". $min;
     echo "<br> minimum possition is ";
     foreach ($numbers as $position => $num) {
    if ($num == $min) {
        echo $position . " ";
    }
}

     echo "<br>Maximum element: " . $max;
    echo "<br>Maximum positions: ";
    foreach ($numbers as $position => $num){
        if($num == $max){
            echo $position . "";
        }
    }


    ?>
</body>
</html>