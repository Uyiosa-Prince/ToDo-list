<?php
// connect to DB server

$HOST = 'localhost';
$USER = 'root';
$PASSWORD = '';
$DBNAME = 'todo_list';


$connection = mysqli_connect($HOST, $USER, $PASSWORD, $DBNAME);

if ($connection === false) {
    die("Error: Unable to connect".mysqli_connect_error());
}

?>