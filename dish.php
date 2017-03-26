<?php 
include "includes/db.php";
if(isset($_POST['submit_form'])){
$name=strip_tags($_POST['name']);
$category=strip_tags($_POST['category']);
$price=$_POST['price'];
$available_time=strip_tags($_POST['available_time']);
$ins_sql="insert into dish(name,category,price,available_time) values('$name','$category','$price','$available_time')";
$run_sql=mysqli_query($conn,$ins_sql);
}