<?php

//call files to start session and connect to mysql DB
require_once "includes/DB_Config.php";
require_once "includes/session.php";

$firstname = $_POST['firstname'];    //make new var for connect php to database  taking data from input name and password and store at $name and $password
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$state = $_POST['state'];
$city = $_POST['city'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$password_harsh = password_hash($password, PASSWORD_BCRYPT);
$emailErr ="";

// validate unique ID columns, email and phone in this case
$vEmail = "SELECT * FROM usertable Where  email = '$email'";  //query to verify the email input at email DB column [QUERY VARIABLE]
$vPhone = "SELECT * FROM usertable Where  phoneNumber = '$phoneno'";  //query to verify the phone number input at phone number DB column [QUERY VARIABLE]
// No query to verify password because 2 users can accidentally use same password, names, city etc does'nt matter :)

$emailResult = mysqli_query($connection, $vEmail); //mysqli_query($link variable, $query variable);
$phoneResult = mysqli_query($connection, $vPhone); //mysqli_query($link variable, $query variable);

$emailRow = mysqli_num_rows($emailResult);//verify if the user already exists on the row of the table.this function returns bool 0 or 1
$phoneRow = mysqli_num_rows($phoneResult);//verify if the user already exists on the row of the table.this function returns bool 0 or 1

// verify if email already exists
if ($emailRow == 1){
    if (isset($_POST['submit'])) {
        $emailErr ='This email already exist';
    }
	  
}

// verify if phone number already exists
if ($phoneRow == 1){
	$phonenoErr='This phone number already exist';
}
else  {
	$reg = "INSERT INTO usertable (firstName, lastName, email, phoneNumber, DOB, address, state, city, password)
             VALUES ('$firstname', '$lastname', '$email', '$phoneno', '$dob', '$address', '$state', '$city', '$password')"; // reg = register; just a variable to mean register the input
	mysqli_query($connection,$reg);
    echo "Registration Done Sucessfully";
}


?>