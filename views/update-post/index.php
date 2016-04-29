<?php
use app\controllers\PostController;
$postID = $_GET["postID"];
$session = Yii::$app->session;
$session->open ();
$result = PostController::actionGetmyposts ( $session->get ( 'staffFormalEmail' ) );
$allFollwers = json_decode ( $result, true );
?>
<!DOCTYPE h3 PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<title>Update Post</title>
</head>
<body style="background-color: highlight;">

<form action="index.php?r=post/updatepost" method="post">
<input type="hidden" name="postID" value="<?= $allFollwers [$postID] ["PostID"]; ?>"/>
<table border="1">
			<tr>
				<td>Edit Your Post</td>
			</tr>
			<tr>
				<td><textarea name="newContent" rows="10" cols="80"><?= $allFollwers [$postID] ["Content"]; ?></textarea></td>
			</tr>
		</table>
		<input type="hidden" name="_csrf"
			value="<?=Yii::$app->request->getCsrfToken()?>" /> <br>
		<br>
		<center>
		<input
				style="color: fuchsia; height: 50px; width: 100px; font: bold; font-size: 15px"
				type="submit" value="Update Post" />
		</center>

</form>

</body>
</html>


