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
		<a title="" accesskey="1" href="maps.php">Map</a>
	</li>
	<li class="current_page_item">
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
	<h2>Search Results</h2>
	
	<?php
	$conn = new mysqli('localhost','team08','mango','team08');
	
	$searchname = $conn->real_escape_string($_POST['searchname']);
	$address = $conn->real_escape_string($_POST['address']);
	
	if($searchname || $address) {
		if($address && $searchname) {
			$result = $conn->query("Select name, address, articlePage from addresses, articles where address like \"%".$address."%\"
				and name like \"%".$searchname."%\" and name = articleTitle");
		} else if ($address) {
			$result = $conn->query("Select name, address, articlePage from addresses, articles where address like \"%".$address."%\" and name = articleTitle");
		} else {
			$result = $conn->query("Select name, address, articlePage from addresses, articles where name like \"%".$searchname."%\" and name = articleTitle");
		}
		if(!$result) {
			throw new Exception("Error searching the database. Try again later.");
		}
		if($result->num_rows>0) {
		echo "Results found:<br/><br/>";
		echo "<table border=1 width=400>";
		echo "<tr><td>Name</td><td>Address</td><td width=100>Link</td></tr>";
		$numresults = $result->num_rows;
		for ($numresults; $numresults > 0; $numresults--) {
			$row = $result->fetch_row();
			echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td><a href='".$row[2]."'>Link to article</a></td></tr>";
		}
		echo "</table>";
		} else {
			echo "No results found for that name and/or address. Please try again.";
		}
	} else {
		echo "No search criterion were used. Please try again.<br/>";
	}
	?>
	<br/>Click <a href="search.php">here</a> to search again.
	</div>
   </div>
  </body>
</html>
