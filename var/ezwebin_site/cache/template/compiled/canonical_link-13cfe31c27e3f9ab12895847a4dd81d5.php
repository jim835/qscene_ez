<?php
// URI:       extension/ezwebin/design/ezwebin/templates/canonical_link.tpl
// Filename:  extension/ezwebin/design/ezwebin/templates/canonical_link.tpl
// Timestamp: 1333174325 (Sat Mar 31 14:12:05 CST 2012)
$oldSetArray_e18df1ad32fdeec619833b37fbe4aaae = isset( $setArray ) ? $setArray : array();
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

unset( $elseif_cond_5bab29054a21c33ef681c0073adb318a_17 );
unset( $elseif_cond_5bab29054a21c33ef681c0073adb318a_17 );
$elseif_cond_5bab29054a21c33ef681c0073adb318a_17 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$elseif_cond_5bab29054a21c33ef681c0073adb318a_171 = compiledFetchAttribute( $elseif_cond_5bab29054a21c33ef681c0073adb318a_17, 'canonical_language_url' );
unset( $elseif_cond_5bab29054a21c33ef681c0073adb318a_17 );
$elseif_cond_5bab29054a21c33ef681c0073adb318a_17 = $elseif_cond_5bab29054a21c33ef681c0073adb318a_171;
if (! isset( $elseif_cond_5bab29054a21c33ef681c0073adb318a_17 ) ) $elseif_cond_5bab29054a21c33ef681c0073adb318a_17 = NULL;
while ( is_object( $elseif_cond_5bab29054a21c33ef681c0073adb318a_17 ) and method_exists( $elseif_cond_5bab29054a21c33ef681c0073adb318a_17, 'templateValue' ) )
    $elseif_cond_5bab29054a21c33ef681c0073adb318a_17 = $elseif_cond_5bab29054a21c33ef681c0073adb318a_17->templateValue();

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
elseif ( $elseif_cond_5bab29054a21c33ef681c0073adb318a_17 )
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

unset( $elseif_cond_5bab29054a21c33ef681c0073adb318a_17 );


$setArray = $oldSetArray_e18df1ad32fdeec619833b37fbe4aaae;
$tpl->Level--;
?>
