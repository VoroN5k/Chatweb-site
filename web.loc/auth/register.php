<?php 

require"db.php"; 

$data= $_POST;

$login = $_POST['login'];
$password = $_POST['password'];

if (isset($data['do_reg']) ){
	$result = mysqli_query($connection, "INSERT INTO `users` (login, password) VALUES ('$login', '$password' )");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<form action="register.php" method="POST">

	<input type="text" name="login" placeholder="login" style="text-align: center;"> <hr>

	<input type="password" name="password" placeholder="password" style="text-align: center;"> <hr>

	<button type="submit" style="color: green;" name="do_reg">REGISTER</button>

	</form>
</body>
</html>