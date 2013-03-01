<html>
    <body bgcolor="#E6E6FA">
        <form action="register.php" method="POST">
        <table>
            <tr>
                <td>User Name:</td><td><input type="text" name="uname"/></td>
            </tr>
            <tr>
                <td>Password:</td><td><input type="password" name="pwd"/></td>
            </tr>
            <tr>
                <td>First Name:</td><td><input type="text" name="fname"/></td>
            </tr>
            <tr>
                <td>Last Name:</td><td><input type="text" name="lname"/></td>
            </tr>
            <tr>
                <td>Age:</td><td><input type="number" name="age"/></td>
            </tr>
            <tr>
                <td>Gender:</td><td>Male<input type="radio" name="gender" value="male">
                 Female<input type="radio" name="gender" value="female"></td>
            </tr>
            <tr>
                <td>Highest Qualification:</td><td><select name="qualification">
                                <option value="mca">MCA</option>
                                <option value="btec">BTech</option>
                                <option value="mtech">MTech</option>
                                <option value="graduate">Graduate</option>
                              </select></td>
            </tr>  </table>
                <input type="submit" name="submit" value="OK">
    </form>  
        </body>       
</html>
<?php
     if(isset($_POST['submit'])){ /* && $_POST['pwd'] && $_POST['fname'] && $_POST['lname'] && $_POST['age'] && $_POST['gender'] && $_POST['qualification'])*/
     $dsn="mysql:dbname=dbud";
     $username="root";
     $password="";
     try{
     $conn=new PDO($dsn,$username,$password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     }catch(PDOException $e){
         echo "Connection Failed:".$e->getMessage();
     }
     $uname=$_POST['uname'];
     $pwd=$_POST['pwd'];
     $fname=$_POST['fname'];
     $lname=$_POST['lname'];
     $age=$_POST['age'];
     $gender=$_POST['gender'];
     $qualification=$_POST['qualification'];
    // echo $uname.$pwd.$fname.$lname.$age.$gender.$qualification;
     
         
     $sql="insert into userinfo(username,password,fname,lname,age,gender,qualification) values('$uname','$pwd','$fname','$lname',$age,'$gender','$qualification');";
     try {
         $conn->query( $sql );
         print '<script type="text/javascript">'; 
            print 'alert("User Created!!")'; 
            print '</script>'; 
        }catch ( PDOException $e ) {
        echo "Query failed: " . $e-> getMessage();
}

          } else {
         echo "Invalid data";
     }
?>
