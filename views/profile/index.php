<?php
use app\controllers\PostController;
use app\controllers\StaffController;
use app\controllers\FollowController;
$session = Yii::$app->session;
$session->open ();
if(!isset($_GET["done"]))
{
	$staffFormalEmail = $_GET ["staffID"];
	$session->set ( 'staffFormalEmail', $staffFormalEmail );
}
?>


<!DOCTYPE h3 PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<title>Profile</title>
<script type="text/javascript">
function change() 
{
	document.getElementById("follow").value="Following";
}
function change1() 
{
		document.getElementById("follow").value="Follow";
		document.getElementById('unFollow').style.visibility = 'hidden';
}

</script>

</head>
<body style="background-color: highlight;">
<?php
$checkFollow = FollowController::checkFollwer();
if ($checkFollow == "NotFollowed") 
{
?>
	<form action="index.php?r=follow/add" method="post" onsubmit="change()" style="float: center;">
		<input type="hidden" name="staffFormalEmail"
			value="<?=$session->get('staffFormalEmail'); ?>" />
			<input type="hidden" name="c" value=add"/>
			<?php echo StaffController::getStaffName($session->get('staffFormalEmail'));?> 
			<input onchange="index.php?r=follow/add" style="color: fuchsia; height: 25px; width: 90px; font: bold; font-size: 15px"
			type="submit" id="follow" value="Follow" />
	</form>
	
<?php
} 
else
{
	?>
	<form action="" method="post"  
		style="float: center;">
		<input type="hidden" name="staffFormalEmail"
			value="<?=$session->get('staffFormalEmail'); ?>" />
			<?php echo StaffController::getStaffName($session->get('staffFormalEmail'));?> 
			<input onclick="return change();"
			style="color: fuchsia; height: 25px; width: 90px; font: bold; font-size: 15px"
			type="submit" id="follow" value="Following" />
	</form>


	<form action="index.php?r=follow/remove" method="post" onsubmit="change()">
		<input type="hidden" name="staffFormalEmail"
			value="<?=$session->get('staffFormalEmail'); ?>" /> <input
			onclick="return change1();"
			style="color: fuchsia; height: 25px; width: 90px; font: bold; font-size: 15px"
			type="submit" id="unFollow" value="UnFollow" />
	</form>
<?php
}
?>
	
<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<?php
$result = PostController::actionGetmyposts ( $session->get ( 'staffFormalEmail' ) );
$allFollwers = json_decode ( $result, true );
for($i = 0; $i < (sizeof ( $allFollwers )); $i ++) {
	echo $allFollwers [$i] ["Content"];
	echo "<br>";
	echo $allFollwers [$i] ["Time"];
	echo "<br><br>";
}
?>
<br>
	<br>
	<br>
	<br>
<center>
<form action="index.php?r=showfollowersposts" method="post">
				<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>"/>
				<input style="color: fuchsia; height:40px; width:150px; font: bold; font-size: 15px" type="submit" value="Back To Home Page"/>
			</form>

</body>
</center>
</html> 



