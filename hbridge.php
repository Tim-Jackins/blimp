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
	if(isset($_GET["led6"])) {
		$led6 = $_GET["led6"];
		system("gpio mode 5 out");
		system("gpio write 5 ".$led6);
	}
	if(isset($_GET["led7"])) {
		$led7 = $_GET["led7"];
		system("gpio mode 0 out");
		system("gpio write 0 ".$led7);
	}
	if(isset($_GET["led8"])) {
		$led8 = $_GET["led8"];
		system("gpio mode 1 out");
		system("gpio write 1 ".$led8);
	}
?>

<html>
	<head>
		<title>H Bridge Test</title>
	</head>
	<style>
	.on, .off, .numbers {
		width:40%;
		color:White;
		margin:20px;
		padding:20px;
		text-align:center;
		font-size:50px;
		font-family:georgia;
		display:inline-block;
	}
	.on {
		background-color:Crimson;
		border-radius:20px;
		border: 6px solid FireBrick; 
	}
	.off {
		background-color:LightSkyBlue;
		border-radius:20px;
		border: 6px solid DeepSkyBlue; 
	}
	.numbers {
		background-color:Orange;
		border-radius:20px;
		border: 6px solid DarkOrange;
	}
	a {
		text-decration:none;
		color:White;
	}
	</style>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
	function testFunc() {
		document.getElementById("data").innerHTML = "updating..";
		$.ajax(
		{
			type:"POST",
			url:"cgi-bin/blimp-website.py",
			dataType:"html",
			success: function(msg)
			{
				document.getElementById("data").innerHTML = msg;
			},
		});
	}
	</script>
	<body>
	<p>
	<div class = "on"><a href="hbridge.php?led3=1&led4=0&led5=1&led6=0&led7=<?php echo($led7) ?>&led8=<?php echo($led8) ?>">Up</a></div>
	<div class = "on"><a href="hbridge.php?led3=0&led4=1&led5=0&led6=1&led7=<?php echo($led7) ?>&led8=<?php echo($led8) ?>">Down</a></div>
	<div class = "off"><a href="hbridge.php?led3=<?php echo($led3) ?>&led4=<?php echo($led4) ?>&led5=<?php echo($led5) ?>&led6=<?php echo($led6) ?>&led7=1&led8=<?php echo($led8) ?>">Left</a></div>
	<div class = "off"><a href="hbridge.php?led3=<?php echo($led3) ?>&led4=<?php echo($led4) ?>&led5=<?php echo($led5) ?>&led6=<?php echo($led6) ?>&led7=<?php echo($led7) ?>&led8=1">Right</a></div>
	<div class = "off"><a href="hbridge.php?led3=<?php echo($led3) ?>&led4=<?php echo($led4) ?>&led5=<?php echo($led5) ?>&led6=<?php echo($led6) ?>&led7=1&led8=1">Forward</a></div>
	<div class = "off"><a href="hbridge.php?led3=0&led4=0&led5=0&led6=0&led7=0&led8=0">Off</a></div>
	</p>
	<div class = "numbers" id = "btn"><a href="javascript:testFunc()">Current altitude?</a></div>
	<div class = "numbers" id="data">....
	</div>
	</body>
</html>
