<?php
	include_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>My Notebook App</title>
</head>

<body>

<?php

	$note_title = mysqli_real_escape_string($link, $_POST['notetitle']);
	$note_body = mysqli_real_escape_string($link, $_POST['notebody']);

	$note_insert = "INSERT INTO LunchMenu (notetitle, notebody) VALUES ('$note_title', '$note_body')";

	if (mysqli_query($link, $note_insert)) 	{
		echo '<br><b>Note Added.</b> ';
		echo '<br><br><a href="http://localhost:8888/project2/index.php">Home</a>';

	}else {
		echo '<br>Note Cannot Be Added: ' . mysqli_error($link);
	}

?>

<script src="js/main.js"></script>

<script src="js/jquery-3.1.1.slim.js"></script>

</body>
</html>
