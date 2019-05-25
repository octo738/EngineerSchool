<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
	</head>
	<body>
	<?php
	   $num=$_POST['number'];
	   if(($num%2)==0){
	       echo$num,"偶数です。";
	   }else{
	       echo$num,"は奇数です。";
	   }
	?>
	</body>
</html>