<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo "Prime numbers from 10 to 50 are:<br>";

for ($num = 10; $num <= 50; $num++) {
    $prime = true;

    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $prime = false;
            break;
        }
    }

    if ($prime) {
        echo $num . " ";
    }
}
?>
</body>
</html>