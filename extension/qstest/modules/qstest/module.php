<?php


$Module = array( 'name' => 'QS Test' );


$ViewList = array();

$ViewList['hello'] = array(
    'script' => 'hello.php',
    'params' => array( 'with_pagelayout' )
    );

$ViewList['call'] = array(
    'script' => 'call.php',
    'params' => array( 'with_pagelayout' )
    );

?>
