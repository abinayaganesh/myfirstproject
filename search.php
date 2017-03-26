<html>
<head>
	<title>order</title>
	<style>
	body{
			background-image: url("images/Light-Color-Wallpaper.jpg");
		}
		.abi{
			padding-top: 50px;
			padding-left: 250px;
		}
		</style>
</head>
<body>
<?php
$server="localhost";
$username="abi";
$password="sofiamenon";
$connect_mysql=mysql_connect($server,$username,$password) or die ("Connection Failed!");
$mysql_db=mysql_select_db("abihotel",$connect_mysql) or die ("Could not Connect to Database");
$query = "SELECT * FROM dish";
$result=mysql_query($query) or die("Query Failed : ".mysql_error());
$i=0;
while($rows=mysql_fetch_array($result))
{
$name[$i]=$rows['name'];
$i++;
}
$total_elmt=count($name);
?>
<div class="abi">
<?php

if(isset($_POST['submit']))
{
$value=$_POST['sel'];

$query2 = "SELECT * FROM dish WHERE name='$value'";
$result2=mysql_query($query2) or die("Query Failed : ".mysql_error());
while($row=mysql_fetch_array($result2))
{
	echo "id: ".$row['id']."<br/>";
	echo "Name: ".$row['name']."<br/>";
	echo "Category: ".$row['category']."<br/>";
	echo "Price: ".$row['price']."<br/>";
	echo "availabe time: ".$row['available_time']."<br/>";
}
mysql_close($connect_mysql);
}
?>
</div>
</body>
</html>
