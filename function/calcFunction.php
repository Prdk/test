<?php

print_r($_POST);
$result = $rez;
echo $rez;
echo "<br/>";
echo $result;

if (!empty($_POST['n_1'])) {
    if (!empty($_POST['n_2'])) {
        $n_1 = $_POST['n_1'];
        $n_2 = $_POST['n_2'];
        $operations = $_POST['operations'];
        
        if(is_numeric($n_1) && is_numeric($n_2)){
            operation($operations);
        }else{
            echo "Ведены не числа";
        }
    } else {
        echo "Введите число 2";
    }
} else {
    echo "Введите число 1";
}

function operation($operations){
    switch ($operations){
        case '+':
            sum($n_1,$n_2);
            return $rez;
            break;


    }
}

function sum($n_1,$n_2){
    $rez = $n_1 + $n_2;
    return $rez;
}
