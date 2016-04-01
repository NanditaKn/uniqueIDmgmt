<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>

<div class="container">
	<div class="transbox">
		<p class="head">Login</p>
		<p id="head"></p>
		<form method="POST" action="#">
			<center><table cellspacing="5">
				<tr>
					<td><p class="label">Login ID : </p></td>
					<td><input type="text" name="login" id="login" size="30" required></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" id="submit" value="Login" style="width:100%"></td>
				</tr>
			</table><br>
		</form>
	</div>
</div>

</body>
</html>
<?php
if(isset($_POST['submit'])){
	include("db.php");
	$id = $_POST['login'];
	if(substr_compare($id,"13BIT")==0){
		$sql = "Select `id` from `volunteer` where `id`='$id'";
		$res = mysql_query($sql,$con);
		if($val = mysql_fetch_array($res,MYSQL_BOTH))
			echo '<script>alert("Login Successful");window.location="login1.php"</script>';
		else			
			echo '<script>alert("login unsuccessful!!!");
			window.location="login1.php";
			</script>';
	}
}
?>