<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die ('Fail');
?>
<html>
	<body>
		<?php
			session_start();
			$user_id_a_insertar = 'NULL';
			if (!empty($_SESSION['user_id'])) {
				$user_id_a_insertar = $_SESSION['user_id'];
			}
			$contrAnt = $_POST['f_passwordAnt'];
			$contrNuev = $_POST['f_passwordNuev'];
				
			$query = "SELECT id, contraseña FROM tUsuarios WHERE id =".$user;
			$result = mysqli_query($db, $query) or die ("Error");
			if (mysqli_num_rows($result) > 0){
				$only_row = mysqli_fetch_array($result);
				if ($only_row[0] == $contrAnt) {
					$query2 = "UPDATE tUsuarios SET contraseá= '".$contrNuev"' WHERE id=".$user;
					$result = mysqll_query($db, $query2) or die ("Error 2");
					header('Location: main.php');
				}else{
					echo '<p>Contraseña incorrecta</p>';
				}
			}
			mysqli_close($db);
		?>
	</body>
</html>
