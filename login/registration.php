<?php
session_start(); //this function tell php to start function  step-1

header('location:login.php'); //step2 add any php file in header tag with location.

$connection = mysqli_connect('localhost','root',''); //for connect host,name,password,db   [LINK VARIABLE]

mysqli_select_db($connection, 'userregistration');  // connect with db

$name = $_POST['user'];    //make new var for connect php to database  taking data from input name and password and store at $name and $password
$password = $_POST['password'];


$s = "SELECT * FROM usertable Where  name = '$name'";  //query to verify the name input at name DB column [QUERY VARIABLE]
// No query to verify password because 2 users can accidentally use same password does'nt matter :)

$result = mysqli_query($connection, $s); //mysqli_query($link variable, $query variable);

$num = mysqli_num_rows($result);//verify if the user already exists on the row of the table.this function returns bool 0 or 1

if ($num == 1){
	echo "User Name already taken";
}else  {
	$reg = "INSERT INTO usertable (name, password) VALUES ('$name', '$password')"; // reg = register; just a variable to mean register the input
	mysqli_query($connection,$reg);
    echo "Registration Done Sucessfully";
}

?>