<?php
// connect to DB server

// // Development connection
// $HOST = 'localhost';
// $USER = 'root';
// $PASSWORD = '';
// $DBNAME = 'todo_list';

// Remote mysql web lauch connection
$HOST = 'remotemysql.com';
$USER = 'k1PrpRfoLE';
$PASSWORD = 'CIv4VLCXI1';
$DBNAME = 'k1PrpRfoLE';


$connection = mysqli_connect($HOST, $USER, $PASSWORD, $DBNAME);

if ($connection === false) {
    die("Error: Unable to connect".mysqli_connect_error());
}

?>