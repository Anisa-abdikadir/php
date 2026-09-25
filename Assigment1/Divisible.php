<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$num = 15;

if ($num % 3 == 0 && $num % 5 == 0) {
    echo "Divisible by both 3 and 5";
}
elseif ($num % 3 == 0) {
    echo "Divisible by 3";
}
elseif ($num % 5 == 0) {
    echo "Divisible by 5";
}
else {
    echo "Not divisible by 3 or 5";
}

?>

</body>
</html>