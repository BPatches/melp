<?php
$header="<!DOCTYPE html>

<html>
<head>
<meta charset=\"ISO-8859-1\">
	<link rel=\"stylesheet\" type=\"text/css\" href=\"../default.css\" />

<title>";
$menBar="</title>
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
		<a title=\"\" accesskey=\"1\" href=\"../index.php\">Home Page</a>
	</li>
	<li>
		<a title=\"\" accesskey=\"1\" href=\"../login.php\">Login</a>
	</li>
	<li>
		<a title=\"\" accesskey=\"1\" href=\"../establishment.php\">Establishment</a>
	</li>
	<li>
		<a title=\"\" accesskey=\"1\" href=\"../maps.html\">Map</a>
	</li>
	</div>
	<div id=\"page\" class=\"container\">";

$footer="    </div>
  </body>
</html>";

$db = new mysqli('localhost','team08','mango','team08');
$name = $_POST["name"];
$contents = $_POST["contents"];

$page = $header."".$name."".$menBar."<h2>".$name."</h2>".$contents;

$my_file = "places/".str_replace(" ","_",$name).'.html';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
fwrite($handle, $page);
$escName = $db->real_escape_string($name);
$escCont = $db->real_escape_string($contents);
$qu = "INSERT INTO articles (articleName, articleContents) Values (".$escName.",".$escCont.")";
$db->query($qu);

$db->close();

header( 'Location: places/'.str_replace(" ","_",$name).'.html' ) ;
?>