<?php

include 'includes/DB_Config.php';
	
function OpenConnection(){
	global $HOST , $USER , $PASSWORD , $NAME;
	$connection = mysqli_connect($HOST , $USER , $PASSWORD , $NAME)
	              or die("Connection Failed ".mysqli_connect_error());
	return $connection;
}
//========================================================================
function CloseConnection($connection){
	mysqli_close($connection);
}

?>