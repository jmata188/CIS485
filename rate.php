
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
require('mysql_connect.php');

$name = $_POST['username'];


$sql = "select * from rate where rat_name = '$name';";
$result = mysqli_query($conn, $sql);
$r = mysqli_num_rows($result);

if($r > 0){
echo" <table style='width:100%'><tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr></table>";
while($row = mysqli_fetch_assoc($result)){
echo "

<table style='width:100%'>
 
  <tr>
    <td>".$row['rat_name']."</td>
    <td>".$row['rat_message']."</td>
    <td>".$row['rat_date']."</td>
  </tr>
  
</table>
";


}

}else{
echo "Zero Comment Found";
}
mysqli_close($conn);

}

?>


<!-- 
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
require('mysql_connect.php');


$mesme = $_POST['mess_na'];
$messText = $_POST['mess_mes'];

$sql = "insert into rate values ('','$mesme','$messText',NOW());";
if(mysqli_query($conn, $sql)){
echo"send it";
}else{
echo"got probale";
}

mysqli_close($conn);
}
?>
-->
<form action="" method="post">
name: <input type="text" name="username">
<input type="submit" value="Submit">
</form>
 



