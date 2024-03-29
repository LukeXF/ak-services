<?php

	$brand = "AK Services"; // The name displayed across the site
	$email = "me@luke.sx"; // The address used through Mandrill to send emails
	$mandrillTemplateName = "Test"; // the template styling name for the emails
	$mandrillAPIKey = "f3aumBm_dMe6Inv3vTWD7w"; // the API key for Mandrill servers
	date_default_timezone_set('GMT'); // timezone setting for the site
	$logo = "logo.png"; // the image located inside your domain/assets/img/ file


	// detect if on local testing 
	$localhost = array('127.0.0.1', '::1', 'localhost');	

	// if on local or production environment
	if(!in_array($_SERVER['REMOTE_ADDR'], $localhost)){

    	$dotPHP = ""; // display .php extensions
		$domain = "http://ak-services.co.uk/"; // the actual domain this site runs off

		$config = array(

			'db_host' 		=> '', 		// database host, usually localhost
			'db_username' 	=> '', 		// database username
			'db_password' 	=> '',		// datebase password
			'db_name' 		=> '', 		// database name
		);


	} else {

		$dotPHP = ".php"; // display .php extensions
		$domain = "http://localhost/jetpack/"; // the actual domain this site runs off

		$config = array(

			'db_host' 		=> 'localhost', // database host, usually localhost
			'db_username' 	=> '', 			// database username
			'db_password'	=> '', 			// datebase password
			'db_name' 		=> '', 			// database name
		);

	}

	
	// legacy config for where the arrays cannot inputted.
	define("DB_HOST", $config['db_host']);
	define("DB_NAME", $config['db_username']);
	define("DB_USER", $config['db_name']);
	define("DB_PASS", $config['db_password']);


	// cookie runtime and code to remember users
	define("COOKIE_RUNTIME", 1209600);
	define("COOKIE_DOMAIN", $domain);
	define("COOKIE_SECRET_KEY", "1gp@TMPS{+$78sfpMJFe-92s");

	// the crypt amount for password hashing of new accounts
	define("HASH_COST_FACTOR", "10");
?>