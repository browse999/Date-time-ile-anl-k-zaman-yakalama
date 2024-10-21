<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php 


date_default_timezone_set('Europe/Istanbul');


// Date time  explode fonksiyonuyla bir örnek


	// anlık zaman alma


echo  $zaman = date("d-m-y  h:i:s");


$sonuc = explode("  ", $zaman);



echo "<pre>";
print_r($sonuc);
echo "</pre>";


echo "<br>";





	 ?>



	


</body>
</html>