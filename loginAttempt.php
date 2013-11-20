<?php
session_start();
$conn = new mysqli('localhost','team08','mango','team08');

$uname = $conn->real_escape_string($_POST['uname']);
$pass = sha1($conn->real_escape_string($_POST['password']));

if($uname && $pass){
  $result = $conn->query("Select * from users where userName=\"".$uname.
			 "\"and pwd=\"".$pass.'"');
  if(!$result){
    throw new Exception("could not log you on");
  }
  if ($result->num_rows>0){
    $row = $result->fetch_row();
    $_SESSION['uid']=$row[0];
    $_SESSION['uname']=$uname;
    echo "Welcome back ". $_SESSION['uname']." if you were wondering you are user ".$_SESSION['uid'];
  }else{
    echo("could not log you on <br> <a href=\"login.php\">try again</a>");
  }
}

?>