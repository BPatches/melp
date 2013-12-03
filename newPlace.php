<?php session_start(); ?>
<!DOCTYPE html>

<html>
  <head>
    <meta charset="ISO-8859-1">
    <link rel="stylesheet" type="text/css" href="default.css" />

    <title> Add new place </title>
  </head>
  <body>  
    <div id="wrapper">
      <div id="header-wrapper">
	<div id="header" class="container">
	  <div id="logo">
	    <h1>
	      <a href="index.php">Melp!</a>
	    </h1>
	    <p>A Yelp! Clone</p>
	  </div>
	</div>
	<div id="menu" class="container">
	  <ul>
	    <li>
	      <a title="" accesskey="1" href="index.php">Home Page</a>
	    </li>
	    <li>
	      <a title="" accesskey="1" href="login.php">Login</a>
	    </li>
	    <li>
	      <a title="" accesskey="1" href="maps.html">Map</a>
	    </li>
		<li>
			<a title="" accesskey="1" href="search.php">Search</a>
		</li>
		<li>
		<?php
	   if (isset($_SESSION['uname'])){
              echo "<a href=\"logout.php\">logout ".$_SESSION['uname']."</a>";
	   }
        ?>
	</li>
	</div>
	<div id="page" class="container">
	  <form action="place.php" method="post">
	    Article Title: <input type="text" name="name"><br>
		Location Address: <input type="text" name="address"><br>
	    Article Contents:<br> <textarea rows="10" cols="75" name="contents"></textarea><br>
	    <input type="submit" value="submit">
	  </form>
	</div>
      </div>
  </body>
</html>
