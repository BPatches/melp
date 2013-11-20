
session_start();
$conn = new mysqli('localhost','team07','mango','team07');

$uname = $conn->real_escape_string($_POST['uname']);
$pass = $conn->real_escape_string($_POST['pass']);

if($uname && $pass){
  $result = $conn->query("Select * from users where username=".$uname.
			 "and passwd=".$pass);
  if(!$result){
    throw new Exception("could not log you on");
  }
  if ($result->num_rows>0){
    $_SESSION['uname']=$uname;
  }else{
    echo("could not log you on <br> <a href=\"login.php\">try again</a>");
  }
}

