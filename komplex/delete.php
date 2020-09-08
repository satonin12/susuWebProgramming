<?php
  // require_once('headerSQL.php');
  $host = 'localhost';
  $db = 'users';
  $userDB = 'root';
  $FIO=$_POST['fio'];
  $value=$_POST['val'];

  $query_delete_FIO = "delete from student 
  where student.id = (select id from student 
  where student.FIO ='$FIO')";

  if($value == "Удалить"){
    echo(3);    
    $conn = mysqli_connect($host, $userDB, "", $db);
    if($res = mysqli_query($conn, $query_delete_FIO)){
      echo(1);
    }else{
      echo($conn->error);
    }
    mysqli_close($conn);
  }
  mysqli_close($conn);
?>