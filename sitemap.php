<?php
define('myPassword', true);
//include_once 'php/sitemap.php'; //For Dynamics
//Actually "php/sitemap.php" has $BASE_URL variable (because init.php) but now it's undefined. Then let's define for this sample
require_once 'php/init.php';

header('Content-Type: text/xml');

echo <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<url>
	  	<loc>{$BASE_URL}</loc>
	  	<changefreq>always</changefreq>
	</url>
XML;

	//Dynamics

echo <<<XML
</urlset>
XML;
?>