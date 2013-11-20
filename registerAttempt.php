<?php
session_start();
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
    echo "You have registered, welecome to Melp!";
  }else{
    echo "That username is taken, sorry";
  }
}
?>