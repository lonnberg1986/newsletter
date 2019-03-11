<?php
require('connection.php');
if($_POST['email'] && $_SERVER['REQUEST_METHOD'] == 'POST') {
	$q = "INSERT INTO newsletter (id) VALUES (NULL)";
	$r = @mysqli_query($dbc, $q);
}

$q = "SELECT Count(*) FROM newsletter";
$r = @mysqli_query($dbc, $q);
$row = mysqli_fetch_array($r);
$count = $row[0];
mysqli_close($dbc);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="./resources/newsletter_styles.css">
	<title>Join Us!</title>
</head>
<body>
	<div class="flex-container">
		<div class="container">
			<h1>JOIN US!</h1>
			<p>Enter your email to join <span id="count"><?php echo("$count "); ?></span>other on our waitlist.<span class="hidden"> We would like to welcome you to join us.</span></p>
			<form action="sign_for_newsletter.php" method="POST">
				<input type="email" name="email" placeholder="Enter Your Email" required="required">
				<input type="submit" name="submit" value="Join Now">
			</form>
		</div>
	</div>

</body>
</html>