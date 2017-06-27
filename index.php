<?php

$requestedPage = null;
if (isset($_GET['requestedPage'])) {
	$requestedPage = $_GET['requestedPage'];
} else {
	$requestedPage = explode('/',$_SERVER['REQUEST_URI'])[1];
}


switch($requestedPage) {
	case "availability":
		header( 'Location: https://kurtz.doodle.com/jkurtz') ;
		die();
	case "facebook":
		header( 'Location: https://www.facebook.com/jkrrv') ;
		die();
	case "twitter":
		header( 'Location: https://twitter.com/jkrrv/') ;
		die();
	case "github":
		header( 'Location: https://github.com/jkrrv') ;
		die();
	case "linkedin":
		header( 'Location: https://www.linkedin.com/in/jameskkurtz') ;
		die();
	case "resume":
		header( 'Location: resume.pdf') ;
		die();
}

require_once "body.php";

