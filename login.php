<html>
    <body bgcolor="GREEN">
          <form action="login.php" method="POST">
           Username: <input type="text" name="uname" value=""/><br/>
           Password: <input type="password" name="pwd" value=""/><br/>
           <input type="submit" value="OK" name="OK"/>
	</form>
     <?php
     $dsn="mysql:dbname=dbud";
     $username=$_POST['uname'];
     $password=$_POST['pwd'];
     try{
     $conn=new PDO($dsn,$username,$password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     }catch(PDOException $e){
         echo "Connection Failed:".$e->getMessage();
     }
     $sql="select * from users";
     $rows=$conn->query($sql);
     foreach($rows as $row){
         if($row['username']==$username and $row['password']==$password){
             echo "Login Successful!";
             $flag=0;
             break;
         }
         if(!flag){
             echo "Access denied!!";
         }
     }
      $conn=null;
      
     ?>   
        
    </body>
</html>
