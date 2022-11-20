<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Conversion Rate</title>
</head>
<body>
	<h1>Page 2[Conversion]</h1>
	<h3>Conversion site</h3>
	    <a href="../View/homepage.php">1.Home</a>
	    <a href= "conversion-rate.php">2.Conversion Rate</a>
	    <a href="history.php">3.History</a> 
	<h2>Conversion Rate:</h2> 
	
	<form action="../Model/convTable.php" method="post" nonvalidate>

		<label for="category">Category:</label>
		<input type="text" name="category" placeholder="">
		<?php echo isset($_SESSION['category_error_msg'])? $_SESSION['category_error_msg']: ""?>
		<br><br>

		<label for="unit">Unit:</label>
		<input type="text" name="unit" placeholder="">
		<?php echo isset($_SESSION['unit_error_msg'])? $_SESSION['unit_error_msg']: ""?>
		<br><br>
		<label for="rate">Rate:</label>
		<input type="text" name="rate" placeholder="">
		<?php echo isset($_SESSION['rate_error_msg'])? $_SESSION['rate_error_msg']: ""?>
		<input type="submit">
	</form>   

</body>
</html>