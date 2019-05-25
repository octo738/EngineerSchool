<?php
	$cards=array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
                    "07.png","08.png","09.png","10.png","11.png","12.png","13.png");
	$rightCard=mt_rand(0,13);
	$hNum=$_POST['leftCard'];
	$iNum=$_POST['select'];
?>
<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
	</head>
	<body>
	<div style="text-align:center">
	<font size="6">High＆Lowゲーム</font>
	<hr>
		<?php
		$result;
		echo'<img src="../cards/',$cards[$hNum],'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo'<img src="../cards/',$cards[$rightCard],'"><br><br>';
		echo"「",$iNum,"」","を選択しました。<br><br>";
		if($hNum<$rightCard){
		    $result="High";
		}
		elseif($hNum>$rightCard){
		    $result="Low";
		}
		else{
		    $result=$iNum;
		}
		if($result==$iNum){
		    echo"you win<br><br>";
		}
		else{
		    echo "you lose<br><br>";
		}
		?>
		<a href="highAndLowS03.php">もう一度挑戦</a>
	</div>
	</body>
</html>