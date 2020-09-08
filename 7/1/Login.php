<?php
include_once("ini.php");
// извлечь из массива POST присланные AJAX-запросом login и password
// открыть сессию и запомнить их
  $name = $_POST["firstname"];
  $pass = $_POST["password"];
// пытаемся войти на MySQL - сервер
// возможное сообщение об ошибке неудачи соединения надо подавить
// в случае удачи отправим браузеру "1" иначе "0"
  $conn = mysqli_connect($host, $userDB, "", $db);
  if(!$conn){
    echo("Ошибка соединения");
    exit();
  }
  // $query = 'select id
  //           from user 
  //           where user.username = "'.$name.'"
  //           and user.password = '.$pass;
  $query = 'insert into user
            (`username`, `password`)
            values("'.$name.'", '.$pass.')';
  if($res = mysqli_query($conn, $query)){
    if(mysqli_affected_rows($conn)==1){
      echo(1);
      $_SESSION["login"]=$name;
      $_SESSION["password"]=$pass;
    }
  }else{
    echo(0);
  }
  mysqli_close($conn);
?>