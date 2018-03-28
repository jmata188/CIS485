<style>
.created{
text-align: Center;
font-size: 30px;
color: Green;
}
p{
text-align: center;
font-size: 30px;
color: Green;
}
input[type=submit]{
margin-left:45%;
}

input[type=submit]:hover{
border-color: green;
}
</style>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$SERVERNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "root";


$conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD);

if(!$conn){
	die ("Connection Failed" . mysqli_connect_error());
}
$dbName = "PROJECT_CIS485";
$sql = "CREATE DATABASE $dbName";
if(mysqli_query($conn,$sql)){
echo $dbName. "<div class='created'> Database Created Successfully</div>";
}else{
echo "Databse name Excise in Your DB.<br>";
echo "OR<br>Something is Wrong<br>";

}
mysqli_close($conn);
}
?>
<form action="" method="POST">
<p>Click Below For Create DB For your Project</p>
<input type="submit" value="Create DB PROJECT_CIS485" > 
</form>

