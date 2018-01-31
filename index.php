<!DOCTYPE html>
<html>
<head>
	<title>Crud app</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
	<div class="container ">
		<div class="page-header">
		  	<h1>Crud App <small>With Php</small></h1>
		</div>

		<div class="row">
			<div class="col-md-4">
				<form role="form" action="insert.php" method="post">
					<div class="form-group">
						<label>Book Title</label>
						<input type="text" name="btitle" class="form-control">
					</div>

					<div class="form-group">
						<label>Book Price</label>
						<input type="text" name="bprice" class="form-control">
					</div>
					<button type="submit" name="submit" class="btn btn-info btn-block">Add Book</button>
				</form>
			</div>
		<div class="col-md-2"></div>
			<div class="col-md-6">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Book title</th>
							<th>Book Price</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>Java</td>
							<td>$20</td>
							<td>
								<a href="#" class="btn btn-success">Edit</a>
								<a href="#" class="btn btn-danger">Delete</a>
							</td>
						</tr>
					</tbody>

					<tbody>
						<tr>
							<td>Java</td>
							<td>$20</td>
							<td>
								<a href="#" class="btn btn-success">Edit</a>
								<a href="#" class="btn btn-danger">Delete</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>	
		</div>
	</div>
</body>
</html>