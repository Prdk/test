<?php
header('Content-Type: text/html; charset=utf-8');

class Test1{ 
    public $name;
    public $age;
    
    public function wiew(){
        echo $this -> name."Test1, 2 <br/>";
    }
    
}

class Test2{
    public $name;
    public $age;
    
    public function wiew(){
        echo $this -> name. "Test2, 2 <br/>";
        echo Test1() -> name;
    }
}

$test = new Test1();
$test -> name = 'lexa';
echo  $test -> name."Test1, 1 <br/>";
$test ->wiew();

$test2 = new Test2();
$test2 -> name = 'mixa';
echo $test2 -> name. "Test2, 1 <br/>";
$test2 ->wiew();

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Тренировка ООП</title>
        <meta charset="UTF-8">
    </head>
    <body>
        
        
        <?php
        for($i = 0; $i < 10; $i++){
            echo "<br/>";
        }
        ?>
        <div align="center">
            <a href="index.php"><h2>Венутся на главную</h2></a>
        </div>
    </body>
</html>
