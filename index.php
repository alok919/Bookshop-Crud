<!DOCTYPE html>
<html>
<head>
	<title>Crud app</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>

		<?php 
				//DB connect
			include ('dbconnect.php');

			//connect Queary

			$query="SELECT * FROM books";
			$result=mysqli_query($conn,$query);






		 ?>
	<div class="container ">
		<div class="page-header">
		  	<h1>CRUD APP <small>WITH PHP</small></h1>
		</div>

		<div class="row">
			<div class="col-md-4">
				<h3>Insert Book :</h3>
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
				<h3>Display Book: </h3>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Book title</th>
							<th>Book Price</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
						<?php 

							while ($row=mysqli_fetch_assoc($result)){


						 ?>
							<tr>
								<td><?php echo $row['book_title'] ?></td>
								<td><?php echo $row['book_price'] ?></td>
								<td>
									<a href="update.php" class="btn btn-success" role="button">Edit Book</a>
									<a href="delete.php" class="btn btn-success" role="button">Delete Book</a>
								</td>
							</tr>




						 <?php 
								}
									mysqli_close($conn);


						?>
						
					</tbody>

					
						

						
					
				</table>
			</div>	
		</div>
		
	</div>
</body>
</html>