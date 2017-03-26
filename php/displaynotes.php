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

	echo '<h1>Previous Notes</h1>';
?>


<?php

	$sql = "SELECT id, notetitle, notebody FROM LunchMenu";
	$notelist = $link -> query($sql);

	if ($notelist -> num_rows > 0) 	{

		while ($row = $notelist -> fetch_assoc()) 	{
			echo 'Entry: ' . $row['id'] . '<br>Title: ' . $row['notetitle'] . ' ' . $row['notebody'] . '<br><br>';
		}
	}else {
		echo 'There are no notes available. ';
	}

	$link -> close();

	echo '<br><a href="http://localhost:8888/project2/index.php">Home</a>';
?>

<script src="js/main.js"></script>
<script src="js/jquery-3.1.1.slim.js"></script>
</body>
</html>
