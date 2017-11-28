<?php

$a = array( "m" => array ("basa", "peta", "gena", "dima"),
            "q" => array ("sbeta", "lena", "kata", "mana"),
              );

$b = array('21','32', '43', '52');


echo "<pre>";
print_r($a);
echo "</pre>";


echo "<table border='2'>";

foreach ($a as $k => $v){
    echo "<tr>";
    echo "<td>".$k."</td>";
    echo "<td>".$v."</td>";
    foreach ($v as $k1 => $v1){
        echo "<td>".$v1."</td>";
    }
    echo "</tr>";
    
}
    


echo "</table>";

echo "<br>";
echo "<br>";
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <br>
        <br>
        <p><h3>бред</h3></p>
    
    
    <a href="index.php" title="Вернутся на главную" id="nazad" class="d"><h1>Вернутся на главную</h1></a>
    </body>
    
</html>

