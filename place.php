<?php
$header="<!DOCTYPE html>

<html>
<head>
<meta charset=\"ISO-8859-1\">
	<link rel=\"stylesheet\" type=\"text/css\" href=\"default.css\" />

<title>Melp! Establishment Page</title>
</head>
  <body>  
	<div id=\"wrapper\">
  <div id=\"header-wrapper\">
  <div id=\"header\" class=\"container\">
  <div id=\"logo\">
	<h1>
	<a href=\"index.php\">Melp!</a>
	</h1>
	<p>A Yelp! Clone</p>
	</div>
	</div>
	<div id=\"menu\" class=\"container\">
	<ul>
	<li>
		<a title=\"\" accesskey=\"1\" href=\"index.php\">Home Page</a>
	</li>
	<li>
		<a title=\"\" accesskey=\"1\" href=\"login.php\">Login</a>
	</li>
	<li>
		<a title=\"\" accesskey=\"1\" href=\"establishment.php\">Establishment</a>
	</li>
	<li>
		<a title=\"\" accesskey=\"1\" href=\"maps.html\">Map</a>
	</li>
	</div>
	<div id=\"page\" class=\"container\">";

$footer="    </div>
  </body>
</html>";

echo $header;
echo $footer;
?>