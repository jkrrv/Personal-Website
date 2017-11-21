<?php

// HTTPS & HSTS
if ((!isset($_SERVER['HTTPS']) || !$_SERVER['HTTPS']) && strpos($_SERVER["SERVER_NAME"], "sexy")===false) {
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: https://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"]);
	exit();
}
header("Strict-Transport-Security: max-age=31536000; preload");


$requestedPage = null;
if (isset($_GET['requestedPage'])) {
	$requestedPage = $_GET['requestedPage'];
} else {
	$requestedPage = explode('/',$_SERVER['REQUEST_URI'])[1];
}

$mode = false;

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
	case "work":
		$mode = 'work';
		break;

	case "":
		break;

	default:
		$mode = 404;
}

if ($mode === 404) {
	header("HTTP/1.1 404 Not Found");
}

require_once "body.php";

