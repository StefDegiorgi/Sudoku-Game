<?php

session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

		$query = "select * from users where user_name = '$user_name' limit 1";
		$result = mysqli_query($con, $query);

		if ($result) {
			if ($result && mysqli_num_rows($result) > 0) {

				$user_data = mysqli_fetch_assoc($result);

				if ($user_data['password'] === $password) {

					$_SESSION['user_id'] = $user_data['user_id'];
					header("Location: login.php");
					die;
				}
			}
		}

		echo "wrong username or password!";
	} else {
		echo "wrong username or password!";
	}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Sudoku Game</title>
	<link rel="stylesheet" href="./style.css">
	<link rel="icon" href="./favicon.ico" type="image/x-icon">
</head>

<body>
	<main>
		<h1>Sudoku Game Login</h1>
		<img src="img/loginImg.png">
	</main>
	<form method="post">
		<input type="text" id="user_name" name="user_name" placeholder="Username"><br><br>
		<input type="password" id="password" name="password" placeholder="Password"><br><br>
		<input id="button" type="submit" value="Login"><br><br>
		<p>
			<a href="signup.php"> Don't have an account ? Create account</a>
		</p>
	</form>
	<script src="action.js"></script>
</body>

</html>