<?php
header('Content-Type: text/html; charset=utf-8');

echo "шось паказуе <br/>";

echo var_dump($_POST)."<br/>";

$host = 'diy.mysql.ukraine.com.ua';
$db_name = 'diy_alex';
$user = 'diy_alex';
$password = 'kdjgyvx5';

$conn = new PDO("mysql:host=$host;dbname=$db_name", $user, $password);



echo Select($conn);

//выборка
function Select($conn){
  $sqlSelect = "SELECT * FROM users WHERE 1";
  $select = $conn -> query($sqlSelect);
  while($select2 = $select -> fetch(PDO::FETCH_ASSOC)){
      
      echo $select2['name']."<br/>";
      echo $select2['email']."<br/>";
  }
  //echo var_dump($select2);
  
}

//удаление записи
function Delete(){       
    
}

//добавление записи
function AddNote(){     
    
}