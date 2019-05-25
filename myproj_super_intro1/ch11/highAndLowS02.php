<?php
    $cards=array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png",
                "07.png","08.png","09.png","10.png","11.png","12.png","13.png",);
    $num1=mt_rand(0,13);
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
	echo'<img src="../cards/',$cards[$num1],'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	echo'<img src="../cards/bg.png">';
	?>
	</div>
	</body>
</html>