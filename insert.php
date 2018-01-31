<?php 
	//Create Database------
	include ('dbconnect.php');

	$title=$_POST['btitle'];
	$price=$_POST['bprice'];


	//Create Query------

	$query="INSERT INTO books(book_title,book_price) VALUES('$title','$price')";

	if (mysqli_query($conn,$query)) {
		
		header("Location:index.php");
	}
	else{
		echo "Error in insert Query";
	}

	mysqli_close($conn);

 ?>