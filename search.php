<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
<meta charset="ISO-8859-1">
	<link rel="stylesheet" type="text/css" href="default.css" />
<title>Melp! Search</title>
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
		<a title="" accesskey="1" href="establishment.php">Establishment</a>
	</li>
	<li>
		<a title="" accesskey="1" href="maps.php">Map</a>
	</li>
	<li class="current_page_item">
		<a title="" accesskey="1" href="#">Search</a>
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
	<h2>Search</h2>
	Search for an establishment using the field(s) below.<br/>
	
	<form action="searchResult.php" method="POST">
     Location name: <input type="text" name="searchname"><br>
     <input type="submit" value="Submit">
   </form>
   
	</div>
   </div>
  </body>
</html>
