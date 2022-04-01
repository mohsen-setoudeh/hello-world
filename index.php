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
		<p>This line is here to show how merging works.</p>
		<p>This line added in github online editor.</p>
			<p>This line added for test PULL command ;-).</p>
		<div>
			<img src="lamp.png" alt="PHP logo">

		</div>
		

		<p><em>This is small php script</em></p>


		</body>

	</html>



ENDHTML;
echo $html_page;



?>
