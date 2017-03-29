<?php

//print_r($_POST);



if (isset($_POST['n_1'])) {
    if (isset($_POST['n_2'])) {

        $n_1 = $_POST['n_1'];
        $operations = $_POST['operations'];
        $n_2 = $_POST['n_2'];



        if (is_numeric($n_1) && is_numeric($n_2)) {
            switch ($operations) {
                case '+':
                    $rez = sum($n_1, $n_2);
                    $result = answer($n_1, $operations, $n_2, $rez);

                    break;
                case '-':
                    $rez = raz($n_1, $n_2);
                    $result = answer($n_1, $operations, $n_2, $rez);
                    break;
                case '*':
                    $rez = mult($n_1, $n_2);
                    $result = answer($n_1, $operations, $n_2, $rez);
                    break;
                case '/':
                    $rez = divide($n_1, $n_2);
                    if ($rez == false) {
                        $result = "деление на ноль невазможно";
                    } else {
                        $result = answer($n_1, $operations, $n_2, $rez);
                    }
                    break;
            }
        } else {
            $result = "Ведены не числа";
        }
    } else {
        $result = "Введите число 2";
    }
} else {
    $result = "Введите число 1";
}

function answer($n_1, $operations, $n_2, $rez) {
    $result = " $n_1 $operations $n_2 = $rez ";
    return $result;
}

function sum($n_1, $n_2) {
    $rez = $n_1 + $n_2;
    return $rez;

    // echo $rez;
}

function raz($n_1, $n_2) {
    $rez = $n_1 - $n_2;

    return $rez;
}

function mult($n_1, $n_2) {
    $rez = $n_1 * $n_2;
    return $rez;
}

function divide($n_1, $n_2) {
    if ($n_2 == 0) {
        $rez = false;
        return $rez;
    } else {
        $rez = $n_1 / $n_2;
        return $rez;
    }
}
