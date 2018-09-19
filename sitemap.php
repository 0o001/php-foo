<?php
define('myPassword', true);
//include_once 'php/sitemap.php'; //For Dynamics
header('Content-Type: text/xml');

<<< XML
<?xml version=\"1.0\" encoding=\"UTF-8\"?>
	<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">
	  	<url>
	  		<loc>{$BASE_URL}</loc>
	  		<changefreq>always</changefreq>
	  	</url>
XML;

	//Dynamics

<<< XML 
</urlset>
XML;
?>