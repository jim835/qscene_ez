<?php
// qstest/call.php – Function file of View create
//$Module = $Params['qstest'];
 
// take copy of global object
$http = eZHTTPTool::instance ();
$value = '';
 
// If the variable 'name' is sent by GET or POST, show variable
if( $http->hasVariable('name') )
    $value = $http->variable ('name');
 
if( $value != '' )
    $statusMessage = 'Name: '. $value;
else
    $statusMessage = 'Please insert data';
 
// initialize Templateobject
$tpl = eZTemplate::factory(); // From eZPublish 4.3. For previous versions, use templateInit() function instead
$tpl->setVariable( 'status_message', $statusMessage );
 
// Write variable $statusMessage in the file eZ Debug Output / Log
// here the 4 different types: Notice, Debug, Warning, Error
eZDebug::writeNotice( $statusMessage, 'qstest:qstest/hello.php' );
eZDebug::writeDebug( $statusMessage, 'qstest:qstest/hello.php' );
eZDebug::writeWarning( $statusMessage, 'qstest:qstest/hello.php' );
eZDebug::writeError( $statusMessage, 'qstest:qstest/hello.php' );
 
// $statusMessage write own Log file to ezroot/var/log/jacextension_modul1.log
eZLog::write ( $statusMessage, 'qstest_qstest.log' );
 
$Result = array();
// search/replace template and save result for $module_result.content
$Result['content'] = $tpl->fetch( 'design:call.tpl' );
 
// generate route Modul1/create
$Result['path'] = array( 'Axel','Volker','Dirk','Jan','Felix' );