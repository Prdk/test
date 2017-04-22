<?php
header('Content-Type: text/html; charset=utf-8');

echo "шось паказуе <br/>";

echo var_dump($_POST)."<br/>";

$host = 'diy.mysql.ukraine.com.ua';
$db_name = 'diy_alex';
$user = 'diy_alex';
$password = 'kdjgyvx5';

$conn = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);


if($conn){
    $musql_select = "SELECT * FROM users WHERE 1";
    $res = $conn->query($musql_select)->fetchALL(PDO::FETCH_ASSOC);
    echo "<pre>";
    echo var_dump($res);
    echo "</pre>";
}else{
    echo "Нет соединения";
}


function Select(){
    
}

function Delete(){
    
}


function AddNote(){
    
}