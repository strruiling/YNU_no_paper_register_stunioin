﻿
<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <meta charset="utf-8">
        <title>云南大学学生部门网上申请</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Secpro">

        <!-- CSS -->
        
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="logo span4">
                        <h5><a href="">  云大小喇叭 <span class="red">.</span></a></h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="register-container container">
            <div class="row">
                <div class="iphone span5">
                   
                </div>
                <div class="register span6">
                    <form action="" method="post">

						
						
<?php
$name = $_POST['department'];
$con = mysql_connect("localhost","root","sw960602");
if (!$con)
  {
  die('Could not connect: '.mysql_error());
  }

mysql_select_db("studentinfo", $con);
mysql_query("set names utf8");
$result = mysql_query("SELECT * FROM department
WHERE NAME like '%{$name}%'");
//$sql = "SELECT * FROM department WHERE NAME='$POST_['department']'";
//$result = mysql_query($sql);

if(!$result)
{
	die('error:'.mysql_error());
}

while($row = mysql_fetch_array($result))
  {
  echo "<a href=".$row['link'].">".$row['NAME']."</a>";
  }

mysql_close($con);
?>
                    
					
					
					
					</form>
                </div>
            </div>
        </div>
        <div align="center">Powered by YNU_Tech_Group</a></div>
        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>

