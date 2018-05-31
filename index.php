<?php
	if(isset($_GET["led"])) {
		$led = $_GET["led"];
		system("gpio mode 0 out");
		system("gpio write 0 ".$led);
}
	if(isset($_GET["led2"])){
		$led2 = $_GET["led2"];
		system("gpio mode 1 out");
		system("gpio write 1 ".$led2);
	}

?>

<html>
	<head>
		<title>My LED Page</title>
	</head>
	<style>
	.gray {
		-webkit-filter: grayscale(100%);
		filter: grayscale(100%);
	}
	</style>
	<body>
		<!-- this is an html comment -->
		<!-- this web page has links to itself, sending itself GET variables -->
	<p>

	<a href="index.php?led=<?php if($led == 0) echo("1"); else echo("0"); ?>&led2=<?php echo($led2); ?>"><img src="Paris.jpg" <?php if($led == 0) echo("class='gray'"); ?> style="width:560px;height:400px;"></a> 
	<p>
	<p>
	<a href="index.php?led=<?php echo($led); ?>&led2=<?php if($led2 == 0) echo($led2 = 1); else echo($led2 = 0); ?>"><img src = "NYC.jpg" <?php if($led2 == 1) echo("class='gray'"); ?> style="width:560px;height:400px;"></a>

	</body>
</html>
