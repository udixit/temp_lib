<?php
      session_start();
      if(isset($_POST['submit']))     {
   
     $flag=0;
     $dsn="mysql:dbname=dbud";
     $username="root";
     $password="";
     try{
     $conn=new PDO($dsn,$username,$password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     }catch(PDOException $e){
         echo "Connection Failed:".$e->getMessage();
     }
     $u=$_POST['uname'];
     $p=$_POST['pwd'];
     $_SESSION['name']=$u;
     $sql="select username,password from userinfo;";
     $rows=$conn->query($sql);
     foreach($rows as $row){
         if($row['username']==$u && $row['password']==$p){
             //echo "Login Successful!";
             //$uname=$_POST['uname'];
             //$pwd=$_POST['pwd'];
             print '<script type="text/javascript">'; 
            print 'alert("Login Successfull.Welcome '.$u.'")'; 
            print '</script>';
             $flag=1;
             break;
         }
         
         }
         if(!$flag){
             
             header("Location:loginthruPDO.php?q=invalid");
             
             //exit;
     }
      $conn=null;
     }
 ?>
<html>
    <head><title>The main page</title>
    </head>
    <body>
        <form action="abc.php" method="POST">
          <input type="submit" name="catalogue" value="Show Catalogue">
        </form>
    </body>
</html>