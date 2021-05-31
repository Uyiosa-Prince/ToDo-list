<?php
// start session // call the function later
    session_start();

    // connect with databse and select the specific db
    $connection = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($connection, 'Classified_Ads_db');

    //verify user inputs
    $email = $_POST['email'];
    $password = $_POST['password'];

    // query to verify the user input with the user data in the database
    $vInputs = "SELECT * FROM usertable WHERE email = '$email' && password = '$password' ";

    $result = mysqli_query($connection, $vInputs);

    // check with the rows in usertable
      $check_rows = mysqli_num_rows($result);


      if ($check_rows == 1){
        $_SESSION['username'] = $email;
        header('location:../home.php');
    }
    else  {
        $_SESSION['login'] = "<div style = 'color : #CC0000'>"."<b>invalid email or password!</b></div>";
        header('location:../login.php');
    }

?>