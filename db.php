<?php
header('Content-Type: text/html; charset=utf-8');
require_once 'function/query_processing.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Работа с базой данных</title>
    </head>
    <body>
        <fieldset>
            <legend align="center">Выборкаю</legend>
            <form action="db.php" method="POST" name="select">
                <p>Показать сущиствующие таблицы. <input type="submit" name="select" value="Show_tables"></p>
                <p>Показать все записи в таблице:
                    <input type="text" name="show_table" placeholder="имя таблицы">
                    <input type="submit" name="submit_show_table" value="Show_table">
                </p>
            </form>
        </fieldset>
        <br/>
        <fieldset>
            <legend align="center">Удаление записей из таблицы.</legend>
            <form action="db.php" method="POST" name="delete">
                <input type="text" name="name" placeholder="имя">
                <input type="email" name="email" placeholder="email">
                <input type="submit" name="del" value="delete">
            </form>

        </fieldset>

    </body>
</html>
