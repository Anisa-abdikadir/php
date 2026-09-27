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

$Student = array(
    array(
        "ID"      => "CA221",
        "Name"    => "fadir mumin",
        "Phone"   => "0645430403",
        "Address" => "Laba Dhagax, Wardhiigley"
    ),

    array(
        "ID"      => "CA223",
        "Name"    => "anisa abdikadir",
        "Phone"   => "064788601",
        "Address" => "dharkeyley"
    ),

    array(
        "ID"      => "CA221",
        "Name"    => "juweriya",
        "Phone"   => "0646990276",
        "Address" => "laba dhagax"
    )
);

echo "<table border='1'>";

echo "<tr>";
echo "<th></th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "</tr>";

foreach ($Student as $row) {

    echo "<tr>";

    echo "<td><b>" . $row["ID"] . "</b></td>";
    echo "<td>" . $row["Name"] . "</td>";
    echo "<td>" . $row["Phone"] . "</td>";
    echo "<td>" . $row["Address"] . "</td>";

    echo "</tr>";
}

echo "</table>";

?>
</body>
</html>
