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

			$id=$_GET['id'];
			

			//Create Database------
			include ('dbconnect.php');

			//create query
			$query="SELECT * FROM books WHERE book_id='$id' ";
			$result=mysqli_query($conn,$query);

			


	 ?>
	<div class="container">
		<div class="jumbotron">
				 
				  <p>Update Book Name and Price:</p>
				  <p><a class="btn btn-primary btn-lg" href="index.php" role="button">Home</a></p>
		</div>		
		
		
			<form role="form" action="edit.php" method="get">

			<?php 

					while ($row=mysqli_fetch_assoc($result)) {
						

			 ?>

			 <input type="hidden" name="bookid" value="<?php echo $row['book_id']; ?>">
			<div class="form-group ">
				<label>Book Title</label>
				<input type="text" name="btitle" class="form-control" value="<?php echo $row['book_title'];  ?>">
			</div>

			<div class="form-group ">
				<label>Book Price</label>
				<input type="text" name="bprice" class="form-control" value="<?php echo $row['book_price']; ?>">
				
			</div><br>
		<button type="submit" name="submit" class="btn btn-info btn-block">Edit Book</button>	

			
			
		
		
			<?php 

					} 

					mysqli_close($conn);


			?>
				
		</form>
		
	</div>

</body>
</html>
