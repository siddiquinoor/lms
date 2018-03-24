<?php 

  if( isset($_POST) && $_POST['author_name'] != "" )
  {
    // connecting to the database
	$author_name=$_POST['author_name'];
	$author_bio=$_POST['author_bio'];
	$sql="INSERT INTO authors SET author_name='$author_name', author_bio='$author_bio'";//'' for varchar and charecter 
    $conn = mysqli_connect("localhost", "root", "", "lms") or die("Failed to connect");
    mysqli_query($conn, $sql);//connection ob+sql qury
    header("Location: new_author.php?msg=new author added!");
  }
  else
  {
	echo "<a href='new_author.php'>Go Back</a>";
    die("No author name given");
	
  }

?>