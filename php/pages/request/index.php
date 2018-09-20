<?php
require_once 'php/init.php';
?>

<?php

/*
GET:
fooVariable
*/

if($_GET && isset($_GET['fooVariable']))
{
    $_GET = array_map('Filter', $_GET);
    
    //My Codes

    //Example
    $returnVariable = 'hi';
}

?>