<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
	<head>
		<style>
			body{
				background-color: #E4FFFF;
			}
			img{
				height: 300px;
				width: 260px;
			}
			table{
				width:70%;
				height: 10%;
				margin: auto;
				padding:0;
			}
			table, td, th{
				border:1;
				border: 1px solid black;
				border-collapse: collapse;
			}
			th{
				background-color: violet;
			}
			td{
				height: 30px;
				width: 10px;
				text-align: center;
			}
			tr:nth-child(even){
				background-color: white;
			}
			tr:nth-child(odd){
				background-color: lightpink;
			}
			td::selection{
				color: lightblue;
			}
			tr:hover{
				backgorund-color: lightblue;
				color: blue;
			}
			h1{
				text-align:center;
				background-color: violet;
				margin-bottom:10px;
				padding:0;
			}
			h1{
				width:100px;
				heigth:30px;
				background-color: violet;
				transition: width 2s, height 2s, margin 2s;
				margin: auto;
			}
			h1:hover{
				color: white;
				width: 70%;
				height: 40px;
				margin: 0 auto;
			}
			a{
				transition: color 0.8s linear 0.2s;

			}
			a:hover{
				color: violet;
			}
		</style>
	</head>
	<body>
		<a title="Logout" href="/logout.php">Logout</a>;
		<h1 class="transicion">Libros</h1>
		<table class="tabla">
			<tr>
				<th>ID</th>
				<th>Título</th>
				<th>Portada</th>
				<th>Autor</th>
				<th>Número de Páginas</th>
			</tr>
			<?php 
				//Lanzar una query
				$query = 'SELECT * FROM tLibros';
				$result = mysqli_query($db, $query) or die('Query error');
				//Recorrer el resultado
				while ($row = mysqli_fetch_array($result)) {
					echo '<tr>';
						echo '<td>'.$row[0];
						echo '</td>';

						echo '<td>'.$row[1];
						echo '</td>';

						echo '<td><a title="imagen" href="/detail.php?libro_id='.$row[0];
						echo '"><img src="'.$row[2];
						echo '"></a>';
						echo '</td>';

						echo '<td>'.$row[3];
						echo '</td>';

						echo '<td>'.$row[4];
						echo '</td>';
					echo '</tr>';

				}

				mysqli_close($db);
			?>
			
		</table>
		
	</body>
</html>

