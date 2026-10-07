<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    
  
    // $info =array (
    //         "anisa",
    //         "salma",
    //         "nihaam",
    //         100
        
    // );
    // if(is_array($info)){
    //     echo "yes is array";

    // }else 
    // echo "no array";

    // // specific array value

    // if(in_array("100",$info)){
    //     echo "<br> anisa exists in the array";
    // }
    // else{
    //     echo "<br> not exist";
    // };

           // specific array key
        //    if(in_array("salma",$info[1]))
        //     {
        //         echo "yes anisa exist array";
        //     }else{
        //         echo "no exist";
        //     }

        //     echo "the elemnt is ".count($info)."<br>";

        echo "<br> ";
    // shuffle
    // echo "<br> shuffle";
    //  $a = "The quick brown fox jumps over the lazy dog";
    //  $b = explode(" ",$a);

    //     shuffle($b);
    //         echo "<pre>";
    //         print_r($b);
    //         echo "</pre>";

    //         function factorial($a)
    //         {
    //             $result = 1;

    //             for ($i = 1; $i <= $a; $i++)
    //                 $result *= $i;

    //             return $result;
    //         }


// Array_Merge 
// echo "<br> Array_Merge ";

// $a1 = array(1, 2, 3);
// $a2 = array(1, 5, 6);
// $a3 = array_merge($a1, $a2);
// echo "<pre>";
// print_r($a3);
// echo "</pre>";

// $p = array_reverse($a3);

// echo "<pre>";
// print_r($p);
// echo "</pre>";

echo "<br> push";
$numbers = array(1, 2, 3);

array_push($numbers, 4);

print_r($numbers);
array_pop($numbers);
echo "<br> array pop";
print_r($numbers);


$last = end($numbers);
echo "<br> end";
print_r($numbers);







  
    ?>
</body>
</html>