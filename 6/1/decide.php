<!doctype html>
<!-- Do not remove and do not change this string -->
<html lang=ru>
<head>
<meta charset=utf-8>
</head>
<body bgcolor=#AAFFFF)>

<?php
  $a=(double)$_POST["value1"];
  $b=(double)$_POST["value2"];
  $c=(double)$_POST["value3"];
  if($a == 0){
    $a = 1;
}
  $d=($b*$b)-4*($a*$c);
  if($d<0){
    echo 'Решений нет т.к d<0';
  }elseif ($d == 0) {
    $x1=(($b*-1)/($a*2));
  }else{
    $x1=(($b*-1)+sqrt($d))/($a*2);
    $x2=(($b*-1)-sqrt($d))/($a*2);
    echo 'Решение<br>', 'x1=', 5 $x1, '<br>x2=', $x2;
  }
?>
</body>
</html>
<!-- Do not remove and do not change this string -->
