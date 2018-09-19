<?php
define('myPassword', true);
require_once 'php/pages/request/index.php';
?>

<!DOCTYPE html>
<html>
<head>
	<?php
		$title = 'My Title';
		$keywords = 'My Keywords';
		$description = 'My Description';
	?>
    <?php include_once 'php/pages/default/head.php'; ?>
</head>
<body>
    <?php include_once 'php/pages/default/header.php'; ?>

    My Body

    <?php
    	/*
    	//Example
    	if(isset($returnVariable))
    		echo $returnVariable;

    	//Example
    	include_once 'php/pages/html/example.php';
    	*/
    ?>
    
    <?php include_once 'php/pages/default/footer.php'; ?>
</body>
</html>