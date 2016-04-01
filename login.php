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
					<td><input type="text" name="unique" id="unique" size="30" required></td>
				</tr>
				<tr>
					<td><p class="label">Event : </p></td>
					<td>
						<select name="event" id="event">
							<option value="selected">--Select--</option>
							<option value="e1">Technical Quiz</option>
							<option value="e2">Treasure Hunt</option>
							<option value="e3">Code Debugging</option>
							<option value="e4">Web Designing Contest</option>
							<option value="e5">Paper Presentation</option>
							<option value="e6">Best Manager</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><br><br><p>Not registered? <a href="register.php">Register Now</a></p></td>
					<td><br><br><input type="submit" name="submit" id="submit" value="Login" style="width:100%"></td>
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
	$uni = $_POST['unique'];
	$event = $_POST['event'];
	$sql = "Select `uniqueid` from `student` where `uniqueid`='$uni'";
	$res = mysql_query($sql,$con);
	if($val = mysql_fetch_array($res,MYSQL_BOTH)){
		$esql="INSERT INTO register VALUES ('$uni','$event')";
		$eres=mysql_query($esql,$con);
		if($eres)
			echo '<script>alert("Event Registration Successful");window.location="home.html"</script>';
		else
			echo '<script>alert("Already registered!!!");
				window.location="index.php";
				</script>';
	}
	else
		echo '<script>alert("login unsuccessful!!!");
		window.location="index.php";
		</script>';
}
?>