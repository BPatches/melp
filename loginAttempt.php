<?php session_start();?>
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
		<a title="" accesskey="1" href="maps.php">Map</a>
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
	<h2>Login Attempt</h2>
<?php
$conn = new mysqli('localhost','team08','mango','team08');

$uname = $conn->real_escape_string($_POST['uname']);
$pass = sha1($conn->real_escape_string($_POST['password']));

if($uname && $pass){
  $result = $conn->query("Select * from users where userName=\"".$uname.
			 "\"and pwd=\"".$pass.'"');
  if(!$result){
    throw new Exception("Could not log you on.");
  }
  if ($result->num_rows>0){
    $row = $result->fetch_row();
    $_SESSION['uid']=$row[0];
    $_SESSION['uname']=$uname;
    echo "Welcome back ". $_SESSION['uname'].". If you were wondering, you are user ".$_SESSION['uid'].".";
  }else{
    echo("Could not log you on. <br> <a href=\"login.php\">Return to login</a>");
  }
}

?>
</div>
	</body>
	</html>