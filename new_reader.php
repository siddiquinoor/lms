<!doctype html>
<html>

<head>
  <title>New Reader</title>
</head>

<body>
  <h1>New Reader</h1>
  
  <form action="add_reader.php" method="post">
	<div>Reader Name : <input type="text" name="reader_name" placeholder="ex: John Doe"></div>
    <div><p>Phone : <input type="tel" name="phone" placeholder="ex: +8801234567890"></p></div>
    <div><p>Email : <input type="email" name="email" placeholder="ex: abc@def.com"></p></div>
	<div><p>Address : <textarea rows="2" cols="50" name="address"></textarea></p></div>
    <div><input type="submit" value="SAVE"> <input type="reset" value="Clear form"></div>
  </form>
  
</body>
</html>