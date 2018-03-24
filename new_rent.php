<!doctype html>
<html>

<head>
  <title>New Rent</title>
</head>

<body>
  <h1>New Rent</h1>
  
  <form action="add_rent.php" method="post">
    <div>
      Reader's Name :
      <select name="reader_name">
        <option value="0">sabbir</option>
        <option value="1">sabita</option>
        <option value="2">sakib</option>
      </select>
    </div> 
	<br>
	<div>
      Book's Name :
      <select name="book_name">
        <option value="0">physics</option>
        <option value="1">biology</option>
        <option value="2">c++</option>
      </select>
    </div>
	<br>
    <div><p>Rent Date : <input type="date" name="rent_date"></p></div>
    <div><p>Return Date : <input type="date" name="return_date"></p></div>
    <div><input type="submit" value="SAVE"> <input type="reset" value="CLEAR FORM"></div>
  </form>
  
</body>
</html>