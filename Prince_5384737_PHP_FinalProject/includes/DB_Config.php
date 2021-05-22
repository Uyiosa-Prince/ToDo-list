<?php 
$HOST = 'localhost';
$USER = 'root';
$PASSWORD = '';
$DBNAME = 'Classified_Ads_db';

// Connect with database 
$connection = mysqli_connect($HOST , $USER , $PASSWORD , $DBNAME);

if ($connection === false) {
    die("Error: Connection error". mysqli_connect_errno());
}
?>
