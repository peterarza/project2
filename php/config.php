<?php

$servername = getenv('127.0.0.1');
$username = 'peterarza';
$password = 'password';
$dbname = 'mycookbook';
$database = 'mycookbook';
$dbport = 8888;


// Checks for connection to database mycookbook

$link = new mysqli($servername, $username, $password, $database, $dbport);

	if ($link -> connect_error)	{
		die('Cannot Connect To Server: ' . $link -> connect_error);
		}
		echo 'Successfully Connected: ' . $link -> host_info;

// Selects database and creates table LunchMenu

mysqli_select_db($link, $dbname);

	if (empty($result))	{
		$sql = "CREATE TABLE LunchMenu 	(
			id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			notetitle VARCHAR(50) NOT NULL,
			notebody VARCHAR(200) NOT NULL)";

	if ($link -> query($sql) === TRUE) 	{
		echo '<br> Table Created Successfully. ';
	
	}else {
	
		echo '<br> Table Creation Failed. ' . $link -> error;
	};
}


?>