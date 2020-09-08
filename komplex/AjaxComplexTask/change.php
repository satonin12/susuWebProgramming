<?php
  require_once('headerSQL.php');

  $FIO = $_POST['fio'];
  $value = $_POST['val'];
  $FIO1 = $_POST['fio_change'];

  $query_change_FIO = "update student
  set student.FIO = '$FIO1'
  where student.FIO = '$FIO'";

  if($value == "Изменить"){
    echo(3);    
    $conn = mysqli_connect($host, $userDB, "", $db);
    if($res = mysqli_query($conn, $query_change_FIO)){
    }else{
      echo($conn->error);
    }
  }
  mysqli_close($conn);
?>