<?php
	$db = mysqli_connect('172.16.0.2', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
	<head>
		<style>
			img{
				height: 344px;
				width: 260px;
			}
		</style>
	</head>
	<body>
		<?php
			echo '<a title="Main" href="/main.php">Volver a la página principal</a>';
			if (!isset($_GET['libro_id'])) {
				die('No se ha especificado un libro');
			}
			$libro_id = $_GET['libro_id'];
			$query = 'SELECT * FROM tLibros WHERE id='.$libro_id;
			$result = mysqli_query($db, $query) or die('Query error');
			$only_row = mysqli_fetch_array($result);
			echo '<h1>'.$only_row[1].'</h1>';			
			echo '<img src='.$only_row[2].'>';
			echo '<h2>'.$only_row[3].'</h2>';
			echo '<h2>'.$only_row[4].'</h2>';
		?>
		<h3>Comentarios: </h3>
		<ul>
			<?php
				$query2 = 'SELECT * FROM tComentarios WHERE libro_id='.$libro_id;
				$result2 = mysqli_query($db, $query2) or die('Query error 2');
				$query3 = 'SELECT tUsuarios.nombre FROM tUsuarios,tComentarios WHERE tUsuarios.id =usuario_id and libro_id= '.$libro_id;
				$result3 = mysqli_query($db, $query3) or die('Query error 3');
				while ($row = mysqli_fetch_array($result2) and $row2 = mysqli_fetch_array($result3)) {
					echo '<li>'.$row['1']." (".$row['fecha']." )" .$row2['nombre'].'</li>';
				}
				mysqli_close($db);
			?>
		</ul>
		<p>Deja un nuevo comentario: </p>
		<form action="/comment.php" method="post">
			<textarea rows="4" cols="50" name="new_comment"></textarea><br>
			<input type="hidden" name="libro_id" value="<?php echo $libro_id; ?>">
			<input type="submit" value="Comentar">
		</form>
		<a title="Logout" href="/logout.php">Logout</a>		
	</body>
</html>
