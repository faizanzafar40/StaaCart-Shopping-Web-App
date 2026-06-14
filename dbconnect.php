<?php
	// Shared database connection. Every page pulls in this file so they all
	// talk to the same MySQL database through a single mysqli handle ($conn).
	//
	// Credentials default to a local development setup (XAMPP-style: root with
	// no password), but I let environment variables override them so I never
	// have to hard-code real secrets when deploying. See config.sample.php.
	error_reporting( ~E_DEPRECATED & ~E_NOTICE );

	define('DBHOST', getenv('DB_HOST') ?: 'localhost');
	define('DBUSER', getenv('DB_USER') ?: 'root');
	define('DBPASS', getenv('DB_PASS') ?: '');
	define('DBNAME', getenv('DB_NAME') ?: 'webstaacart1');

	$conn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

	if ( !$conn ) {
		die("Database connection failed : " . mysqli_connect_error());
	}
?>
