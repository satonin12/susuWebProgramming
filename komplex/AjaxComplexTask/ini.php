<?php
// URL сервера и имя БД
  // require_once('headerSQL.php');
  $host = 'localhost';
  $db = 'users';
  $userDB = 'root';

  $grupp = $_POST['gruppa'];
  $query_select_FIO = 'select FIO from student, gruppa
    where gruppa.gruppa_ID=student.gruppa_ID
    and gruppa.groupName="'.$grupp.'"';

  $conn = mysqli_connect($host, $userDB, "", $db);
  if($res = mysqli_query($conn, $query_select_FIO)){
    $count = mysqli_num_rows($res);
    echo('[');
    $i=0;
    while($row = $res->fetch_array(MYSQLI_ASSOC)){
      echo('"'.$row['FIO'].'"');
      if($i!=$count-1){
        echo(',');
      }
      $i++;
    }
    echo(']');
  }
  mysqli_close($conn);

?>