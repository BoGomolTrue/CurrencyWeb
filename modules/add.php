<?php
        include("connect.php");

        $name = $_POST['name'];
        $code = $_POST['code'];


        /*Запрос на добавление необходимых валют */
        $insert="insert into Currencies  (Currency, Letter)
        values ('$name','$code')";
        $result_insert=mysqli_query($link,$insert);

        /*Запрос на удаление валюты, которую добавили из базы выпадающего списка */
        $delete="delete from currencies_name where Name='$name'";
        $result_delete=mysqli_query($link,$delete);



?>