	<?php
	  $name = "test";
	  $value = 78;
	  $expire = time() + (60 * 60 * 24 * 7 * 2);

	  	setcookie($name, $value, $expire);
	  //setcookie('teine', 'tere', time() + 10);
	  // nimetus, väärtus, aegumishetk

	  //setcookie($name);
	  //setcookie($name, null);
	  //setcookie($name, $value, time() - 3600); 
 	?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>2. periood 8. praktikum</title>
</head>
<body>
	<pre>
		<?php 
			print_r($_COOKIE); 
			$test = $_COOKIE["test"];

			/*
			if (isset($_COOKIE["test"])) {
				$test = $_COOKIE["test"];
				else {
					$test = "";
				}
			}
			*/
			$test = isset($_COOKIE["test"]) ? $_COOKIE["test"] : "";

			echo $test;
		?>
	</pre>
</body>
</html>
	