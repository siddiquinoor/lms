<?php
	$aid = $_POST['ref_author_name'];
	$bname = $_POST['book_name'];
	$binfo = $_POST['book_info'];
	$bqty = $_POST['qty'];
	
	
	
	$conn = mysqli_connect("localhost", "root", "", "lms") or die("Failed to connect to database");	
	$sql = "INSERT INTO books SET ref_author_id = $aid, book_name = '$bname', book_info = '$binfo', book_qty = $bqty";

	mysqli_query($conn,$sql);
	
	header("Location: books.php");
?>