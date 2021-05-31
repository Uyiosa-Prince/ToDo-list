<?php 
include 'DB_Config.php';
	
// function OpenConnection(){
// 	global $HOST , $USER , $PASSWORD , $NAME;
// 	$connection = mysqli_connect($HOST , $USER , $PASSWORD , $NAME)
// 	              or die("Connection Failed ".mysqli_connect_error());
// 	return $connection;
// }
// //========================================================================
// function CloseConnection($connection){
// 	mysqli_close($connection);
// }
//========================================================================
function Get_Category_Name($Category_ID) {
	require_once "session.php";
	require_once "DB_Config.php";

	// write query to access category name from table
	$query = "SELECT category_Name FROM Category WHERE category_ID = '$Category_ID'";
	$Category = mysqli_query($connection, $query);
	// return "Category";
	return $Category;
}
//========================================================================
function Get_Search_Query($Checked, $Category_ID, $BookKeywords){
	$query ="";
	require_once "session.php";
	require_once "DB_Config.php";
	if ($Checked == 1) {
		$query = "SELECT * FROM Cars_and_Vehichles_Ad WHERE category_ID = '$Category_ID'";
	}
	
	return $query;
}
//===================================================================================================
function Get_All_Books($query) {
	
	$books_array = array();
	//TODO ...
	  
	return $books_array;		
}
//===================================================================================================
function Display($array){
        
	echo "<table border = 0>";
	foreach($array as $value){
		echo "<tr>"	;	
		echo "<td align='left'>";
		echo "<div> <img id='ImageContent' src = './images/".$value['Image'] ."'/> ";
		echo "</div>";
		echo "</td>";
		
		echo "<td>";
		echo "<div id='Im'>";
		echo "<h2 style = 'color : #CC0000'>". $value['Year'] ." , ";
		echo $value['Make']."  ".$value['Model']." , ".$value['Color'];
		echo "</h2>";
		
		if($value['Old Price'] > 0){
			echo "<strike style = 'color:red'>";
			echo "<h3 style = 'color: gray'> \$".$value['Old Price'];
			echo "</h3></strike>";
		}
		echo "<h3 style = 'color: black'> \$".$value['Price'];
		echo "</h3>";
		echo "<h3 style = 'color: black'>".$value['KM'];
		echo "</h3>";
		echo "</div></td></tr>";
	}
	echo "</table>";
	
		
}
	
?>