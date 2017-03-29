<?php

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
        
        <form action="calc2.php" method="POST" name="muform" align="center">
            
            <input type="text" placeholder="Введите число1" 
                   name="n_1" title="Число1" value="<?php //echo $n_1; ?>" >
            <select name="operations">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                
            </select>
            <input type="text" placeholder="Введите число2" 
                   name="n_2" title="Число2" value="<?php //echo $n_2; ?>"> = 
            <input type="text" name="result" size="30" readonly="" 
                   value="<?php  echo " $result "; ?>">
            <p>
                <input type="submit" name="otpr" value="ПОСЧИТАТЬ">
                <input type="button" name="erase" value="ОЧИСТИТЬ">
            </p>
            
            
            
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
