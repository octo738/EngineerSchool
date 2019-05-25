<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
	</head>
	<body>
	<div style="text-align:center">
	<font size="6">BlackJackゲーム</font>
	<hr>
	<form action="blackjack02.php"method="post">
		<?php
		$player1=mt_rand(1,10);
		$player2=mt_rand(1,10);
		$dealer1=mt_rand(1,10);
		$dealer2=mt_rand(1,10);

		$Ptotal=$player1+$player2;
		$Dtotal=$dealer1+$dealer2;

		echo"あなたの合計は",$Ptotal,"です。<br>";
		echo"ディーラーのカードは",$dealer1,"が見えています。<br><br>";
        //echo"ディーラーの合計は$Dtotal<br>";

        while($Dtotal <= 17)
            $Dtotal=$Dtotal+mt_rand(1,10);
        //echo"ディーラーの合計は$Dtotal<br>";

		echo'<input type="hidden"name="Ptotal"value="',$Ptotal,'">';
		echo'<input type="hidden"name="Dtotal"value="',$Dtotal,'">';

		?>
		<input type="radio"name="select"value="Hit">Hit
		<input type="radio"name="select"value="Stand">Stand<br><br>
		<input type="submit"value="決定">
	</form>
	</div>
	</body>
</html>