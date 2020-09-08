<?php
  // require_once('headerSQL.php');
  $host = 'localhost';
  $db = 'users';
  $userDB = 'root';
  $FIO = $_POST['fio'];
  $gruppa = $_POST['gruppa'];

  $query_new_student = "insert into student(FIO, gruppa_ID)
  values('$FIO', (select gruppa_ID from gruppa where groupName='$gruppa'))";
  echo(3);    
  $conn = mysqli_connect($host, $userDB, "", $db);
  if($res = mysqli_query($conn, $query_new_student)){
    echo(1);
  }else{
    echo($conn->error);
  }
  mysqli_close($conn);
?>