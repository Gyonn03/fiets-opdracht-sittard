<?php include 'counter.php';?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Fiets-teller</title>
        <link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		<div class="login">
			<h1>Aantal fietsen</h1>
			<form method="POST" action="counter.php" class="form">
				<input  type="submit" value="+ Aantal fietsen" name="count" />
				<br>
				<br>
				<input type="submit" value="- Aantal fietsen" name="count2" />
			   </form>
			   <h2>Aantal fietsen op dit moment:</h2>
		</div>
	</body>
</html>