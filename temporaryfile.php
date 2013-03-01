<html>
    <form action="temporaryfile2.php" method="POST">
        <input type="submit" name="submit" value="Click Me">
<?php
include 'ChromePhp.php';
session_start();
$i=1;
$j=5;
$k=$i+$j;
$_SESSION['value']=$k;

?>
</form>
</html>