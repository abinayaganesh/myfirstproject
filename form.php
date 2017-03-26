<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</body>
</head>
<body>
<div class="container">
<h1>Submit form</h1>
<form action="dish.php" method="POST" role="form" class="form-horizontal">
	<div class="form-group">
		<label for="name" class="control-label col-sm-2">Name *</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" id="name" placeholder="Input field" required="required" name="name">
		</div>
	</div>
	<div class="form-group">
		<label for="category" class="control-label col-sm-2">category *</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" id="category" placeholder="Input field" required="required" name="category">
		</div>
	</div>
	<div class="form-group">
		<label for="price" class="control-label col-sm-2">price</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" id="price" placeholder="Input field" name="price">
		</div>
		<div class="form-group">
		<label for="available_time" class="control-label col-sm-2">available</label>
		<div class="col-sm-5">
		<input type="text" class="form-control" id="available_time" placeholder="Input field" name="available_time">
		</div>
	</div>
	</div>
	</div>
	<div class="form-group">
	<label class="control-label col-sm-2"></label>
		<div class="col-sm-2">
			<button type="submit" class="btn btn-sm btn-default" value="submit" name="submit_form">Submit</button>
		</div>
	</div>
</form>
</div>
</body>
</html>