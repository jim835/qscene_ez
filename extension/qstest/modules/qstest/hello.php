<?php

/* 
 * Brief: QS test hello
 * A hello world view for benchmarking
 */


$withPageLayout = $Params['with_pagelayout'];

if ( $withPageLayout )
{
    $Result = array();
    $Result['content'] = 'Hello, this is my module!';
}
else
{
    echo 'Hello, this is my module!';
    eZExecution::cleanExit();
}
