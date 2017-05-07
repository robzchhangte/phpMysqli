<?php 
	include("conection.php");
	$query = "select * from categories";
	$records = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>CMS</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<nav>
		<ul>
			<?php 
				while($row = mysqli_fetch_assoc($records)) {
					$id = $row['id'];
					$title = $row['title'];

					echo "<li>". $title . "</li>";
				}

			?>
			
		</ul>
	</nav>
</body>
</html>