<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Dashboard For: <?php echo $_SESSION['username']; ?></title>
<style>
xmp {
    background-color: #eee;
    border-radius: 4px;
    font-family: courier, monospace;
    padding: 0 3px;
    margin: 16px;
}
code {
  background-color: #eee;
    border-radius: 4px;
    font-family: courier, monospace;
    padding: 0 3px;
}
</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ZPL PhP</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Learn</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  More Options...
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="login.php">Sign In</a></li>
                  <li><a class="dropdown-item" href="registration.php">Sign Up</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="dashboard.php">Accounts</a></li>
<li><a class="dropdown-item" href="#">Account Settings</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Hello: <?php echo $_SESSION['username']; ?></a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
	<h1>Hello Welcome To Account Info: <?php echo $_SESSION['username']; ?></h1>
<xmp>Your Username is: <?php echo $_SESSION['username']; ?></xmp>
<xmp>Password Is: <?php echo "db.php ERORR"?></xmp>
    <iframe 
      src="https://axphp1.embed.clappia.com/app/UJW558287" 
      width="100%" 
      height="600" 
      frameborder="0" 
      marginheight="0" 
      marginwidth="0">
        Loading...
    </iframe> 
<p><a href="logout.php" style="margin: 16px;">Logout</a></p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
