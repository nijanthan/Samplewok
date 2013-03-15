<?php 
include_once("library.php");
if(isset($_POST['login']))
{
	
	$name=trim($_POST['name']);
	$pass=trim($_POST['password']);
	db_connecting();
	$sql="select * from login where email='".$name."' and password='".$pass."'";
	$connect=mysql_query($sql);
	$num=mysql_num_rows($connect);
	if($num==0)
	{
		?>
        <script>
		alert("Invalid User 
        </script>
        <?php
		
	}else
	{
		header("Location:home.php");
	}
	
	
	
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body id="body">
<div class="form" ><br />

<h1>&nbsp;&nbsp;PLUSKB INNOOVATION</h1>
<div class="container" >

<form action="" method="post">
<table width="282" height="149">
<tr><td width="118" height="47">User Name</td><td width="162"><input type="text" name="name" class="form_input"/></td></tr>
<tr><td height="40">Password</td><td><input type="password" name="password" class="form_input"/></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="LOGIN" name="login" /></td><td> &nbsp;&nbsp;&nbsp;<input type="submit" value="SIGN UP" name="signup" /></td></tr>
</table>
</form>
</div>





</div>
</body>
</html>