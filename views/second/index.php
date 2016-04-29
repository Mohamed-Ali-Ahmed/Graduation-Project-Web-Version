<?php 
$userType = $_POST["userType"];
?>

<!DOCTYPE h3 PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
	<head>
		<title>Home Page</title>
	</head>
	<body style="background-color:highlight;">
		<center>
			<form action="index.php?r=login" method="post">
				<input type="hidden" name="userType" value="<?php echo htmlspecialchars($userType); ?>"/>
				<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>"/>
				<input style="color: fuchsia; height:50px; width:100px; font: bold; font-size: 20px" type="submit" value="Login"/>
			</form>
			<br><br>
			<h4 style="color: blue;">Sign Up</h4>
			<form action="index.php?r=signup" method="post">
				<input type="hidden" name="userType" value="<?php echo htmlspecialchars($userType); ?>"/>
				<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>"/>
				<input style="color: fuchsia; height:50px; width:100px; font: bold; font-size: 20px" type="submit" value="Sign Up"/>
			</form>
			<br><br><br><br><br><br><br><br>
			<form action="index.php?r=site" method="post">
				<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>"/>
				<input style="color: fuchsia; height:40px; width:150px; font: bold; font-size: 15px" type="submit" value="Back To Home Page"/>
			</form>
		</center>
		<br>
	</body>
</html>
