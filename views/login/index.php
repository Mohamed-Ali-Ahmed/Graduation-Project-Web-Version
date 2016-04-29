<?php
$userType = $_POST["userType"];
?>

<!DOCTYPE h3 PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
	<head>
		<title>Sign Up Page</title>
	</head>
	<body style="background-color:highlight;"> 
		<center>
<?php 
if ($userType == "staff")
{
	?>
	<h1 style="color: red;"> Staff Login</h1><br><br><br>
	<form action="index.php?r=staff/login" method="post">
			<table border="1">
				<tr><td>Formal Email </td><td><input type="text" name="staffFormalEmail"/></td></tr>
				<tr><td>Password </td><td><input type="password" name="staffPassword"/></td></tr>
			</table>
			<br><br>
			<input style="color: fuchsia; height:50px; width:80px; font: bold; font-size: 15px" type="submit" value="Login"/>
	</form>
	<?php 
}
else 
{
	?>
	<h1 style="color: red;"> Student Login</h1><br><br><br>
	<form action="index.php?r=student/login" method="post">
			<table border="1">
				<tr><td>Email </td><td><input type="text" name="studentEmail"/></td></tr>
				<tr><td>Password </td><td><input type="password" name="studentPassword"/></td></tr>
			</table>
			<br><br>
			<input style="color: fuchsia; height:50px; width:80px; font: bold; font-size: 15px" type="submit" value="Login"/>
		</form>
	
	<?php 
}
?>

<br><br><br><br><br><br>
			<form action="index.php?r=second" method="post">
				<input type="hidden" name="userType" value="<?php echo htmlspecialchars($userType); ?>"/>
				<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>"/>
				<input style="color: fuchsia; height:40px; width:150px; font: bold; font-size: 15px" type="submit" value="Back To Home Page"/>
			</form>
	</center>
	</body>
</html>
	