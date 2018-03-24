<!doctype html>
<html>

<head>
  <title>New Author</title>
</head>

<body>

	<h2>Menu</h2>
	
	<ul>
		<li><a href="authors.php">Author</a></li>
		<li><a href="books.php">Books</a></li>
		<li><a href="reader.php">Reader</a></li>
		<li><a href="rent.php">Rent</a></li>
	</ul>

	<?php
	(isset ($_GET['msg']))
	?>
  <h1>New Author</h1>
  
  <form action="add_author.php" method="post">
    <div>Author Name : <input type="text" name="author_name"></div>
    <div><p>Biography : <textarea rows="3" cols="50" name="author_bio"></textarea></p></div>
    <div><input type="submit" value="SAVE"> <input type="reset" value="CLEAR FORM"></div>
  </form>
</body>
</html>