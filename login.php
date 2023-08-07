<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

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
  <script src="action.js"></script>
</head>

<body>
  <h1>Sudoku Game</h1>

  <h2 id="errors!">0</h2>
  <a href="logout.php">Logout</a>
  <div id="board"></div>
  <br>
  <div id="digits"></div>
</body>

</html>