<!DOCTYPE html>

<html>

<head>
	<title>Forms!</title>
</head>

<body>

	<h1>POST and GET!</h1>

	<?php
	
	if(isset($_POST['name'])){
		$name= $_POST['name'];
		
		echo "<h2>Hello, $name</h2>";
	}
	
	
	if(isset($_GET['age'])){
		$age= $_GET['age'];
		
		echo "<h2>Hello, $age</h2>";
	}
	
	
	?>
	
	
	<form method="post">
		<p><input type="text" placeholder="Name?" name="name" /></p>
		<p><input type="submit" name="submit" value="submit" /></p>
	</form>
	
	
	<form method="get">
		<p><input type="text" placeholder="Age?" name="age" /></p>
		<p><input type="submit" name="submit" value="submit" /></p>
	</form>
	
	<p><a href="functions.php">Next: Functions</a></p>

</body>

</html>