<?php
    $profile['name']="神田ゴロウ";
    $profile['身長']=169.5;
    $profile['age']=19;
    $profile['型']='A';
?>
<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html;charset=UTF-8">
	</head>
	<body>
	<?php
	   echo$profile['name'],"さんの身長は",$profile['身長'],"cmです。<br>";
	   echo$profile['age'],"歳、血液型は",$profile['型'],"型です。<br>";
	?>
	</body>
</html>