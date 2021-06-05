<?php
session_start();

$connection = mysqli_connect('localhost','root','');
mysqli_select_db($connection, 'userregistration');



$name = $_POST['user'];   
$password = $_POST['password'];

$s = "SELECT * FROM usertable Where  name = '$name' && password = '$password'";

$result = mysqli_query($connection, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
	$_SESSION['username'] = $name;
	header('location:home.php');
}else  {
	header('location:login.php');
}
?>