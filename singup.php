<?php
session_start();

include("connection.php");
include("functions.php");


if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];

  if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

    $user_id = random_num(20);
    $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

    mysqli_query($con, $query);

    header("Location: index.php");
    die;
  } else {
    echo "Please enter some valid information!";
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
    <h1>Create Account</h1>
    <img src="img/loginImg.png">

  </main>
  <form method="post">
    <input type="text" id="user_name" name="user_name" placeholder="Username"><br><br>
    <input type="password" id="password" name="password" placeholder="Password"><br><br>
    <input type="submit" value="Create Account"><br><br>
    <p>
      <a href="index.php">Already have an account? Go back</a>
    </p>
  </form>
  <script src="action.js"></script>
</body>

</html>