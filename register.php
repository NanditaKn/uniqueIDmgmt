<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<link rel="stylesheet" type="text/css" href="register.css">
		<script src="regvalid.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="transbox">
				<p class="head">Registration Form</p>
				<p id="head"></p>
				<form method="POST" action="#" onSubmit = "return formvalid()">
					<center><table cellspacing="5">
						<tr>
							<td><p class="label">Name : </p></td>
							<td><input type="text" name="name" id="name" size="30"></td>
						</tr>
						<tr>
							<td><p class="label">Email Id : </p></td>
							<td><input type="email" name="email" id="email" size="50"></td>
						</tr>
						<tr>
							<td><p class="label">Department(UG) : </p></td>
							<td>
								<select name="dept" id="dept">
									<option value="selected">--Select--</option>
									<option value="mech">Mechanical</option>
									<option value="civil">Civil</option>
									<option value="eee">EEE</option>
									<option value="ece">ECE</option>
									<option value="cse">CSE</option>
									<option value="it">IT</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><p class="label">Year : </p></td>
							<td>
								<select name="year" id="year">
									<option value="selected">--Select--</option>
									<option value="first">First</option>
									<option value="second">Second</option>
									<option value="third">Third</option>
									<option value="fourth">Fourth</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><p class="label">College Name : </p></td>
							<td>
								<select name="cname" id="cname">
									<option value="selected">--Select--</option>
									<option value="AAA">AAA College of Engineering</option>
									<option value="SRV">Sri Vidhya College of Engineering</option>
									<option value="PSR">P.S.R. College of Engineering</option>
									<option value="MSE">Mepco Schlenk Engineering College</option>
									<option value="KCE">Kamaraj College of Engineering</option>
									<option value="TCE">Thiyagaraja College of Engineering</option>
								</select>
							</td>
							<p id="p2"></p>
						</tr>
						<tr>
							<td><p class="label">Mobile No : </p></td>
							<td><input type="number" name="cnt" id="cnt" size="10"></td>
							<p id="p5"></p>
						</tr>
						<tr>
							<td><input type="submit" name="submit" id="submit" value="Register"></td>
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
	$name = $_POST['name'];
	$email = $_POST['email'];
	$dept = $_POST['dept'];
	$year = $_POST['year'];
	$cname = $_POST['cname'];
	$mobile = $_POST['cnt'];
	$uid;
	$a = 0;
	$csql = "Select `id` from `college` where `cid`='$cname'";
	$cres = mysql_query($csql,$con);
	if($val = mysql_fetch_array($cres,MYSQL_BOTH)){
		$a = $val["id"];
	}
	if($a < 10)
		$uid = $cname.'#0'.++$a;
	else
		$uid = $cname.'#'.++$a;
	$sql="INSERT INTO student VALUES ('$email','$uid','$name','$dept','$year','$cname','$mobile')";
	
	$res=mysql_query($sql,$con);
	echo $res;
	if($res){
		echo '<script>alert("Welcome!!!......");
		window.location="index.php";
		</script>';
		$csql="UPDATE college SET `id`='$a' WHERE `cid`='$cname'";
		mysql_query($csql,$con);
	}
	else{
		echo '<script>alert("User already exists!!!......");
		window.location="register.php";
		</script>';
	}
}
?>