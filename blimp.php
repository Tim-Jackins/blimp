<?php
	if(isset($_GET["led3"])) {
		$led3 = $_GET["led3"];
		system("gpio mode 2 out");
		system("gpio write 2 ".$led3);
	}
	if(isset($_GET["led4"])) {
		$led4 = $_GET["led4"];
		system("gpio mode 3 out");
		system("gpio write 3 ".$led4);
	}
	if(isset($_GET["led5"])) {
		$led5 = $_GET["led5"];
		system("gpio mode 4 out");
		system("gpio write 4 ".$led5);
	}

?>

<html>
	<head>
		<title>My Blimp Controller</title>
	</head>
	<style>
	.on, .off {
		width:40%;
		color:blue;
		margin:20px;
		padding:20px;
		text-align:center;
		font-size:40px;
		font-family:arial;
		display:inline-block;
	}
	.on {
		background-color:Gold;
	}
	.off {
		background-color:MidnightBlue;
	}
	a {
		text-decoration:none;
		color:PowderBlue;
	}
	</style>
	<body>
	<p>
	<div class = "on"><a href="blimp.php?led3=1&led4=1">MOTORS1 and 2 ON</a></div> 
	<div class = "off"><a href = "blimp.php?led3=0&led4=0">MOTORS1 and 2 OFF</a></div>
	<div class = "on"><a href="blimp.php?led4=1">MOTOR2 ON</a></div>
	<div class = "off"><a href = "blimp.php?led4=0">MOTOR2 OFF</a></div>
	<div class = "on"><a href="blimp.php?led5=1">MOTOR3 ON</a></div>
	<div class = "off"><a href = "blimp.php?led5=0">MOTOR3 OFF</a></div>
	</p>
	</body>
</html>
