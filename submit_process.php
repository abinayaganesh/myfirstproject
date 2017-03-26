<html>
<head>
	<title>order</title>
	<style>
	body{
			background-image: url("images/Light-Color-Wallpaper.jpg");
		}
		h1{
			padding-top: 50px;
			padding-left: 150px;
		}
		</style>
</head>
<body>
<?php 
include "includes/db.php";
if(isset($_POST['submit_form'])){
$name=strip_tags($_POST['name']);
$phno=strip_tags($_POST['phno']);
$address=strip_tags($_POST['address']);
$dish=strip_tags($_POST['dish']);
$category=strip_tags($_POST['category']);
$quantity=strip_tags($_POST['quantity']);
$price=$_POST['price'];
$ins_sql="insert into abiorder(name,phno,address,dish,category,quantity,price) values('$name','$phno','$address','$dish','$category','$quantity','$price')";
$run_sql=mysqli_query($conn,$ins_sql);
}?>
<h1>YOUR ORDER WAS SUCCESSFULLY PLACED!!!! </h1>
</body>