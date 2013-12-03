<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
<meta charset="ISO-8859-1">
	<link rel="stylesheet" type="text/css" href="default.css" />
<title>Melp! Home Page</title>
</head>
  <body>  
  <div id="wrapper">
  <div id="header-wrapper">
  <div id="header" class="container">
  <div id="logo">
	<h1>
	<a href="#">Melp!</a>
	</h1>
	<p>A Yelp! Clone</p>
	</div>
	</div>
	<div id="menu" class="container">
	<ul>
	<li class="current_page_item">
		<a title="" accesskey="1" href="#">Home Page</a>
	</li>
	<li>
		<a title="" accesskey="1" href="login.php">Login</a>
	</li>
	<li>
		<a title="" accesskey="1" href="maps.php">Map</a>
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
	<h2>Home Page</h2>
	This is the landing page for Melp!. You can create a new page <a href="place.php">here</a>. <br/>
	Please start your experience by <a href="login.php">creating an account</a> or <a href="search.php">finding an establishment</a>.<br/>
	</div>
   </div>
  </body>
</html>
