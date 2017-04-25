<?php
header('Content-Type: text/html; charset=utf-8');




$user = new User;
$user->name = 'lexa';
$user->age = 34;
$user->user();

$user2 = clone $user;
$user2->name = 'lexaxa';
echo $user->name . "<br/>";
echo $user2->name . "<br/>";

class User {

    public $name;
    public $age;

    public function user() {
        echo " код какойта <br/> ";
        echo $this->name . "<br/>";
        echo $this->age . "<br/>";
    }

}

echo "<br/>";
echo "<pre>";
var_dump($user);
echo "</pre>";
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
