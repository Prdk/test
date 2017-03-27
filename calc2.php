<?php


//print_r($POST);
require_once 'function/calcFunction.php';

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Калькулятор2</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1 align="center">Калькулятор2</h1>
        
        <form action="calc2.php" method="POST" name="muform">
            
            <label>Число1:<input type="text" placeholder="Введите число1" 
                                 name="n_1" title="Число1"></label>
            <select name="operations">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                <option></option>
            </select>
            <label>Число2:<input type="text" placeholder="Введите число2" 
                                 name="n_2" title="Число2"></label>
            <p><input type="submit" name="otpr"></p>
            
            
        </form>
        
        
        
        
        
        
        <br/>
        <br/>
        <div align="center">
            <button>
                <a href="index.php">Вернутся на главную</a>
            </button>
        </div>
        
    </body>


</html>
