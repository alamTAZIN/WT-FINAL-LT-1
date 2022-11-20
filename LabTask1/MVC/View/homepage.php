<?php
session_start();
include "header.php";
//include "../Model/convTable.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>
	<h2>Converter:</h2>
	<form action="../Controller/homepagecontroller.php" method="post" novalidate>
		<label for="category">Select Category:</label>
		<select name="category" id="category" placeholder="select a value" required>
        <option value="Select a value">Select a value</option>
    </select>
        <br><br>
        <label for="value">Value:</label>
        <input type="text" name="value" placeholder="">
        <input type="submit">
        <br><br>
    
        <label for="result">Result:</label>
		<input type="text" name="value" placeholder="">
	</form>

</body>
</html>