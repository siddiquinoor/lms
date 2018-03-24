<!doctype html>
<html>
<head><title>Author List</title></head>
 <body> 
	<h1>Library Management System</h1>
	<h2>Menu</h2>
	
	<ul>
		<li><a href="authors.php">Author</a></li>
		<li><a href="books.php">Books</a></li>
		<li><a href="reader.php">Reader</a></li>
		<li><a href="rent.php">Rent</a></li>
	</ul>
		
 <h1>Author List</h1>
 
 	<div>
		<h3><a href="new_author.php">Add New Author</a></h3>
	</div>
 
 <table width="100%" border="1" cellspacing="0">
  <tr>
    <th>#</th>
    <th width="200">Author Name</th>
    <th>Author Bio</th>
  </tr>
  
  <?php
    $conn = mysqli_connect("localhost", "root", "", "lms");
    $sql = "SELECT * FROM authors ORDER BY id DESC";
    
    $rst = mysqli_query($conn, $sql);
    
    if($rst){
		$cnt = 1;
		while( $row = mysqli_fetch_assoc($rst) ){
			echo "<tr>";
			echo "<td>".$cnt."</td>";
			echo "<td>".$row['author_name']."</td>";
			echo "<td>".$row['author_bio']."</td>";
			$cnt++;
		}
    }
  ?>
  
 </table>

 </body>
 </html>