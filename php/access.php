<?php
if (!defined('myPassword'))
{
	if(!headers_sent())
		header('Location: ./');
	else
	{
		echo '
			<script> window.location.href="./"</script>
			<noscript>
			<meta http-equiv="refresh" content="0; url=./">
			</noscript>
			';
	}
	
	die('Giriş izni yok.');
}
?>