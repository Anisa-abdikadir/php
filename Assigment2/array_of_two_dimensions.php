<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
        table {
            margin: auto;
            text-align: center;
            margin-top: 200px;
            
        }
       
    </style>
</head>
<body>
   <?php

$colors = array(
    "Light" => array(
        "red" => "light red",
        "green" => "light green",
        "blue" => "light blue"
    ),

    "Normal" => array(
        "red" => "normal red",
        "green" => "normal green",
        "blue" => "normal blue"
    ),

    "Dark" => array(
        "red" => "dark red",
        "green" => "dark green",
        "blue" => "dark blue"
    )
);

echo "<table border='1'>";

echo "<tr>
        <th></th>
        <th>Red</th>
        <th>Green</th>
        <th>Blue</th>
      </tr>";

foreach ($colors as $row => $columns) {

    echo "<tr>";

    echo "<td><b>$row</b></td>";

    echo "<td>" . $columns["red"] . "</td>";
    echo "<td>" . $columns["green"] . "</td>";
    echo "<td>" . $columns["blue"] . "</td>";

    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>