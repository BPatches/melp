session_start();
$conn = new mysqli('localhost','team07','mango','team07');

$uname = $conn->real_escape_string($_POST['uname']);
$pass = $conn->real_escape_string($_POST['pass']);

if($uname && $pass){
  $result = $conn->query("Select * from users where username=".$uname);
  if(!$result){
    throw new Exception("could not access database");
  }
  if ($result->num_rows==0){
    $_SESSION['uname']=$uname;
    $result = $conn->query("INSERT INTO users (uname,passwd) Values (".$uname.",".$pass.')');
    throw echo "You have registered, welecome to Melp!";
  }else{
    throw new Exception("that user name is taken");
  }
}
