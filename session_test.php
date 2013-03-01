<?php
session_start();
//echo session_name()."\n";
echo session_id();
/*
$firstName="UD";
$age = "34";
$queryString = "firstname=$firstName&amp;age=$age";
echo ' <p> <a href="session_test.php?' . $queryString . '" > Find out more info on
this person < /a > < /p >';*/
$_SESSION["myname"]="UD";
//session_destroy();
echo $_SESSION["myname"];
//header('Location:C:\Users\binaya\Downloads\test.html');
?>
