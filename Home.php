<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
     echo "hello word";
    print "welcome to php ";

    
    $name="anisa";
    echo  "my name is $name";
    echo "<br>";
    //const
    define ("AGE","the age must be");
    echo("welcome AGE"); //MArkan only wuxu so ara welcome AGE
    echo "welcome",AGE; //output willbe AGE wx kujire and display wx kujiro


    // $Age =20;
    // $Grade =4;

    // if($Age > 20);
    //     elseif ($Grade <2)

    //     echo "poor";


    // else
    //     echo "adualt";

    // if($Age >20){

    // }elseif ($Grade <2)
    // echo "poor";
    // else
    //     echo "adualt";

    

    switch ($Age >20){
    case ($Grade);
    echo "poor";

    default :

    echo "adualt";
    }

    $Marks = 87;

    switch ($Marks>=90)
    {
        echo "excellent";
        break;
        case $Marks >=80:
        echo "very good";
        case ($Marks >=50)
        echo "minimal pass";

        default :
                echo "not pass";

    }




$Answer = "N";

switch ($Answer) {

    case "Y":
    case "y":
        echo "The answer was yes";
        break;

    case "N":
    case "n":
        echo "The answer was no";
        break;

    default:
        echo "Inv";
}



    ?>
</body>
</html>