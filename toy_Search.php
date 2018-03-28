
<?php


if($_SERVER['REQUEST_METHOD'] =='POST'){

require('mysql_connect.php');
$name_search = $_POST['name_sear'];
$sql = "
(SELECT * FROM electronic where ele_name LIKE '%$name_search%')
UNION
(SELECT * FROM toys where toy_name LIKE '%$name_search%')
;";
$result = mysqli_query($conn, $sql);
$r = mysqli_num_rows($result);
if($r>0){
echo"<h5 style='color:red;'>Search Result...</h5>
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
        <img height='300px' src='".$img12."' style='width:90%;'>
        <div class='w3-container'>
          <p class='w3-opacity' style='width:150%'>".$name21."</p>
          <p>$".$price12."</p>
          <p><button 
          
          class='w3-button w3-light-grey w3-block'>Add</button></p>
        </div>
      </div>
    </div>
  
";
}
echo" </div><div style='border: solid black 0.5px'></div><br><p>Search Related ...</p>";
}else{
echo "0 Electronic Product found";
}
mysqli_close($conn);
}
?>


</body>
</html>