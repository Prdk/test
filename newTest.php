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
print_r($_POST);
echo "</pre>";

?>


