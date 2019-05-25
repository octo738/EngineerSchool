<?php
    $cards=array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
                "07.png","08.png","09.png","10.png","11.png","12.png","13.png",);
?>
<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
	</head>
	<body>
	<div style="text-align:center">
	<font size="6">High＆Lowゲーム</font>
	<hr>
	<form action="highAndLowS07.php"method="post">
		<?php
		$leftCard=mt_rand(0,13);
		echo'<img src="../cards/',$cards[$leftCard],'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		echo'<img src="../cards/bg.png"><br><br>';
		echo'<input type="hidden"name="leftCard"value="',$leftCard,'">';
		?>
		<input type="radio"name="select"value="High">High&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="radio"name="select"value="Low">Low<br><br>
		<input type="submit"value="決定">
	</form>
	</div>
	</body>
</html>