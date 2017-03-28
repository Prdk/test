<?php

print_r($_POST);

//echo $rez;

if (isset($_POST['n_1'])) {
    if (isset($_POST['n_2'])) {
        
        $n_1 = $_POST['n_1'];
        $n_2 = $_POST['n_2'];
        $operations = $_POST['operations'];
        //global $rez;

        if (is_numeric($n_1) && is_numeric($n_2)) {
            switch ($operations) {
                case '+':
                    sum($n_1, $n_2);
                    //echo $rez;
                    //return $rez;
                    break;
                case '-':
                    raz($n_1, $n_2);
                    break;
                case '*':
                    mult($n_1, $n_2);
                    break;
                case '/':
                    divide($n_1, $n_2);
                    break;
            }
        } else {
            echo "Ведены не числа";
        }
    } else {
        echo "Введите число 2";
    }
} else {
    echo "Введите число 1";
}

function sum($n_1, $n_2) {
    $rez = $n_1 + $n_2;

    //return $rez;
    echo $rez;
}

function raz($n_1, $n_2) {
    $rez = $n_1 - $n_2;
    //return $rez;
    echo $rez;
}

function mult($n_1, $n_2) {
    $rez = $n_1 * $n_2;
    echo $rez;
}

function divide($n_1, $n_2) {
    if ($n_2 == 0) {
        echo "деление на ноль невазможно";
    } else {
        $rez = $n_1 / $n_2;
        echo $rez;
    }
}

//$rez = 5555;
//echo $rez;
