<?php
$server='localhost';
$user='abi';
$password='sofiamenon';
$db='abihotel';
$conn=mysqli_connect($server,$user,$password,$db);
if(!$conn){
	die("connection failed:".mysqli_connect_error());
}
?>