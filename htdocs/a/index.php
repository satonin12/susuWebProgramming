<!DOCTYPE HTML>
<!-- Do not remove and do not change this string -->
<html lang=ru>
<head>
	<meta charset="utf-8">
	<title> Gauss </title>
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
</head>
<body>
	<header><h3>Решение системы линейных уравнений</h3></h3></header>
	<hr>

	<div class="content">
		<div class="yravnenie">
			<form action="index.php" method="POST">
				<label>Число уравнений=</label>
				<input type="number" name="count">
				<input type="submit" value="Ввод">

				<?php
					if(!empty($_POST["count"])){
						$count=$_POST["count"];
						echo('<form action="gauss.php" method="POST">');
						for($i=0; $i<$count; $i++){
							echo('<input type="number" id="'.$i.'"> <input type="number"> 
								<input type="number"> X<sup>'.$i.'</sup> 
								<input type="number"> <br>');
						}
					echo('<input type="submit" name="sub" value="Решить">
						</form>');
					}


				?>
			</form>
		</div>
	</div>
<!-- первая форма это кол-во уравнений которая перенаправляет
 на этот же файл в php файле генерация ипутов и создание формы который перенаправляет
 на гаус.пхп
 в файлу 2 пхп тега -->

	<!-- <div class="content">
		<div class="yravnenie">
			<form action="index.php" method="POST">
				<label>Число уравнений=</label>
				<input type="number" name="count">
				<input type="submit" value="Ввод">
			</form>
		</div>
	</div> -->

	<?php

		// if(!empty($_POST["count"])){
		// 	$count=$_POST["count"];
		// 	echo('<form action="gauss.php" method="POST">');
		// 	for($i=0; $i<$count; $i++){
		// 		echo('<input type="number"> <input type="number"> <input type="number"> X<sup>'.$i.'</sup> <input type="number"> <br>');
		// 	}
		// 	echo('<input type="submit" name="sub" value="Решить">
		// 				</form>');
		// }
		
	?>

</body>
</html>
<!-- Do not remove and do not change this string -->
