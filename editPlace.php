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

	<?php
		$db = new mysqli('localhost','team08','mango','team08');
		$name = $_GET["page"];
		echo "<h2>Editing: ".htmlspecialchars($name)."</h2>";
		$escName = $db->real_escape_string($name);
		echo "<form action=\"updatePage.php\" method=\"POST\">";
		echo "<input type=\"hidden\" name=\"name\" value=\"".$name."\">";
		$result = $db->query("select address from addresses where name=\"".$escName."\"");
		$row = $result->fetch_row();
		echo "Edit Address: <input type=\"text\" name=\"address\" value=".$row[0]."><br>";
		$result = $db->query("select articleContents from articles where articleTitle=\"".$escName."\"");
		echo "<textarea cols=\"75\" rows=\"10\" name=\"contents\">";
		$row = $result->fetch_row();
		echo $row[0];
		echo "</textarea><br>";
		echo "<input type=\"submit\" value=\"submit\">";
		echo "</form>";
		echo "</div>
		</div>
		</body>
		</html>";
	?>
	</div>
    </div>
  </body>
</html>