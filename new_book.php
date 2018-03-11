<!doctype html>
<html>

<head>
  <title>New Book</title>
</head>

<body>
  <h1>New Book</h1>
  
  <form action="" method="post">
    <div>
      Author Name
      <select name="author_name">
        <option value="0">Select Author</option>
      </select>
    </div>
    <div>Book Name <input type="text" name="book_name"></div>
    <div>Book Info <textarea rows="3" cols="50" name="book_info"></textarea></div>
    <div>Quantity <input type="text" name="qty"></div>
    <div><input type="submit" value="SAVE"><input type="reset" value="RESET"></div>
  </form>
  
</body>
</html>
