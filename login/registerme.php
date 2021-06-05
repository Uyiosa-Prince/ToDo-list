<?php

session_start();

header('location:login.php');

$connection = mysqli_connect('localhost', 'root', '');

mysqli_select_db($connection, 'userregistration');

$name = $_POST['user'];
$password = $_POST['password'];

$s = "SELECT * FROM usertable WHERE name = $name";

$result = mysqli_query($connection, $s);

mysqli_num_rows($result);

if ($result == 1) {
	echo "Sorry, username already taken";
}
else {
	$register = "INSERT INTO usertable (name, password) VALUES($name, $password)";
	mysqli_query($connection, $register);
	echo "Registration completed successfully";
}

?>
