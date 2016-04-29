<?php
use app\controllers\PostController;
?>
<!DOCTYPE h3 PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<title>Home Page</title>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script>
$(function() 
		{
	var source = [ { value: "index.php?r=profile&staffID=f.omara@fci-cu.edu.eg",
        label: "Fatma Omara"
      },
      { value: "amr.badr@fci-cu.edu.eg",
        label: "Facebook"
      }
    ];

	$(document).ready(function() {
	    $("#tags").autocomplete({
	        source: source,
	        select: function( event, ui ) { 
	            window.location.href = ui.item.value;
	        }
	    });
	});
    });
            
        </script>

</head>
<body style="background-color: highlight;">
<center>
	<table border="0.5">
		<tr><td><label for="tags"></label> <input id="tags" style="width: 350px; height: 30px;"></td>
		<td><img src="https://cdn4.iconfinder.com/data/icons/business-icons-18/64/Business_Icons-52-128.png" alt="Search" width="50" height="50">
	</td>
	</tr>
	</table>
	</center>
	<br>
	<br>
	<form style="float: right;" action="index.php?r=site" method="post">
		<input type="hidden" name="_csrf"
			value="<?=Yii::$app->request->getCsrfToken()?>" /> <input
			style="color: fuchsia; height: 40px; width: 150px; font: bold; font-size: 15px"
			type="submit" value="Logout" />
	</form>
	<br>
	<form action="index.php?r=Post/showfollowersposts" method="post"> 
		<input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
	</form>
	<?php 
	$result = PostController::actionShowfollowersposts();
	$allFollwers = json_decode($result , true);
	for ($i = 0 ; $i < sizeof($allFollwers) ; $i++)
	{
		for ($j = 0 ; $j < sizeof($allFollwers[$i]); $j++)
		{
				echo $allFollwers[$i][$j]["Content"];
				echo "<br>";
				echo $allFollwers[$i][$j]["Owner"];
				echo "<br>";
				echo $allFollwers[$i][$j]["Time"];
		}
		echo "<br><br>";
	}
	?>
	
</body>
</html>