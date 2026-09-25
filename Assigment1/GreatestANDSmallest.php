<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$num1 = 10;
$num2 = 25;
$num3 = 15;

if ($num1 > $num2 && $num1 > $num3) {
    echo "Greatest is $num1";
}
elseif ($num2 > $num1 && $num2 > $num3) {
    echo "Greatest is $num2";
}
else {
    echo "Greatest is $num3";
}

echo "<br>";

if ($num1 < $num2 && $num1 < $num3) {
    echo "Smallest is $num1";
}
elseif ($num2 < $num1 && $num2 < $num3) {
    echo "Smallest is $num2";
}
else {
    echo "Smallest is $num3";
}

?>

</body>
</html>