<?php

/* @var $this yii\web\View */
$this->title = 'Follow Me';
$session = Yii::$app->session;
$session->open();
?>

 
  
<!DOCTYPE h3 PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
	<head>
		<title>Follow Me</title>
	</head>
	<body style="background-image: url('https://www.opendns.com/wp-content/uploads/2016/03/Home-Page-Hero-32.jpg'); background-position: center;">
		<center>
			<h1 style="color: blue;">Welcome To Follow Me</h1>
			<br><br>
			<br>
			<form action="index.php?r=second" method="post">
				<input style="color: fuchsia; height:80px; width:120px; font: bold; font-size: 30px" type="submit" value="Staff"/>
				<input type="hidden" name="userType" value="staff"/>
				<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>"/>
			</form>
			<br><br><br>
			<form action="index.php?r=second" method="post">
				<input style="color: fuchsia; height:80px; width:120px; font: bold; font-size: 30px" type="submit" value="Student"/>
				<input type="hidden" name="userType" value="student"/>
				<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>"/>
			</form> 
		</center>
	</body>
	<br><br><br><br>
</html>
