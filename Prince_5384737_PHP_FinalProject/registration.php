<?php
session_start(); //this function tell php to start function  step-1

header('location:register.php'); //step2 add any php file in header tag with location.

$connection = mysqli_connect('localhost','root',''); //for connect host,name,password,db   [LINK VARIABLE]

mysqli_select_db($connection, 'Classified_Ads_db');  // connect with db

$firstname = $_POST['firstname'];    //make new var for connect php to database  taking data from input name and password and store at $name and $password
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$state = $_POST['state'];
$city = $_POST['city'];
$password = $_POST['password'];

// also do for phone number later
$vEmail = "SELECT * FROM usertable Where  email = '$email'";  //query to verify the email input at email DB column [QUERY VARIABLE]
// No query to verify password because 2 users can accidentally use same password, names, city etc does'nt matter :)

$result = mysqli_query($connection, $vEmail); //mysqli_query($link variable, $query variable);

$num = mysqli_num_rows($result);//verify if the user already exists on the row of the table.this function returns bool 0 or 1

if ($num == 1){
	echo "email already exist";
}else  {
	$reg = "INSERT INTO usertable (firstName, lastName, email, phoneNumber, DOB, address, state, city, password)
             VALUES ('$firstname', '$lastname', '$email', '$phoneno', '$dob', '$address', '$state', '$city', '$password')"; // reg = register; just a variable to mean register the input
	mysqli_query($connection,$reg);
    echo "Registration Done Sucessfully";
}

?>