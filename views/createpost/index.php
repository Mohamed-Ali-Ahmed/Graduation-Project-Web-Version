<?php 
use app\controllers\PostController;
?>
<!DOCTYPE h3 PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<title>Home Page</title>
</head>
<body style="background-color: highlight;">
	<br>
	<br>
	<br>
	<form style="float: right;" action="index.php?r=site" method="post">
		<input type="hidden" name="_csrf"
			value="<?=Yii::$app->request->getCsrfToken()?>" /> <input
			style="color: fuchsia; height: 40px; width: 150px; font: bold; font-size: 15px"
			type="submit" value="Logout" />
	</form>
	<br>
	<h2 style="color: blue; float: left;">Create Post</h2>
	<br>
	<br>
	<br>
	<form action="index.php?r=post/write" method="post">
		<table border="1">
			<tr>
				<td>Enter Your Post</td>
			</tr>
			<tr>
				<td><textarea name="content" rows="10" cols="80"></textarea></td>
			</tr>
		</table>
		<input type="hidden" name="_csrf"
			value="<?=Yii::$app->request->getCsrfToken()?>" /> <br>
		<br>
		<center>
		<input
				style="color: fuchsia; height: 50px; width: 80px; font: bold; font-size: 15px"
				type="submit" value="Post" />
		</center>
	</form>
	<br>
	<br>
	<br>
<?php
$session = Yii::$app->session;
$session->open ();
$result = PostController::actionGetmyposts ( $session->get ( 'staffFormalEmail' ) );
$allFollwers = json_decode ( $result, true );
?>
<table border="0.5">
<?php 
for($i = 0; $i < (sizeof ( $allFollwers )); $i++)
{
	?>
<tr>
	<td><?= $allFollwers [$i] ["Content"];?></td>
	<td><?php echo "                                                 ";?> </td>
	<td>
	<details>
  		<summary></summary>
  			<a href="index.php?r=update-post&postID=<?=$i ?>">Update Post</a>
  			<br>
  			<a href="index.php?r=post/deletepost&postID=<?= $allFollwers [$i] ["PostID"]; ?>">Delete Post</a>
	</details>
	</td>
	</tr>
	<tr>
	<td><?=$allFollwers [$i] ["Time"];?></td>
	<td>
	<?="<br><br><br>";?>
	</td>
</tr>
<?php }?>
</table>

</body>
</html>