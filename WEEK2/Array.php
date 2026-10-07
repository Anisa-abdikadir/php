<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

// Indexed Array

    // $info =array(
    //     "c1231115",
    //     "anisa abdikadir",
    //     20,
    //     "dharkeyley",
    //     "single"
    // );
    // echo "array value using for loop : <br>";
    // for($i=0; $i<count($info); $i++){
    //     echo $info[$i]. "<br>";
    // } 

    // $number= array(20,30,40);
    // $total =0;
    // echo "array element are : <br>";
    // foreach($number as $n)
    //     // echo ("$n ,") ;   //sinfle quetion hda galisid wx '' ku dhaxjiro kuso dabaca
    // //  balse hda "" dhahdid wuxu kuso bandhiga value uu hayo wx kujiro
    //     $total +=$n;

    //     echo "<br> total of element is : $total"; //ina () dhax gilisid qoralka waa option


//     $info = array (
//      "id"=>"c1231115",
//      "name"=>"ansia abdikadir aweis",
//      "age"=>20,
//      "address"=>"dharkeyley",
//      "status"=>"single",
//     "weight"=> 20
// ); 

//         echo "<pre>";
//         echo "Information about the person: <br>";
//         print_r($info);
//         // var_dump($info);  // wxy noqoshe data type and length
//         echo "</pre>";  //pre wuuxu ilalina spacing and formating

//         foreach($info as $I)
//             echo("$I <br>");

//         echo "<br> prin value and key <br>";
//         foreach ($info as $k =>$v)
//             echo "[$k] : [$v]";
//         echo "<br>";
//         foreach($info as $v)
//             echo " <br> obly value [$v]"


        // multidimnsional array
        $student = array (
            array ("salma abdikadir",2002,"dharkeyley", "618194011"),
            array("maxmed ibrahim awis", 2008, "afgiy","728722" ),

        );
        echo "prin key and value <br>";
        // foreach($student as $k)
        //     echo ("$k[0], $k[1], $k[2]<br>")

        // echo "Array elements are:<br>";

            foreach ($student as $s) {
                 foreach ($s as $v)
                     echo ("$v<br>");
            }

          


    ?>
</body>
</html>