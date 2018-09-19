<?php
require_once 'php/init.php';

if(isset($title))
	$title = $title . ' - Website Name';
else
	$title = 'Default Title';

if(!isset($keywords))
	$keywords = 'Default Keywords';

if(!isset($description))
	$description = 'Default Description';
?>

<title><?= $title; ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?= $description ?>" />
<meta name="keywords" content="<?= $keywords ?>" />
<meta name="copyright" content="author" />
<meta name="title" content="<?= $title ?>" />
<meta name="author" content="author, info@author.com" />
<meta name="robots" content="index, follow">
<meta name="robots" content="noodp, noydir" />
<meta name="canonical" content="" />

<meta property="og:title" content="<?= $title ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $BASE_URL ?>">
<meta property="og:image" content="<?= $BASE_URL ?>/favicon.png">
<meta property="og:site_name" content="Website Name">
<meta property="og:description" content="<?= $description ?>">
<meta property="og:locale" content="tr_TR">

<meta name="twitter:card" content="summary">
<meta name="twitter:description" content="<?= $description ?>">
<meta name="twitter:title" content="<?= $title ?>">
<meta name="twitter:site" content="<?= $BASE_URL ?>">
<meta name="twitter:image" content="<?= $BASE_URL ?>/favicon.png">

<link rel="icon" type="image/png" href="<?= $BASE_URL ?>/favicon.png" />

<!--
<link rel="stylesheet" href="<?= $BASE_URL ?>/css/lib/bootstrap.min.css">
<script src="<?= $BASE_URL ?>/js/lib/jquery.min.js"></script>
<script src="<?= $BASE_URL ?>/js/lib/bootstrap.min.js"></script>
-->

<link rel="stylesheet" type="text/css" href="<?= $BASE_URL ?>/css/default.css">