<!DOCTYPE HTML>
<!-- Do not remove and do not change this string -->
<html lang=ru>
<head>

  <meta charset="utf-8">
  <title>запрос к БД</title>
  <style>
    table{
      border: 1px solid black;
    }
    th{
      background-color: cyan;
    }
    td, tr, th{
      border: 1px solid black;
    }
  </style>
</head>

<body>

  <?php
    if($conn=@mysqli_connect("localhost", "root", "")){
      $db=mysqli_select_db($conn, "warehouse");
      if(!$db){
        exit("Подключение БД не выполнено");
      }
    }else {
      die("соединение с сервером не выполнено");
    }
    $query="SELECT TovarName, Amount, MeasUnitName 
            FROM Tovar, MeasUnit 
            where Tovar.MeasUnit_ID=MeasUnit.MeasUnit_ID";
    if( $res = mysqli_query( $conn, $query)){
      echo('<table>
              <tr>
                <th>Товар</th>
                <th>Кол-во</th> 
                <th>Ед.изм</th>
              </tr>');
      while($row = $res->fetch_array(MYSQLI_ASSOC)){
        echo('<tr>
                <td>'.$row["TovarName"].'</td>
                <td>'.$row["Amount"].'</td>
                <td>'.$row["MeasUnitName"].'</td>
              </tr>');
      }
    echo("</table>");
    }else{
      echo("<br>");
      echo($conn->error);
    }
      mysqli_free_result ($res);
      mysqli_close($conn);
  ?>
</body>

</html>  
<!-- Do not remove and do not change this string -->