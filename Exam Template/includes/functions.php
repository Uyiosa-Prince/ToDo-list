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
//========================================================================
function Get_Category_Name($Category_ID) {
	//TODO ...
	return "Category";
}
//========================================================================
function Get_Search_Query($Checked, $Category_ID, $BookKeywords){
	$query ="";
	//TODO ...
	
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
        
	echo "<table border=0 width='750'>";
    echo "<tr>";
	echo "<th><h4 style = 'font-weight: bold;'>Book</h4></th>";
    echo "<th><h4 style = 'font-weight: bold;'>Description</h4></th>";
	echo "<th><h4 style = 'font-weight: bold;'>Category</h4></th>";
    echo "<th><h4 style = 'font-weight: bold;'>Status</h4></th>";
    echo "</tr>";
        
	foreach($array as $value){
	   $Book_ID = $value['Book_ID'];
	   $Title   = $value['Title']; 
	   $Authors = $value['Authors'];
	   $Status  = $value['Status'];
	   $Image   = $value['Image'];
	   $Category_id = $value['Category_ID'];
       $Category = Get_Category_Name($Category_id);   
	    		
	   echo "<tr>";
	   echo "<td style='height:150px;width:15%'><img src='images/books/$Image' /></td>";
	   echo "<td style='width:30%' ><h4><font color=#CC0000>".$Title."</font></h4><h5>".$Authors."</h5></td>";
       echo "<td style='width:15%' ><h4>".$Category."</h4></td>";	
	   if($Status == 'Available'){
		   echo "<td style='width:10%'><img src='images/Yes.png' /></td>";            
	   }else{
		   echo "<td style='width:10%'><img src='images/No.png' /></td>"; 
	   }
	   echo "</tr>";					
	}
    echo "</table>";
		
}
	
?>