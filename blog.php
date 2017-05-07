<?php 
	include("conection.php");
	$query = "SELECT * FROM posts";
	$records = mysqli_query($conn, $query);	
?>

<!DOCTYPE html>
<html>
<head>
	<title>CMS</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<nav>		
			<?php 
				while($row = mysqli_fetch_assoc($records)) : ?>
					<?php
						$id = $row['postid'];
						$title = $row['title'];
						$content = $row['content'];
						$date = $row['date'];
						$author = $row['author'];
					?>
						<h3><?php echo "$title"?></h3>
						<p><?php echo "$content";?></p>
						<span><?php echo "$date";?></span> | <span><?php echo "$author";?></span>

			<?php endwhile; ?>	
		</nav>
	</div>
</body>
</html>