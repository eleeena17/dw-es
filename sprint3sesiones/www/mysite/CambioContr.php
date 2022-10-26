<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die ('Fail');
	session_start();
	$user = 'NULL';
	if (!empty($_SESSION['user_id'])) {
		$user = $_SESSION['user_id'];
	}
	$password_posted = $_POST['contrAnt'];
	$contrNuev = $_POST['contrNuev'];
	$contrNuevConf = $_POST['contrNuevConf'];

	$query = "SELECT contraseña FROM tUsuarios WHERE id =".$user;
	$result = mysqli_query($db, $query) or die ("Error");
	if (mysqli_num_rows($result) > 0){
		$only_row = mysqli_fetch_array($result);
		if ($only_row[0] == $password_posted) {
			if ($contrNuev == $contrNuevConf){
				$query2 = "UPDATE tUsuarios SET contraseña= '".$contrNuev."' WHERE id=".$user;
				$result = mysqli_query($db, $query2) or die ("Error 2");
				echo '<p>Las contraseñas han sido cambiadas</p>';
			} else 	{
				echo '<p>Las contraseñas no coinciden</p>';
			}
		} else {
			echo '<p>Contraseña antigüa incorrecta</p>';
		}
	} 
	mysqli_close($db);
?>
