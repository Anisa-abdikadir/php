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
        "light"=> array(
            "red"=>"light red",
            "green" => "light green",
            "blue" => "light blue"
        ),
        "Normal" => array(
            "red" => "normal red",
            "green" => "normal green",
            "blue" => "normal blue"
        ),

        "Dark" => array (
            "red" => "dark red",
            "green" => "dark green" ,
            "blue" => "dark blue"
        ),
    );
    // foreach ($colors as $row => $colums){
    //     foreach($colums as $colum => $value){
    //         echo $value . "";
    //     }
    //     echo "<br>";
    // }
    
    ?>
   
    <table border="1">

    <tr>
        <th></th>
        <th>Red</th>
        <th>Green</th>
        <th>Blue</th>
    </tr>

    <tr>
        <td>Light</td>
        <td><?php echo $colors["light"]["red"]; ?></td>
        <td><?php echo $colors["light"]["green"]; ?></td>
        <td><?php echo $colors["light"]["blue"]; ?></td>
    </tr>

    <tr>
        <td>Normal</td>
        <td><?php echo $colors["Normal"]["red"]; ?></td>
        <td><?php echo $colors["Normal"]["green"]; ?></td>
        <td><?php echo $colors["Normal"]["blue"]; ?></td>
    </tr>

    <tr>
        <td>Dark</td>
        <td><?php echo $colors["Dark"]["red"]; ?></td>
        <td><?php echo $colors["Dark"]["green"]; ?></td>
        <td><?php echo $colors["Dark"]["blue"]; ?></td>
    </tr>

</table>
</body>
</html>