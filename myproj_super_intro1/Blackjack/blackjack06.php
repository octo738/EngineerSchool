<?php
	$PNum=$_POST['PNum'];
	$DNum=$_POST['DNum'];
	$iNum=$_POST['select'];
?>
<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
	</head>
	<body>
	<div style="text-align:center">
	<font size="6">BlackJackゲーム</font>
	<hr>
	<form action="blackjack07.php"method="post">
		<?php
		//echo"あなたの合計は",$PNum,"です。<br>";
		//echo"ディーラの合計は",$DNum,"です。<br>";

		echo"$iNum","を選択しました。<br>";
		if($iNum=="Hit"){
		    $PNum=$PNum+mt_rand(1,10);
		}
		else{
		    echo"ディーラの合計は",$DNum,"です。<br>";
		}

		echo"あなたの合計は",$PNum,"です。<br><br>";

		echo'<input type="hidden"name="PNum"value="',$PNum,'">';
		echo'<input type="hidden"name="DNum"value="',$DNum,'">';
		?>

		<input type="radio"name="select"value="Hit">Hit
		<input type="radio"name="select"value="Stand">Stand<br><br>
		<input type="submit"value="決定"><br><br>

		<a href="blackjack01.php">もう一度挑戦</a>
	</form>
	</div>
	</body>
</html>