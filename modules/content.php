<?php
  include('connect.php');
  include('functions.php');
  $select = "select * FROM currencies";
  $query = mysqli_query($link, $select);
  $num = mysqli_num_rows($query);
  if ($num > 0) {
    for ($i = 0; $i < $num; $i++) {
      $row = mysqli_fetch_array($query);
      /*Заполнение данных из базы (наименование валюты, абревиатура валюты) и курса валюты*/
      echo "<div class='col-md-4'><div class='b_content'><h4 style='color: gray; text-align: center;font-size: 24px;'><input style='display: none;' name='names' id='$row[1]'. value='$row[1]'>$row[1]<h4 style='color: gray; text-align: center; font-size: 16px;'>$row[2]</h4><div class='test'><span style='color: wheat; font-size: 16px;'>";
      echo get_currency($row[2], 3);
      echo " руб. </span><button type='button' class='btn btn-info remove' name='$row[1]' id='$row[2]' value='modules/delete_currency.php?id=$row[2]' style='float: right; background: Crimson;' >Удалить</button></div></div></div>";
      /**/
    }
  }
?>

<!--Форма подгрузки валют!-->
<form action="modules/content.php" id="data_one" method="POST">
</form>
<!--!-->

<!-- Форма удаления валют!-->
<form action="modules/delete_currency.php" id="data_three" method="GET">
</form>

<!--Форма добавления валют!-->
<form method="POST" id="data_two" action='modules/add.php'>
  <div class="col-md-4" style="display: flex; align-items: center; justify-content: center;">
      <div class="add_content" style="display: grid; align-items: center; justify-content: center;">
      <input class="form-control" type="text" name="name" id="name" placeholder="Название валюты" style="display: none">
      <input class="form-control" type="text" name="сode" id="code" placeholder="Абревиатура" style="display: none">
        <select class="form-control" style='text-align: center;' id="test" name="code" id = "code">
        <?php
          include('connect.php');
          $select = "select * FROM currencies_name order by Name";
          $query = mysqli_query($link, $select);
          $num = mysqli_num_rows($query);
          echo "<option selected disabled>Выберите одну из $num валют</option>";
          if ($num > 0) {
              for ($i = 0; $i < $num; $i++) {
              $row = mysqli_fetch_array($query);
              echo "<option value='$row[2]'>$row[1]</option>";
            }
        }
        ?>
          </select>
          <br>
      <button type="submit" class="btn btn-primary" style="height: 55px; background:  rgba(255, 135, 4, 1) ;">Добавить валюту</button>
    </div>
  </div>
</form>