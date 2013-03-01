<html>
	<head>
		<title>Library Redefined!!</title>
	</head>
	<body bgcolor="#E6E6FA">
            <a href="logoff.php" style="float:right">Logout</a>
            <table border="6">
                <tr><th> File Name</th><th>File Size</th><th>Last modified Time</th><th>Action</tr>
            
			
			<h1>A Virtual Library System!!</h1>
			<?php
                                session_start();
                                //$g=$_SESSION['name'];
                                echo "Welcome!".$_SESSION['name'];
                                $log_directory = 'D:/A.K.Verma/ebook';
				$results_array = array();
                                $counter="0";
				if (is_dir($log_directory))
				{									
					if ($handle = opendir($log_directory))
					{
                                            
						//to read directory contents
                                            $i='a';
						while(($file = readdir($handle)) !== FALSE)
						{
							$results_array[] = $file;
                                                    
                                                        $_SESSION["$i"]=$file;
                                                        $i++;$counter++;
                                                        
                                                        
                                                        //$filepath="$log_directory"."/$file";
                                                       // print ceil(filesize($filepath)/10000)."<br>";
                                                        
						}
                                                $_SESSION['flag']=$counter;
                                                
                                                 closedir($handle);
					}
				}
                                $filepath="";
                                $len=count($results_array);
                                $_SESSION['len']=$len;
                    
                                //echo $len;
				//Output findings
                                //$_SESSION[$counter]=0;
				foreach($results_array as $value)
				{
                                        
                                        ?><form action='formhandler.php' method='post'>
                                       <?php $filepath="$log_directory"."/$value";
                                      // $_SESSION[$counter]=$value;$counter++;
					echo '<tr><td>'.basename($value,".pdf") .'</td><td>'.(filesize($filepath)/10000).'</td><td>'.date("F d y H:i:s.",filemtime($filepath)).'</td><td>'?>
                                            <input type='submit' name='submit' value="Add"></td></tr>
                                            <input type="hidden" name="bookname" value="<?php echo $value?>"/>
                                        </form><?php
				}
                                
			?>
                        </table>
			</body>
</html>