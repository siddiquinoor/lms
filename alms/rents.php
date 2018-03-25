<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, inital-scale=1">
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
    </head>

    <body>
      <header class="navbar navbar-static-top">
        <div class="container-fluid">
        <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">LMS</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="authors.php">Authors</a></li>
              <li><a href="books.php">Books</a></li>
              <li><a href="readers.php">Readers</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rent <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="rents.php">Rent Report</a></li>
                  <li><a href="addrent.php">Add Rent</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Book Return</li>
                  <li><a href="returnbook.php">Book Return Entry</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="">Default <span class="sr-only">(current)</span></a></li>
              <li><a href="">Feedback</a></li>
              <li><a href="">Reader Login</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
        </div>
      </header>

      <section class="container">
		
		  <h2>Rent <small class="pull-right"><a href="addrent.php" class="btn btn-info" role="button">Add Rent</a></small></h2>
		  <p>The list shows all available rent of books</p>            
		  <table class="table table-hover">
			<thead>
			  <tr>
				<th>#</th>
				<th>Reader Name</th>
				<th>Book Name</th>
				<th>Rent Date</th>
				<th>Return Date</th>
				<th>Book Return</th>
			  </tr>
			</thead>
			<tbody>
				
				<?php
					$conn = mysqli_connect("localhost", "root", "", "lms") or die("Failed to connect to database!");
					$sql = "SELECT 
							readers.reader_name, books.book_name, rents.rent_date, rents.return_date, rents.is_return 
							FROM rents, readers, books
							WHERE rents.reader_id=readers.id AND rents.book_id=books.id
							ORDER BY rents.id DESC";
					
					$rst = mysqli_query($conn, $sql);
					
					if($rst)
					{
						$cnt = 1;
						
						while($row = mysqli_fetch_assoc($rst))
						{
							$is_return = $row['is_return'];
							
							if($is_return)
								$return = "YES";
							else
								$return = "NO";
							
							echo '<tr>';
							echo '	<td>'.$cnt.'</td>';
							echo '	<td>'.$row['reader_name'].'</td>';
							echo '	<td>'.$row['book_name'].'</td>';
							echo '	<td>'.$row['rent_date'].'</td>';
							echo '	<td>'.$row['return_date'].'</td>';
							echo '	<td>'.$return.'</td>';
							echo '  </tr>';
							
							$cnt++;
						}
					}
				?>
			
			  
			  
			  
			</tbody>
		  </table>
      </section>
    </body>
</html>