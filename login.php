<!DOCTYPE html>

<html>
<head>
<meta charset="ISO-8859-1">

	<link rel="stylesheet" type="text/css" href="default.css" />
<title>Melp! Login</title>
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
	<li class="current_page_item">
		<a title="" accesskey="1" href="#">Login</a>
	</li>
	<li>
		<a title="" accesskey="1" href="establishment.php">Establishment</a>
	</li>
	<li>
		<a title="" accesskey="1" href="maps.html">Map</a>
	</li>
	</div>
	<div id="page" class="container">
	<h2>Login</h2>
        This is the login page.
   <br> log in:
        <form>
          <form action="loginAttempt.php" method="post">
           username: <input type="text" name="uname"><br>
           password: <input type="password" name="password"><br>
          <input type="submit" value="Submit">
        </form>
        <br>
        or register for a new account
        <form>
          <form action="registerAttempt.php" method="post">
           username: <input type="text" name="uname"><br>
           password: <input type="password" name="password"><br>
          <input type="submit" value="Submit">
        </form>
        
	</div>
  </body>
</html>
