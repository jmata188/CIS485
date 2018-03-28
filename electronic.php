
<?php
include('Menu.php');
include('ele_Search.php');
require('mysql_connect.php');

$sql = "SELECT * FROM electronic";
$result = mysqli_query($conn, $sql);
$r = mysqli_num_rows($result);
if($r>0){
echo"
<div class='w3-row-padding' id='about'>
    <div class='w3-center w3-padding-64'>
    </div>

";
while($row = mysqli_fetch_assoc($result)){

$img12 = $row['ele_img'];
$name21 = $row['ele_name'];
$price12 = $row['ele_price'];


echo "<div style=' margin-top:-100px'></div>
	 <div class='w3-third w3-margin-bottom'>
      <div class='w3-card-3'>
        <img height='300px' src='".$img12."' style='width:80%;'>
        <div class='w3-container'>
          <p class='w3-opacity' style='width:200%'>".$name21."</p>
          <p>$".$price12."</p>
          <p><button class='w3-button w3-black w3-block' style='width:80%' >Add</button></p>
          
          
        </div>
      </div>
    </div>
  
";
}
echo" </div>";
}else{
echo "0 Electronic Product found";
}

mysqli_close($conn);
?>


</body>
</html>