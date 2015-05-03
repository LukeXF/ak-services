<?php
	if (version_compare(PHP_VERSION, '5.3.7', '<')) {
	    exit('Sorry, this script does not run on a PHP version smaller than 5.3.7 !');
	} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
	    require_once('lib/password_compatibility_library.php');
	}

	$user_email = "";
	$default  = "";
	$size = "";
	$user_name = "";

	require_once('lib/config.php');
	require_once('translations/en.php');
	require_once('classes/Login.php');
	require_once('classes/SiteFunctions.php');
	$login = new Login();
	$Functions = new SiteFunctions();



	if ($login->isUserLoggedIn() == true) {
		$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $_SESSION['user_email'] ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size; 
		$navlogin = "Welcome <b>" . $_SESSION['user_name'] . "</b>";
	}

	date_default_timezone_set('UTC');

	$navbar = array(
		/*"Contact" =>   array(
			"active" => "",
			"url" => "#",
			"submenu" => array()
		),

		"Purchase $brand" => array(
			"active" => "",
			"url" => "#",          
			"submenu" => array()
		)*/

	);
	$navbar2 = array(
		"Home" =>   array(
			"active" => "",
			"url" => $domain,
			"submenu" => array()
		),

		"Our Services" => array(
			"active" => "",
			"url" => $domain . "services" . $dotPHP,          
			"submenu" => array()
		),

		"Common Questions" => array(
			"active" => "",
			"url" => $domain . "faq" . $dotPHP,          
			"submenu" => array()
		),

		"Testimonals" => array(
			"active" => "",
			"url" => $domain . "reviews" . $dotPHP,          
			"submenu" => array()
		),

		"Contact Us" => array(
			"active" => "",
			"url" => $domain . "contact-us" . $dotPHP,          
			"submenu" => array()
		)
	);
?>

<html>
	<head>
	    <meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Offering septic tank services in Suffolk, call upon the professionals here at AK Services with over 15 years of experience.">
		<meta name="author" content="Andrew Knock, andrew@ak-services.co.uk">
  		<meta name="keywords" content="suffolk, essex, cesspit, cesspool, drain, drain cleaning, drain emptying, repairs, sewarge treatment plants, watter jetting, tanker hire, pump repairs">

	    <title><?php echo $brand; ?> - Suffok &amp; Essex Septic Tank, Cesspool Emptying &amp; Drain Cleaning</title>

		<link rel="stylesheet" type="text/css"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<link href='http://fonts.googleapis.com/css?family=Lato:700,400,300|Raleway:400,300' rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo $domain; ?>assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $domain; ?>assets/flaticon/flaticon.css"> 
		<link rel="icon" type="image/png" href="<?php echo $domain; ?>assets/img/favicon.png">


		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="@AKServices_Ltd">
		<meta name="twitter:creator" content="@elementsworks">
		<meta name="twitter:title" content="AK Services (Suffolk) Ltd">
		<meta name="twitter:description" content="Offering septic tank services in Suffolk, call upon the professionals here at AK Services with over 15 years of experience.">
		<meta name="twitter:image" content="http://ak-services.co.uk/assets/img/logo.png">

		<meta property="og:description" content="Offering septic tank services in Suffolk, call upon the professionals here at AK Services with over 15 years of experience."/>
		<meta property="og:url" content="<?php echo $domain; ?>"/>
		<meta property="og:image" content="http://ak-services.co.uk/assets/img/logo.png"/>
		<meta property="og:type" content="website"/>
		<meta property="og:site_name" content="AK Services (Suffolk) Ltd"/>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
		<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	</head>

<?php // FACEBOOK STATS

	// Loads the FaceBook SDK system for PHP
	require '/var/www/html/luke/demo.luke.sx/akservices/assets/external/facebook.php';

	// Create our Application instance that allows connecting to FaceBook.
	$facebook = new Facebook(array(
		'appId' => '766850110025533',
		'secret' => 'a749e5886359fb172cf45402ba4c8514',
	));

	// This call will always work since we are fetching public data.
	$user_profile = $facebook->api('/AKServicesLtd');

	// sets up the variables for my simple array which is just a sliced version of the main FaceBook array.
	$fb = array(
		"likes"		=>	$user_profile["likes"],
		"talking"	=>	$user_profile["talking_about_count"],
		"image"		=>	$user_profile["cover"]["source"],
		"link"		=>	$user_profile["link"]
	);



?>

<?php // TWITTER STATS

	// Loads the Twitter SDK system for PHP
	require_once('assets/external/TwitterAPIExchange.php');

	// Create our Application instance that allows connecting to Twitter.
	$settings = array(
		'oauth_access_token' => "545371167-irULMOms3sQrOaNwsL73EWeXDHLfy6PmYWrE2FMU",
		'oauth_access_token_secret' => "Zv9cS7OsiGXXuARfG92lj6UvO5yQwBjH16e987zEmtpjU",
		'consumer_key' => "7eJxfBBdxGoYf1BcPetNi9whC",
		'consumer_secret' => "pXTgOEQO804GWeZxPmXMqFmKTgrSc3KVs8GEH6M9tpHEL9wMpb"
	);

	// This call will always work since we are fetching public data.
	$url = 'https://api.twitter.com/1.1/users/show.json';
	$getfield = '?screen_name=AKServices_Ltd';
	$requestMethod = 'GET';

	// Generate responce through the exchange
	$twitter = new TwitterAPIExchange($settings);

	// Build in Oauth and request data
	$response = $twitter
		->setGetfield($getfield)
		->buildOauth($url, $requestMethod)
		->performRequest();

	// Decode json file into array
	$user = json_decode($response);

	// sets up the variables for my simple array which is just a sliced version of the main FaceBook array.
		$tw=array(
			"followers"		=>	$user->followers_count,
			"following"		=>	$user->friends_count,
			"favourites"	=>	$user->favourites_count,
			"tweets"		=>	$user->statuses_count,
			"retweets"		=>	$user->status->retweet_count
		);

	// uncomment to check if the facebook array works
	// print_r($user);
?>

<script type="text/javascript">
		$(window).scroll(function() {
    var scrolled = $(window).scrollTop();
	var downloadLink = $("#myScrollspy");
    if (scrolled > 100) {
		downloadLink.css("background-color", "#222");
	} else if (scrolled < 100) {
		downloadLink.css("background-color", "#fff");
	}
});
</script>