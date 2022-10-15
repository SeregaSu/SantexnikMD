<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    p {
      font-size:16px;

    }

    .smit {
     
      width:50px;

    }

    #btn {

      width:150px;
    }
  </style>
</head>
<body>
  


<form action="dorms.php" method="post">
  <p><b>Труба д 100 - 1м - <input class="smit" type="text" name="login1" ></b></p>
  <p><b>Труба д 50 - 1м - <input class="smit" type="text" name="login2" ></b></p>
  <p><b>Труба д 32 - 1м - <input class="smit" type="text" name="in3" ></b></p>
  <!-- <input type="text" name="pass" placeholder="Введите пароль"required><br>
  <input type="text" name="email" placeholder="Введите емэйл"required><br>
  <input type="text" name="tel" placeholder="Введите телефон"> -->
  
  <input id = "btn" type="submit" value="Сохранить таблицу">
</form>

</body>
</html>

<?php

$trb = 'Труба диаметр 100 - <input type="number" name = "sum" placeholder="Введите цифру" required >';


