<?php
	require('scripts/rb.php');

 	$db = require('scripts/config_db.php');
	
	R::setup( $db['dsn'], $db['user'], $db['pass']);
	
	 if (! R::testConnection())
	{
		exit("Error to connection");
	}
	
	// R::fancyDebug( TRUE );