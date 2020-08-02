<?php
        const DB_SERVER = 'http://localhost:8080';
	const DB_USER = 'root';
	const DB_PASSWORD = '';
	const DB_DATABASE = 'isad251';

	function getConnection()
		{
		
		try
		{
			$dbConnection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

		}  catch (PDOException $err)
		{
			echo 'Connection failed: ', $err->getMessage();
		}
		return $dbConnection;
		}
	?>

