<?php
	require'db.php';
	$data = $_POST;
	$login = $_POST['login'];
	$password = $_POST['password'];
	if(isset($data['do_log']) ){
		$result = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
		$user = mysqli_fetch_assoc($result);
		if(count($user) == 0){
			echo "That user is not logged in";
		} else {
			header("Location: ../index.php");
		}
	}
?>
<form action="login.php" method="POST">

	<input type="text" name="login" placeholder="login" style="text-align: center;"> <hr>

	<input type="password" name="password" placeholder="password" style="text-align: center;"> <hr>

	<button type="submit" style="color: green;" name="do_log">Login</button>

</form>