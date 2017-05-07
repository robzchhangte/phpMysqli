
<?php

	include('conection.php');
	// Insert new post here

	if(isset($_POST['submit'])) {
		$postTitle = mysqli_real_escape_string($conn, $_POST['title']);
		$postContent = mysqli_real_escape_string($conn, $_POST['content']);
		
		// set time-zone
		date_default_timezone_set('America/New_York');
		$postDate = date(now());
		
		$postAuthor = mysqli_real_escape_string($conn, $_POST['author']);
		
		//insert new post
		

		if (!isset($postTitle) || $postTitle == '' || !isset($postContent) || $postContent == '') {
			echo "Please fill all the fields";
		}

		else {
			$query = " INSERT INTO posts (title, content, date, author) VALUES ($postTitle, $postContent, $postDate, $postAuthor) ";

			if (mysqli_query($conn, $query)) {
				header('Location:blog.php');
			}
		}

	}

?>