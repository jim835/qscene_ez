<?php
// URI:       extension/ezwebin/design/ezwebin/templates/canonical_link.tpl
// Filename:  extension/ezwebin/design/ezwebin/templates/canonical_link.tpl
// Timestamp: 1333174325 (Sat Mar 31 14:12:05 CST 2012)
$oldSetArray_94430ccd919961d3f55e6c1487367140 = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/ezwebin/design/ezwebin/templates/canonical_link.tpl (extension/ezwebin/design/ezwebin/templates/canonical_link.tpl) -->
<p class="small">extension/ezwebin/design/ezwebin/templates/canonical_link.tpl</p><br/>
';
unset( $elseif_cond_5bab29054a21c33ef681c0073adb318a_18 );
unset( $elseif_cond_5bab29054a21c33ef681c0073adb318a_18 );
$elseif_cond_5bab29054a21c33ef681c0073adb318a_18 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$elseif_cond_5bab29054a21c33ef681c0073adb318a_181 = compiledFetchAttribute( $elseif_cond_5bab29054a21c33ef681c0073adb318a_18, 'canonical_language_url' );
unset( $elseif_cond_5bab29054a21c33ef681c0073adb318a_18 );
$elseif_cond_5bab29054a21c33ef681c0073adb318a_18 = $elseif_cond_5bab29054a21c33ef681c0073adb318a_181;
if (! isset( $elseif_cond_5bab29054a21c33ef681c0073adb318a_18 ) ) $elseif_cond_5bab29054a21c33ef681c0073adb318a_18 = NULL;
while ( is_object( $elseif_cond_5bab29054a21c33ef681c0073adb318a_18 ) and method_exists( $elseif_cond_5bab29054a21c33ef681c0073adb318a_18, 'templateValue' ) )
    $elseif_cond_5bab29054a21c33ef681c0073adb318a_18 = $elseif_cond_5bab29054a21c33ef681c0073adb318a_18->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'canonical_url' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    
    <link rel="canonical" href="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var2 = compiledFetchAttribute( $var1, 'canonical_url' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, 'full' );
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />';
}
elseif ( $elseif_cond_5bab29054a21c33ef681c0073adb318a_18 )
{
$text .= '    
    <link rel="canonical" href="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var2 = compiledFetchAttribute( $var1, 'canonical_language_url' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_5bab29054a21c33ef681c0073adb318a_18 );

$text .= '
<!-- STOP: including template: extension/ezwebin/design/ezwebin/templates/canonical_link.tpl (extension/ezwebin/design/ezwebin/templates/canonical_link.tpl) -->
';

$setArray = $oldSetArray_94430ccd919961d3f55e6c1487367140;
$tpl->Level--;
?>
