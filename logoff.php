<html>
    <head>
       <link rel="stylesheet" type="text/css" href="web.css" />
       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       <title>E-Learning</title>
    </head>
    <body style="background-color:cyan">
        <form action="logoff.php" method="POST">
            
            <center><h1><p>Welcome to E-Learning Environment</p></h1></center>
                <img src="books.jpg" width="500" height="500 "align="middle">
               <a href="loginthruPDO.php" align="center">LOGIN HERE</a>
            <?php
            session_start();
            print '<script type="text/javascript">'; 
                print 'alert("Logout done!")'; 
                print '</script>';
            ?>
            </body>
            </form>
</html>
