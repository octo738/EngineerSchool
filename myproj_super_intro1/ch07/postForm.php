<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
		<title>隠しフィールドを送信する</title>
	</head>
	<body>
		<form action="usePostData.php"method="post">
			好きな数値入力:<input type="text"name="num1">(※０～１３の範囲)<br>
			隠しフィールド:※画面には表示されない<br>
			<?php
			$num=0;
			echo'<input type="hidden"name="num2"value="',$num,'">';
			?>
			<input type="submit"value="送信">
		</form>
	</body>
</html>