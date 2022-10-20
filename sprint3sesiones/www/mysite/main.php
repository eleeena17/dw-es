<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
	<head>
		<style>
			img{
				heigth: 344px;
				width: 260px;
			}
		</style>
	</head>
	<body>
		<h1>Conexión establecida</h1>
		<?php
		//Lanzar una query
		$query = 'SELECT * FROM tLibros';
		$result = mysqli_query($db, $query) or die('Query error');
		//Recorrer el resultado
		while ($row = mysqli_fetch_array($result)) {
			echo $row[0];
			echo '<br>';
			echo $row[1];
			echo '<br>';
			echo '<a title="imagen" href="/detail.php?libro_id='.$row[0];
			echo '"><img src="'.$row[2];
			echo '"></a>';
			echo '<br>';
			echo $row[3];
			echo '<br>';
			echo $row[4];
			echo '<br>';
		}
		mysqli_close($db);
		?>
	</body>
</html>

