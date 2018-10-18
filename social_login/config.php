<?php
/**
@author muni
@copyright http:www.smarttutorials.net
 */

require_once 'messages.php';

//site specific configuration declartion
define( 'BASE_PATH', 'http://localhost/user_login/index.php');
define( 'DB_HOST', 'localhost' );
define( 'DB_USERNAME', 'root');
define( 'DB_PASSWORD', '');
define( 'DB_NAME', 'user_login');


//Facebook App Details
define('FB_APP_ID', 'YOUR_APP_ID');
define('FB_APP_SECRET', 'YOUR_APP_SECRET');
define('FB_REDIRECT_URI', 'YOUR_REDIRECT_URI');




//Google App Details
define('GOOGLE_APP_NAME', 'CultivatingHappyness Google+ login');
define('GOOGLE_OAUTH_CLIENT_ID', 'YOUR_CLIENT_ID');
define('GOOGLE_OAUTH_CLIENT_SECRET', 'YOUR_CLIENT_SECRET');
define('GOOGLE_OAUTH_REDIRECT_URI', 'YOUR_REDIRECT_URI');
define("GOOGLE_SITE_NAME", 'YOUR_SITE_URL'); 


//Twitter login
define('TWITTER_CONSUMER_KEY', 'YOUR_CONSUMER_KEY');
define('TWITTER_CONSUMER_SECRET', 'YOUR_CONSUMER_SECRET');
define('TWITTER_OAUTH_CALLBACK', 'YOUR_OAUTH_CALLBACK');



function __autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}
