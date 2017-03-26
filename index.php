<?php include 'includes/db.php'; ?>
<html>
<head>
	<title>register pg</title>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		.container{
			padding-top: 120px;
		}
		body{
			background-image: url("images/Light-Color-Wallpaper.jpg");
		}
		table{
			border:4px solid grey;
		}
	</style>
</head>
<body>
<div class="container">
<table class="table table-striped">
	<thead>
		<th>name</th>
		<th>category</th>
		<th>price</th>
		<th>available_time</th>
	</thead>
	<tbody>
<?php
	$sql="select * from dish";
	$run_sql=mysqli_query($conn,$sql);
while($rows=mysqli_fetch_array($run_sql)){
	echo '
	<tr>
	<td>'.$rows['name'].'</td>
	<td>'.$rows['category'].'</td>
	<td>'.$rows['price'].'</td>
	<td>'.$rows['available_time'].'</td>
	</tr>';
}
?>
</tbody>
</table>
</div>
</body>
</html>