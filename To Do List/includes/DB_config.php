<?php
// connect to DB server

// // Development connection
// $HOST = 'localhost';
// $USER = 'root';
// $PASSWORD = '';
// $DBNAME = 'todo_list';

// Remote mysql web lauch connection
// $HOST = 'remotemysql.com';
// $USER = 'k1PrpRfoLE';
// $PASSWORD = 'CIv4VLCXI1';
// $DBNAME = 'k1PrpRfoLE';

// // infinity free mysql web lauch connection
// $HOST = 'sql200.epizy.com';
// $USER = 'epiz_29108012';
// $PASSWORD = '1$Fluteman';
// $DBNAME = 'epiz_29108012_todo_list';

// Heroku JawDB mysql web lauch connection
$HOST = 's465z7sj4pwhp7fn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
$USER = 'firf8pu1k6n6mbbf';
$PASSWORD = 'gm95l3761tiil3kz';
$DBNAME = 'nsqyfecx76li0nda';


$connection = mysqli_connect($HOST, $USER, $PASSWORD, $DBNAME);

if ($connection === false) {
    die("Error: Unable to connect".mysqli_connect_error());
}

?>