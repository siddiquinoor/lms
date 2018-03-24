<!doctype html>
<html>

<head>
  <title>Books</title>
</head>

<body>
	<h1>Books</h1>
	
	<h2>Menu</h2>
	
	<ul>
		<li><a href="authors.php">Author</a></li>
		<li><a href="books.php">Books</a></li>
		<li><a href="reader.php">Reader</a></li>
		<li><a href="rent.php">Rent</a></li>
	</ul>
	
	<h3><a href="new_book.php">Add New Book</a></h3>
	
	
	<table width="100%" border="1" cellspacing="0">
	  <tr>
		<th>#</th>
		<th width="200">Book Name</th>
		<th>Author Name</th>
		<th>Book Info</th>
		<th>Quantity</th>
	  </tr>
	  
	  <?php
		$conn = mysqli_connect("localhost", "root", "", "lms");
		$sql = "SELECT * FROM books ORDER BY id DESC";
		
		$rst = mysqli_query($conn, $sql);
		
		if($rst){
			$cnt = 1;
			while( $row = mysqli_fetch_assoc($rst) ){
				echo "<tr>";
				echo "<td>".$cnt."</td>";
				echo "<td>".$row['book_name']."</td>";
				echo "<td>".$row['ref_author_id']."</td>";
				echo "<td>".$row['book_info']."</td>";
				echo "<td>".$row['book_qty']."</td>";
				$cnt++;
			}
		}
	  ?>
	  
	 </table>	
		
	
</body>
</html>