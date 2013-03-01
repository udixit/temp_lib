<?php
session_start();
if(isset($_POST['submit']))
{
    $dsn="mysql:dbname=dbud";
    $username="root";
    $password="";
    
    try{
        $conn=new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOEXCEPTION $e){
        echo "Connection Failed:".$e->getMessage();
}
}
//$conn=null;
/*$k='a';
for($i=0;$i<$_SESSION['flag'];$i++){
 $p=$_SESSION["$k"];$k++;
echo $p.'<br>';*/
$bname=$_POST['bookname'];
echo "$bname";
$usrname=$_SESSION['name'];
$sql="select username from bookaccount where username=$usrname";
try{
    $row=$conn->query($sql);
    echo $sql;
}  catch (PDOException $e){
    echo "Query failed:".$e->getMessage();
}

?>
