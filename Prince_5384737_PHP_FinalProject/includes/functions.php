<?php

include 'includes/DB_Config.php';
	
function OpenConnection(){
	global $HOST , $USER , $PASSWORD , $DBNAME;
	$connection = mysqli_connect($HOST , $USER , $PASSWORD , $DBNAME)
	              or die("Connection Failed ".mysqli_connect_error());
	return $connection;
}
//========================================================================
function CloseConnection($connection){
	mysqli_close($connection);
}

?>