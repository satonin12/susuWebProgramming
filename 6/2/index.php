<!DOCTYPE HTML>
<!-- Do not remove and do not change this string -->
<html lang=ru>
<head>
  <meta charset=utf-8>
  <title>Квадратное уравнение 2 </title>
  <style>
    body{
    background-color: cyan;
    }
    header{
      text-align: center;
    }
    hr{
      color: blue;
      size: 10pt;
      width: 90%;
    }
    .content{
      position: relative;
      width: 50%;
      margin: 0px auto;
    }
    .yravnenie{
      padding: 10px;
      text-align: center;
    }
  </style>
  <script>
  
  </script>
</head>
<body>
  <header><h3>Решение квадратного уравнения</h3></header>
  <hr>
  <div class="content">
    <div class="yravnenie">
      <p>Введите коэффициенты уравнения</p>
      <form action="index.php" method="POST">
				<input type="text" name="value1"
        value="<?php if(isset($_POST['value1'])){echo $_POST['value1'];}?>" required>*X<sup>2</sup>+ 
				<input type="text" name="value2"
        value="<?php if(isset($_POST['value2'])){echo $_POST['value2'];}?>" required>*X+
				<input type="text" name="value3"
        value="<?php if(isset($_POST['value3'])){echo $_POST['value3'];}?>" required>=0<br>
        <input type="submit" value="Решить">
      </form>
    </div>
  </div>

  <?php

    if(!empty($_POST["value1"]) && !empty($_POST["value2"]) && !empty($_POST["value3"])){
      $a=$_POST["value1"];
      $b=$_POST["value2"];
      $c=$_POST["value3"];

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
        echo 'Решение<br>', 'x1=', $x1, '<br>x2=', $x2;
      }
    }

  ?>

</body>
</html>
<!-- Do not remove and do not change this string -->
