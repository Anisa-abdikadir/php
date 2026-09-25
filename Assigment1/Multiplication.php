<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        h2 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            margin: auto;
        }

        td {
            border: 1px solid black;
            padding: 4px;
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>Multiplication Table</h2>

    <table>
        <?php
        for ($i = 1; $i <= 12; $i++) {
            echo "<tr>";

            for ($j = 1; $j <= 12; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }

            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>