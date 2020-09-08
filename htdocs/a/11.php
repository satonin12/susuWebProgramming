<!DOCTYPE HTML>
<html lang=ru>
<body>
<?php
// ТИПОВОЙ ПРИМЕР ПРОХОДА ПО НАБОРУ ДАННЫХ
error_reporting(E_ERROR | E_WARNING );
$conn= mysql_connect ('localhost','root','');
if(!$conn)die('Нет соединения');
$db=mysql_select_db("warehouse",$conn);
if(!$db)die('Не удалось выбрать БД');
$res=mysql_query('select * from Org',$conn);
if(!$res)die('Не получен результат запроса');
$n=mysql_num_fields ( $res );
$r=mysql_num_rows($res);
echo ('число полей='.$n.'      число записей='.$r); 
			//exit();
while(($row=mysql_fetch_row($res))){
	echo('<br>' );
	for($i=1;$i<=$n;$i=$i+1){
		echo($row[$i].'   ');
	}
}
mysql_free_result($res);
?>
</body>
</html>  
