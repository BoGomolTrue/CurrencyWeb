<?php 
    include ('connect.php');
        

    $id = $_GET['id'];
    $name = $_GET['param'];
    
    
    print($id);
    print($name);
   /*Запрос на удаление необходимых валют */
   $delete="delete from currencies WHERE Letter='$id'";
   $result=mysqli_query($link,$delete);

    /*Запрос добавление той валюты, которая была удалена в базу выпадающего списка */
    $insert="insert into currencies_name (Name, Letter)
    values ('$name','$id')";
    $result_insert=mysqli_query($link,$insert);
?>