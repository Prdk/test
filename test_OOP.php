<?php
header('Content-Type: text/html; charset=utf-8');

class Test {

    public $name;
    public $age;

    public function showName() {
        echo $this -> name. "Test <br/>";
    }

    public function getName() {
        $this->showName();
    }

}

class Test2 extends Test{
    public $name2;
    public $age2;
    
    public function showName2(){
        echo $this->name. " Test2 <br/> ";
        Test::getName();
    }
    
}

$test = new Test();
$test->name = 'user1';
$test ->getName();

$test2 = new Test2();
$test2 -> name = 'user2';
$test2 ->showName2();
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Тренировка ООП</title>
        <meta charset="UTF-8">
    </head>
    <body>


        <?php
        for ($i = 0; $i < 10; $i++) {
            echo "<br/>";
        }
        ?>
        <div align="center">
            <a href="index.php"><h2>Венутся на главную</h2></a>
        </div>
    </body>
</html>
