<?php
// URI:       design:call.tpl
// Filename:  extension/qstest/design/qstest/templates/call.tpl
// Timestamp: 1333624590 (Thu Apr 5 19:16:30 CST 2012)
$oldSetArray_18d8b6b150c2b0c52aacc67ed9ec009f = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/ezwebin_site/cache/template/compiled/common.php' );

$text .= '
<!-- START: including template: extension/qstest/design/qstest/templates/call.tpl (design:call.tpl) -->
<p class="small">extension/qstest/design/qstest/templates/call.tpl</p><br/>

<form action="/index.php/chi/qstest/call" method="get">
Name :<br />
<input name="name" type="text" size="50" maxlength="50"><br />
<input type="submit" name="DataCreation" value="Create new data">
<input type="reset" value="Cancel">
</form>
<hr>
Status: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'status_message', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['status_message'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '

<!-- STOP: including template: extension/qstest/design/qstest/templates/call.tpl (design:call.tpl) -->
';

$setArray = $oldSetArray_18d8b6b150c2b0c52aacc67ed9ec009f;
$tpl->Level--;
?>
