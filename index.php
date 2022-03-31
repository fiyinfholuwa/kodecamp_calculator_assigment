<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Simple Calculator</title>
</head>
<body>

	
	 
<form action="" method="GET">
	<input type="text" name="num1" placeholder="input 1"><br>
	<input type="text" name="num2" placeholder="Input 2"><br>
	<select name="operator"><br>
		<option value="None"  >None</option>
		<option value="Add">Add</option>
		<option value="Substract">Substract</option>
		<option value="Multiply">Multiply</option>
		<option value="Divide">Divide</option>
	</select>
<input type="submit" name="submit" value="Calculate">
</form>

<h3>The answer is: </h3>
</body>

<?php 
	if (isset($_GET['submit'])) {
		$result1 = $_GET['num1'];
		$result2 = $_GET['num2'];
		$operator = $_GET['operator'];
		switch ($operator) {
			case 'None':
				echo "You need to select a method";
				break;
			case 'Add':
				echo $result1 + $result2;
				break;
			case 'Substract':
				echo $result1 - $result2;
				break;
			case 'Multiply':
				echo $result1 * $result2;
				break;
			case 'Divide':
				echo $result1 / $result2;
				break;
		}
	}

	?>
</html>