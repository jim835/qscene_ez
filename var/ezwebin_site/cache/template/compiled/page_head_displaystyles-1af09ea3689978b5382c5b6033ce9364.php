<?php
// URI:       design/standard/templates/page_head_displaystyles.tpl
// Filename:  design/standard/templates/page_head_displaystyles.tpl
// Timestamp: 1331119511 (Wed Mar 7 19:25:11 CST 2012)
$oldSetArray_2845ae158f66cb969c36beac28517e84 = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: design/standard/templates/page_head_displaystyles.tpl (design/standard/templates/page_head_displaystyles.tpl) -->
<p class="small">design/standard/templates/page_head_displaystyles.tpl</p><br/>

<style type="text/css">
.limitdisplay-user { display: none; }.limitdisplay-user-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var1 = compiledFetchAttribute( $var, 'contentobject_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' { display: inline; }.limitdisplay-user-block-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var1 = compiledFetchAttribute( $var, 'contentobject_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' { display: block; }</style>
<!-- STOP: including template: design/standard/templates/page_head_displaystyles.tpl (design/standard/templates/page_head_displaystyles.tpl) -->
';

$setArray = $oldSetArray_2845ae158f66cb969c36beac28517e84;
$tpl->Level--;
?>
