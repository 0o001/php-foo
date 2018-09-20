<?php
require_once 'access.php';
require_once 'php/access.php'; //If couldn't include (sometimes needed)

//session_start();
date_default_timezone_set('Europe/Istanbul');

function Redirect($location = '/')
{
	if(!headers_sent())
		header('Location: '.$location);
	else
	{
		echo "
			<script> window.location.href=\"{$location}\"</script>
			<noscript>
			<meta http-equiv=\"refresh\" content=\"0; url={$location}\">
			</noscript>
			";
	}	
}

function Filter($variable = null)
{
	$variable = preg_replace('/[\x00-\x1F\x7F]/u', '', $variable);
	$variable = trim(strip_tags($variable));

	return $variable;
}

function EmptyArgs()
{
	foreach(func_get_args() as $arg)
		if(empty($arg))
			continue;
		else
			return false;
	return true;
}

$BASE_URL = 'http://localhost/php-foo';
?>