<!doctype html>
<html>
<head><title>Author List</title></head>
 <body> 
 <h1>Author List</h1>
 
 	<div>
		<h3><a href="new_author.php">Add New Author</a></h3>
	</div>
 
 <table width="100">
  <tr>
    <td>#</td>
    <td>Author Name</td>
    <td>Author Bio</td>
  </tr>
  
  <?php
    $conn = mysqli_connect("localhost", "root", "", "lms");
    $sql = "SELECT * FROM authors";
    
    $rst = mysqli_query($conn, $sql);
    
    if($rst){
      while( $row = mysqli_fetch_assoc($rst) ){
        echo "<tr>";
        echo "<td>#</td>";
        echo "<td>".$row->author_name."</td>";
        echo "<td>".$row->author_bio."</td>";
      }
    }
  ?>
  
 </table>

 </body>
 </html>
