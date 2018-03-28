<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 20%;
    padding: 10px 18px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Create Table</button>

<div id="id01" class="modal">
  
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
require('mysql_connect.php');
$dbName = $_POST['dbN'];
$dbid = $_POST['dbidd'];
$dbimg = $_POST['dbimg'];
$dbname = $_POST['dbnam'];
$dbprice = $_POST['dbpri'];

$sq = "CREATE TABLE $dbName(
$dbid INT AUTO_INCREMENT PRIMARY KEY,
$dbimg VARCHAR(600) NOT NULL,
$dbname VARCHAR(100) NOT NULL,
$dbprice VARCHAR(6) NOT NULL
);";
if(mysqli_query($conn,$sq)){
echo "Table Created Successfully<br>".$sq;
}
mysqli_close($conn);
}
?>
<form class="modal-content animate" action=""  METHOD="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
      <label for="uname"><b>Create Table</b></label>
      <p><input type="text" name="dbN" placeholder="Table Name" required> CREATE TABLE</p>
<p><input type="text" name="dbidd" placeholder="ex:- toy_id, ele_id" required> INT AUTO_INCREMENT PRIMARY KEY,</p>
<p><input type="text" name="dbimg" placeholder="ex:- toy_img, ele_img" required> VARCHAR(600) NOT NULL,</p>
<p><input type="text" name="dbnam" placeholder="ex:- toy_name, ele_name" required> VARCHAR(100) NOT NULL,</p>
<p><input type="text" name="dbpri" placeholder="Eex:- toy_price, ele_price" required> VARCHAR(6) NOT NULL</p>
      <button type="submit">Create Table</button>   </div>
  </form>
</div>


<hr>
<?php

?>

<?php
require('mysql_connect.php');
$sql = "select ele_id from electronic";
$re = mysqli_query($conn,$sql);
if(mysqli_num_rows($re)>0)
{
echo "Electronic Id#: "; 
while($row = mysqli_fetch_assoc($re)){

echo $row['ele_id'].', ';
}
}else{
echo "0 Electronic ID Found ";
}
mysqli_close($conn);
?>
<br>

<?php
/*
CREATE TABLE electronic
(
ele_id INT AUTO_INCREMENT PRIMARY KEY,
ele_img VARCHAR(600) NOT NULL,
ele_name VARCHAR(100) NOT NULL,
ele_price VARCHAR(6) NOT NULL
);
*/

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	require ('mysql_connect.php');

	$id1 = $_POST['ele_id'];
	$img1 = $_POST['ele_img'];
	$name1 = $_POST['ele_name'];
	$price1 = $_POST['ele_price'];

$sql = "insert into electronic values ($id1,'$img1','$name1','$price1');";

 if(mysqli_query($conn, $sql)){
 echo "ID# ".$id1." Added Successfully in Electronic<br>";
 }
 
 mysqli_close($conn);
 }
 ?>
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Add Electronic</button>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
</label><h3>Add Items in Electronic.</h3>
<p>ID <input type="number" name="ele_id" style="width:70px;" placeholder="Enter # " required></p>
<p>Image <br><textarea cols="50" rows="4" type="text" name="ele_img" placeholder="Enter IMAGE Link Here" required ></textarea></p>
<p>Name <br><textarea cols="50" rows="4" type="text" name="ele_name" placeholder="Enter Item Name" required ></textarea></p>
<p>Price <input type="text" name="ele_price" placeholder="Enter Items $ Price" required></p>   
      <button type="submit">Add Electronic.</button>
      </div>
  </form>
</div>


 
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

require('mysql_connect.php');

$dele_ele = $_POST['delete_ele'];

$sql = "delete from electronic where ele_id = $dele_ele";

if(mysqli_query($conn, $sql)){
echo "<br>Deleted ID# ".$dele_ele. " Successfully. <BR>";
}
mysqli_close($conn);
}
?>
<button onclick="document.getElementById('id04').style.display='block'" style="width:auto;">Delete Electronic</button>
<div id="id04" class="modal">
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
          </label>

      <h3>Delete Electronic</h3>

<p>ID# <input type="text" name="delete_ele" placeholder="Enter id to delete" required></p>
        
      <button type="submit">Delete Toys</button>
  </div>
  </form>
</div>

<hr>
<?php
require('mysql_connect.php');
$sql = "select toy_id from toys";
$re = mysqli_query($conn,$sql);
if(mysqli_num_rows($re)>0)
{
echo "Toys Id#: "; 
while($row = mysqli_fetch_assoc($re)){

echo $row['toy_id'].', ';
}
}else{
echo "0 Toys ID Found ";
}
mysqli_close($conn);
?>
<br>


<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
require('mysql_connect.php');

$toy_id = $_POST['to_id'];
$toy_img = $_POST['to_img'];
$toy_name = $_POST['to_name'];
$toy_price = $_POST['to_price'];
$sql = "insert into toys values($toy_id,'$toy_img','$toy_name','$toy_price');";

if(mysqli_query($conn, $sql)){
 echo "ID# ".$toy_id." Added Successfully in Toys<br>";
}
mysqli_close($conn);
}
?>
<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">Add Toys</button>
<div id="id03" class="modal">
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
          </label>

      <h3>Add Items in Toys</h3>
<p>ID <input type="number" name="to_id" placeholder="Enter # for your Items" required></p>
<p>Image <br><textarea cols="50" rows="4" type="text" name="to_img" placeholder="Enter IMAGE Link Here" required ></textarea></p>
<p>Name <br><textarea cols="50" rows="4" type="text" name="to_name" placeholder="Enter Item Name" required ></textarea></p>
<p>Price <input type="text" name="to_price" placeholder="Enter Items $ Price" required></p>
      <button type="submit">Add Toys</button>
  </div>
  </form>
</div>


 
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

require('mysql_connect.php');

$dele_toy = $_POST['delete_toys'];

$sql = "delete from toys where toy_id = $dele_toy";

if(mysqli_query($conn, $sql)){
echo "<br>Deleted ID# ".$dele_toy. " Successfully. <BR>";
}
mysqli_close($conn);
}
?>
<button onclick="document.getElementById('id05').style.display='block'" style="width:auto;">Delete Toys</button>
<div id="id05" class="modal">
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id05').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
          </label>

      <h3>Delete Toys</h3>

<p>ID# <input type="text" name="delete_toys" placeholder="Enter id to delete" required></p>
        
      <button type="submit">Delete Toy</button>
  </div>
  </form>
</div>
<hr>

<!-- 
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

require('mysql_connect.php');

$toy_id23 = $_POST['to_id32'];
$sql = "$toy_id23";

if(mysqli_query($conn, $sql)){
echo "Created Successfull ";
}
mysqli_close($conn);
}
?>
<h3>Create Anything Table,Databases,Delete,Update,...</h3>
<form action="" method="POST">
<textarea name="to_id32" type="text" cols="80" rows="20"></textarea>
<br>
<input type="submit" value="Run Query">
</form>
 -->


<script>
// Get the modal
var modal = document.getElementById('id01 id02 id03 id04 id05');


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



























