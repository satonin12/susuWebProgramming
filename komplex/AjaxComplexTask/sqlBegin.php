<?php

require_once('headerSQL.php');

$conn = mysqli_connect($host, $userDB, "", $db);
if(!$conn){
  echo("Ошибка соединения");
  exit();
}
$query = 'select groupName from gruppa';
if($res = mysqli_query($conn, $query)){
  $count = mysqli_num_rows($res);
  echo('<select id="grupp">');
  while($row = $res->fetch_array(MYSQLI_ASSOC)){
    echo('<option>'.$row["groupName"].'</option>');
  }
  echo('</select>');
}else{
  echo("<br>");
  echo($conn->error);
}
mysqli_free_result ($res);
$query = 'select FIO 
from student
where student.gruppa_ID=1';
if($res = mysqli_query($conn, $query)){
  $count = mysqli_num_rows($res);
  echo('<table id="fio">
          <thead>
            <tr>
              <th>Фамилия</th>
            </tr>
          </thead>
          <tbody>');
  while($row = $res->fetch_array((MYSQLI_ASSOC))){
  echo('<tr>
          <td>'.$row["FIO"].'</td>
        </tr>');
  }
  echo('</tbody></table>');
}
mysqli_close($conn);
?>
