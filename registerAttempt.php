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
		<a title="" accesskey="1" href="login.php">Login</a>
	</li>
	<li>
		<a title="" accesskey="1" href="maps.php">Map</a>
	</li>
	<li>
		<a title="" accesskey="1" href="search.php">Search</a>
	</li>
	</div>
	<div id="page" class="container">
	<h2>Registration</h2>
<?php
$conn = new mysqli('localhost','team08','mango','team08');

$uname = $conn->escape_string($_POST['uname']);
$pass = sha1($conn->escape_string($_POST['password']));

if($uname && $pass){
  $result = $conn->query("select * from users where userName=\"".$uname."\"");
  if(!$result){
    echo $conn->error;
    throw new Exception("could not access database");
  }
  if ($result->num_rows==0){
    $_SESSION['uid']=$conn->insert_id;
    $_SESSION['uname']=$uname;
    $result = $conn->query("INSERT INTO users (userName,pwd) Values (\"".$uname."\", \"".$pass.'")');
    if(!$result){
       echo $conn->error;
    }      
    echo "You have registered, welcome to Melp!";
  }else{
    echo "That username is taken, sorry. Please try a different username.";
  }
}
echo "<br/>Click <a href='login.php'>here</a> to return to the login page.";
?>
</div>
	</body>
	</html>
