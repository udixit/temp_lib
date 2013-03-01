<?php
$msg = array('invalid' => "Access denied!!Please try again",
             'error' => "this is an error");
if(!empty($_GET['q'])) {
    $a = $_GET['q'];
    echo $msg[$a];
}
?>

<html>
    <body bgcolor="GREEN">
          <form action="home.php" method="POST">
           Username: <input type="text" name="uname" value=""><br>
           Password: <input type="password" name="pwd" value=""><br>
           <input type="submit" name="submit" value="OK">
           New User?<a href="register.php">Register Here</a><br>
	</form>
        
    </body>
</html>
