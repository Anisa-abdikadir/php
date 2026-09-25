<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$num = 7;
$prime = true;

if ($num <= 1) {
    $prime = false;
} else {
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $prime = false;
            break;
        }
    }
}

if ($prime) {
    echo "$num is a Prime Number";
} else {
    echo "$num is a Non-Prime Number";
}
?>
</body>
</html>