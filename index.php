<?php
$html_page=<<< ENDHTML
	<html>	
		<head>
		<title>This is Test Page</title>
		<link rel="stylesheet" href="bluestyle.css">


		</head>

		<body>
		<h1>BINGO Start PHP Learning is do</h1>
		<div>
			<img src="lamp.png" alt="PHP logo">

		</div>
		<form action="info.php" method="POST">
		<input type="submit" name="submit" value="info"/>
		</form>

		<p>This is the first file in my new Git Repo</p>
		<h3>Test of pull request</h3>

		<p><em>This is small php script</em></p>


		</body>

	</html>



ENDHTML;
echo $html_page;



?>
