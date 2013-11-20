<?php
session_start();
echo "placeholder image";
if (isset($_SESSION['userName'])){
  echo '<div id=\"userName\">'. $_SESSION['userName'].'<div>';
  echo '<div id=\"userName\"><a href="logout.php">logout<a>';
}else{
  echo '<div id=\"userName\"><a href="login.php">login<a>';
}
?>