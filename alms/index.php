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

      <main>
        <div class="main-header">
          <div class="container">
            <h1 class="lead text-center">
              Welcome to Library Management System!
            </h1>
          </div>
        </div>

      </main>
    </body>
</html>