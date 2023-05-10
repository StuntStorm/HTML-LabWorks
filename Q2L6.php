<!DOCTYPE html>
<html>
<head>
	<title>PHP Variables Example</title>
</head>
<body>

	<?php
		$name = "Sumesh";
		$age = 48;
		$weight = 50;
		$is_male = true;
		$null_var = null;
		$array_var = array("apple", "jackfruit", "banana");
		echo "Name: " . $name . " (type: " . gettype($name) . ")<br>";
		echo "Age: " . $age . " (type: " . gettype($age) . ")<br>";
		echo "Weight: " . $weight . " (type: " . gettype($weight) . ")<br>";
		echo "Is Male: " . $is_male . " (type: " . gettype($is_male) . ")<br>";
		echo "Null Variable: " . $null_var . " (type: " . gettype($null_var) . ")<br>";
		echo "Array Variable: ";
		print_r($array_var);
		echo " (type: " . gettype($array_var) . ")<br>";
	?>
</body>
</html>
