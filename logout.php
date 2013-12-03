<html>
<head>
<meta charset="ISO-8859-1">

	<link rel="stylesheet" type="text/css" href="default.css" />
<title>Melp! Logout</title>
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
	<li>
		<a title="" accesskey="1" href="search.php">Search</a>
	</li>
	</div>
	<div id="page" class="container">
	<h2>Logout</h2>

<?php session_destroy();

echo "You are now logged out.";

?>
</div>
	</body>
	</html>