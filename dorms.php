<?php

// Получение данных из формы
$login1 = $_POST['login1'];
$login2 = $_POST['login2'];
$in3 = $_POST['in3'];
$bort1 = '<h1>Труба д 100 - 1м - '. $login1 .' шт</h1>';
$bort2 = '<h1>Труба д 50 - 1м - ' . $login2 .' шт</h1>';
$bort3 = '<h1>Труба д 32 - 1м - ' . $in3 .' шт</h1>';

$blok = [$bort1=>$login1, $bort2=>$login2, $bort3=>$in3];

// $pass = $_POST['pass'];
// $email = $_POST['email'];
// $tel = $_POST['tel'];

// Обработка полученных данных

// $login = htmlspecialchars($login);
// $pass = htmlspecialchars($pass);
// $email = htmlspecialchars($email);
// $tel = htmlspecialchars($tel);

// $login = urldecode($login);
// $pass = urldecode($pass);
// $email = urldecode($email);
// $tel = urldecode($tel);

// $login = trim($login);
// $pass = trim($pass);
// $email = trim($email);
// $tel = trim($tel);

foreach($blok as $key => $value){
    
    if($value > 0){

        echo $key;

    }

    

} 






// if(mail("ruprek@mail.ru","Новое письмо с сайта!",
//          "Логин: " . $login ."\n". 
//          "Пароль: " . $pass ."\n".
//          "Email: " . $email ."\n".
//          "Telf: " . $tel , 
//          "From: no-repl@yan.go")

// ){
//     echo ('Письмо успешно отправлено!');
// }   else { 
//     echo ('Есть ошибки! Проверьте данные...');
// }




