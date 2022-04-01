<?php
$html_page=<<< ENDHTML
	<html>	
		<head>
		<title>This is Test Page</title>
		<link rel="stylesheet" href="bluestyle.css">


		</head>

		<body>
		<h1>BINGO Start PHP Learning is do</h1>

		<form action="info.php" method="POST">
		<input type="submit" name="submit" value="info"/>
		</form>
		<p>This is the first file in my new Git Repo</p>
		<p>This line is here to show how merging works.</p>
		<p><em>This is small php script</em></p>


		</body>

	</html>



ENDHTML;
echo $html_page;



?>
