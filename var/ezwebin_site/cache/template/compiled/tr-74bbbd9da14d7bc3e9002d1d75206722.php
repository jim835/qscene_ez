<?php
// URI:       design:content/datatype/view/ezxmltags/tr.tpl
// Filename:  extension/ezwebin/design/ezwebin/templates/content/datatype/view/ezxmltags/tr.tpl
// Timestamp: 1333174325 (Sat Mar 31 14:12:05 CST 2012)
$oldSetArray_7823e2f85096306efb765b7346d639e8 = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/ezwebin/design/ezwebin/templates/content/datatype/view/ezxmltags/tr.tpl (design:content/datatype/view/ezxmltags/tr.tpl) -->
<p class="small">extension/ezwebin/design/ezwebin/templates/content/datatype/view/ezxmltags/tr.tpl</p><br/>
<tr';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'row_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['row_count'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' class="';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'row_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['row_count'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = $if_cond1 % 2;
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'bglight';
}
else
{
$text .= 'bgdark';
}
unset( $if_cond );
// if ends

$text .= '"';
}
unset( $if_cond );
// if ends

$text .= '>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</tr>
<!-- STOP: including template: extension/ezwebin/design/ezwebin/templates/content/datatype/view/ezxmltags/tr.tpl (design:content/datatype/view/ezxmltags/tr.tpl) -->
';

$setArray = $oldSetArray_7823e2f85096306efb765b7346d639e8;
$tpl->Level--;
?>
