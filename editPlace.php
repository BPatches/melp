
$header="<!DOCTYPE html>

<html>
<head>
<meta charset="ISO-8859-1">
	<link rel="stylesheet" type="text/css" href="default.css" />

<title> Edit <?php echo $_GET["page"];?></title>
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
		<a title="" accesskey="1" href="maps.html">Map</a>
	</li>
	</div>
	<div id="page" class="container">";
	<?php
		$db = new mysqli('localhost','team08','mango','team08');
		$name = $_GET["page"];
		echo "<h2>editing: ".htmlspecialchars($name)."</h2>";
		$escName = $db->real_escape_string($name);
		$result = $db->query("select articleContents from articles where articleTitle=\"".$escName."\"");
		echo "<form action=\"updatePage.php\" method=\"POST\">";
		echo "<input type=\"hidden\" name=\"name\" value=\"".$name."\">";
		echo "<textarea cols=\"75\" rows=\"10\" name=\"contents\">";
		$row = $result->fetch_row();
		echo $row[0];
		echo "</textarea><br>";
		echo "<input type=\"submit\" value=\"submit\">";
		echo "</form>";
	?>
    </div>
  </body>
</html>";
