<?php
// connect to DB server

$HOST = 'localhost';
$USER = 'root';
$PASSWORD = '';
// $DBNAME = 'todo_list';
$DBNAME = 'Classified_Ads_db';

$conn = mysqli_connect($HOST, $USER, $PASSWORD, $DBNAME);

if ($conn === false) {
    die("Error: Unable to connect".mysqli_connect_error());
}

?>