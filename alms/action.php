<?php
	$conn = mysqli_connect("localhost", "root", "", "lms");
	
	$reader_id = $_POST['reader_id'];
	$book_id = $_POST['book_id'];
	$rent_date = $_POST['rent_date'];
	$return_date = $_POST['return_date'];
	
	$sql = "INSERT INTO rents SET reader_id=$reader_id, book_id=$book_id, rent_date='$rent_date', return_date='$return_date'";
	
	mysqli_query($conn, $sql);
	
	header("Location: rents.php");
?>