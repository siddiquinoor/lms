<!doctype html>
<html>

<head>
  <title>New Book</title>
</head>

<body>
  <h1>New Book</h1>
  
  	<h2>Menu</h2>
	
	<ul>
		<li><a href="authors.php">Author</a></li>
		<li><a href="books.php">Books</a></li>
		<li><a href="reader.php">Reader</a></li>
		<li><a href="rent.php">Rent</a></li>
	</ul>
  
  <form action="add_book.php" method="post">
    <div>
      Author Name
      <select name="ref_author_name">
        <option value="0">Select Author</option>
		
		<?php
			$conn = mysqli_connect("localhost", "root", "", "lms");
			$sql = "SELECT * FROM authors ORDER BY author_name ASC";
			
			$rst = mysqli_query($conn, $sql);
			
			if($rst){
				while( $row = mysqli_fetch_assoc($rst) ){
					echo '<option value="'.$row['id'].'">'.$row['author_name'].'</option>';
				}
			}
		  ?>
		
		
      </select>
    </div>
    <div><p>Book Name <input type="text" name="book_name"></p></div>
    <div><p>Book Info <textarea rows="3" cols="50" name="book_info"></textarea></p></div>
    <div><p>Quantity <input type="number" name="qty"></p></div>
    <div><input type="submit" value="SAVE"> <input type="reset" value="RESET"></div>
  </form>
  
</body>
</html>