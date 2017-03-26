<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		body{
			background-image: url("images/Light-Color-Wallpaper.jpg");
		}
	</style>
</body>
</head>
<body>
<div class="container">
<h1>Order online</h1>
<form action="submit_process.php" method="POST" role="form" class="form-horizontal">
	<div class="form-group">
		<label for="name" class="control-label col-sm-2">Name *</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" id="name" placeholder="Input field" required="required" name="name">
		</div>
	</div>
	<div class="form-group">
		<label for="phno" class="control-label col-sm-2">Ph no *</label>
		<div class="col-sm-5">
		<input type="phno" class="form-control" id="phno" placeholder="Input field" required="required" name="phno">
		</div>
	</div>
	<div class="form-group">
		<label for="address" class="control-label col-sm-2">Address *</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" id="address" placeholder="Input field" name="address">
		</div>
	</div>
	<div class="form-group">
		<label for="dish" class="control-label col-sm-2">Dish</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" id="dish" placeholder="Input field" name="dish">
		</div>
	</div>
	<div class="form-group">
		<label for="category" class="control-label col-sm-2">Category </label>
		<div class="col-sm-2">
		<select name="category" id="category" class="form-control" required="required" >
			<option value="southindian">SouthIndian</option>
			<option value="northindian">NorthIndian</option>
		</select>
		</div>
	</div>
	<div class="form-group">
		<label for="quantity" class="control-label col-sm-2">Quantity</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" id="quantity" placeholder="Input field" name="quantity">
		</div>
	</div>
	<div class="form-group">
		<label for="price" class="control-label col-sm-2">Price</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" id="price" placeholder="Input field" name="price">
		</div>
	</div>
	</div>
	<div class="form-group">
	<label class="control-label col-sm-2"></label>
		<div class="col-sm-2">
			<button type="submit" class="btn btn-sm btn-default" value="submit" name="submit_form">Submit</button>
		</div>
	</div>
	</div>
</form>
</div>
</body>
</html>