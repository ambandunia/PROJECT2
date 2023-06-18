<?php


//create database
/* Attempt MySQL server connection. Assuming you are running MySQL server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create database query execution
$sql = "CREATE DATABASE scms";                                                     /* change database name here */                
if(mysqli_query($link, $sql)){
    echo "Database created successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);





//import database
$conn =new mysqli('localhost', 'root', '' , 'scms');                               /* change database name here */

$query = '';
$sqlScript = file('scms.sql');                                                     /* change database name here */
foreach ($sqlScript as $line)	{
	
	$startWith = substr(trim($line), 0 ,2);
	$endWith = substr(trim($line), -1 ,1);
	
	if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//') {
		continue;
	}
		
	$query = $query . $line;
	if ($endWith == ';') {
		mysqli_query($conn,$query) or die('Problem in executing the SQL query');
		$query= '';		
	}
}
// Close connection
mysqli_close($conn);



echo '<br/>SQL file imported successfully';
?>