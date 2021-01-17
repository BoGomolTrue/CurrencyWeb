
<?php
/*Подключение к Базе Данных- */
    $host="localhost"; //Хост
    $login="mysql"; //Логин от базы данных
    $pass="mysql"; //Пароль от базы данных
    $bd="SibEnergo"; //Название базы данных

    
    $link=mysqli_connect($host,$login,$pass,$bd);
?>