<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Muhammed Yaman</title>

</head>
 
<body>
	<form action="decbin" method="post">
		Sayı <br>
		<input type="text" name="txtSayi1"><br><br>
		<input type="submit" name="btn" value="ÇEVİR">
		<br> <br>
	</form>
	
	<?php
	
	if(isset($_POST["btn"])){
		$sayi1=$_POST["txtSayi1"];
		echo decbin("$sayi1");
	}
	
	?>
</body>
</html>
 