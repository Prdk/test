<?php

$a = array( "m" => array ("basa", "peta", "gena", "dima"),
            "q" => array ("sbeta", "lena", "kata", "mana"),
              );

$b = array('21','32', '43', '52');


echo "<pre>";
print_r($a);
echo "</pre>";


echo "<table border='2'>";
echo "<tr>";
foreach($a as $k => $v){
    echo "<tr>";
    echo "<td>".$k."</td>";
    
    
    foreach($v as $k1 => $v1){
        
        echo "<td>".$v1."</td>";
        
    }
   echo "</tr>";
}



echo "</table>";
echo "<pre>";
echo "print_r[POST]";
echo "</pre>";
echo "<br>";
echo "<br>";
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>учеба</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <br>
        <br>
        
        <form action="newTest.php" method="POST">
            <p><label>Введите имя: <input tupe="text" name="name" title="введите имя"></label></p>
            <p><label>Введите пароль: <input tupe="text" name="password" title="Введите пароль"></label></P>
            <p><input tupe="submit" value="нажми меня"></P>
        </form>
        
    
    
    
    
    <a href="index.php" title="Вернутся на главную" id="nazad"><h1>Вернутся на главную</h1></a>
    </body>
    
</html>

