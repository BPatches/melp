<!DOCTYPE html>

<html>
<head>
<meta charset="ISO-8859-1">
<title>Melp! Login</title>
</head>
  <body>  
	<h1>Melp!</h1>
	<h2>Login</h2>
        This is the login page.
   <br> log in:
        <form>
          <form action="loginAttempt.php" method="post">
           username: <input type="text" name="uname"><br>
           password: <input type="password" name="password"><br>
          <input type="submit" value="Submit">
        </form>
        <br>
        or register for a new account
        <form>
          <form action="registerAttempt.php" method="post">
           username: <input type="text" name="uname"><br>
           password: <input type="password" name="password"><br>
          <input type="submit" value="Submit">
        </form>
        
  </body>
</html>
