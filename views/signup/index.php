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
	<h1 style="color: blue;"> Staff Sign Up</h1><br><br>
	<form action="index.php?r=staff/signup" method="post">
			<table border="1">
				<tr><td>Name </td><td><input type="text" name="staffName"/></td></tr>
				<tr><td>Formal Email  </td><td><input type="text" name="staffFormalEmail"/></td></tr>
				<tr><td>Password  </td><td><input type="password" name="staffPassword"/></td></tr>
			</table>
			<input type="hidden" name="userType" value="staff"/>
			<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>"/>
			<br><br>
			<input style="color: fuchsia; height:50px; width:80px; font: bold; font-size: 15px" type="submit" value="Sign Up"/>
			</form>
<?php 
}
else 
{
	?>
	<h1 style="color: blue;"> Student Sign Up</h1><br><br>
	<form action="index.php?r=student/signup" method="post">
	<table border="1">
	<tr><td>Name </td><td><input type="text" name="studentName"/></td></tr>
	<tr><td>ID </td><td><input type="text" name="studentID"/></td></tr>
	<tr><td>Email </td><td><input type="text" name="studentEmail"/></td></tr>
	<tr><td>Password </td><td><input type="password" name="studentPassword"/></td></tr>
	</table>
	<input type="hidden" name="userType" value="student"/>
	<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>"/>
	<br><br>
	<input style="color: fuchsia; height:50px; width:80px; font: bold; font-size: 15px" type="submit" value="Sign Up"/>
	</form>
	
	
	
<?php 
}
?>

<br>
	<br><br><br>
			<form action="index.php?r=second" method="post">
				<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>"/>
				<input type="hidden" name="userType" value="student"/>
			<input style="color: fuchsia; height:40px; width:150px; font: bold; font-size: 15px" type="submit" value="Back To Home Page"/>
			</form>
	</center>
	</body>
</html>