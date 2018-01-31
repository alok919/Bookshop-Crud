<?php 


	//Create Database------
	include ('dbconnect.php');

	$id=$_GET['bookid'];
	$title=$_GET['btitle'];
	$price=$_GET['bprice'];

	//Create Query------
	$query="UPDATE books SET book_title='$title', book_price='$price' WHERE book_id='$id' ";

	if (mysqli_query($conn,$query)) {
		
		header("Location:index.php");
	}else{
		echo "Unsuccessfully Update data";
	}

	mysqli_close($conn);
















 ?>