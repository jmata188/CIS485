<?php
$SERVERNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "root";
$DBNAME = "PROJECT_CIS485";

$conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DBNAME);

if(!$conn){
	die ("Connection Failed" . mysqli_connect_error());
}

?>