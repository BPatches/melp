<?php

$db = new mysqli('localhost','team08','mango','team08');
$name = $_POST["name"];
$contents = $_POST["contents"];


$header="<?php session_start(); ?>
<!DOCTYPE html>

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
		<a title=\"\" accesskey=\"1\" href=\"../maps.php\">Map</a>
	</li>
	<li>
		<a title=\"\" accesskey=\"1\" href=\"../search.php\">Search</a>
	</li>
	<li>
	<?php
	   if (isset(\$_SESSION['uname'])){
              echo \"<a href=\\\"logout.php\\\">logout \".\$_SESSION['uname'].\"</a>\";
	   }
        ?>
	</li>
	</div>
	<div id=\"page\" class=\"container\">";

$footer="
    <br> <a href='../editPlace.php?page=".htmlspecialchars($name)."'>edit</a> 
	</div>
    </div>
  </body>
</html>";

$db = new mysqli('localhost','team08','mango','team08');


    $escName = $db->real_escape_string($name);
    $escCont = $db->real_escape_string($contents);


$result = $db->query("select * from articles where articleTitle=\"".$escName."\"");
  if(!$result){
    echo $conn->error;
    throw new Exception("could not access database");
  }
  if ($result->num_rows!=0){
    $name = $_POST["name"];
	$address = $_POST["address"];
    $contents = $_POST["contents"];

    $page = $header."".$name."".$menBar."<h2>".htmlspecialchars($name)."</h2><h3>".htmlspecialchars($address)."</h3>".htmlspecialchars($contents).$footer;

    $my_file = "places/".str_replace(" ","_",$name).'.php';
    $handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
    fwrite($handle, $page);
    $escName = $db->real_escape_string($name);
	$escAddr = $db->real_escape_string($address);
    $escCont = $db->real_escape_string($contents);

    $qu = "UPDATE articles set articleContents=\"".$escCont."\" where articleTitle=\"".$escName."\"";
    $db->query($qu);
    echo $db->error;
	$qu2 = "UPDATE addresses set address=\"".$escAddr."\" where name=\"".$escName."\"";
	$db->query($qu2);
	echo $db->error;
    $db->close();
    header( 'Location: places/'.str_replace(" ","_",$name).'.php' ) ;
  }else{
    echo "That page dosen't exist, perhaps you would like to <a href=\"editPlace.php?page=".$name."\">edit it</a>?";
  }

?>