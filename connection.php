<?php

$dbhost = "sql313.infinityfree.com";
$dbuser = "if0_34765021";
$dbpass = "FXNbfXQgFieqen";
$dbname = "if0_34765021_login_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
