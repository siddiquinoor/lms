<?php
  if( isset($_POST) && $_POST['author_name'] != "" )
  {
    // connecting to the database
    $conn = mysqli_connect("localhost", "root", "", "lms");
    mysqli_query( $conn, "INSERT INTO authors SET author_name='$author_name', author_bio='$author_bio'");
    header("Loction: new_author.php?msg=Author added!");
  }
  else
  {
    die("No author name given");
    echo "<a href="new_author.php">Go Back</a>";
  }
?>
