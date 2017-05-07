<?php
	include('conection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
<?php
	if(!isset($_POST['submit'])) {
		$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
	}
	else {
		echo "error";
	}
	

	$query = "INSERT INTO test ('firstname', 'lastname') VALUES ('$firstname', '$lastname')";
?>

	<form action="test.php" method="POST">
		<input type="text" name="firstname">
		<input type="text" name="lastname">
		<input type="submit" name="submit">
	</form>



</body>
</html>