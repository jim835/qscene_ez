<?php
// URI:       design:content/datatype/view/ezxmltags/quote.tpl
// Filename:  extension/ezwebin/design/ezwebin/override/templates/datatype/ezxmltext/quote.tpl
// Timestamp: 1333174325 (Sat Mar 31 14:12:05 CST 2012)
$oldSetArray_5a969ae6ee18d60e661173f8e68aabc7 = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/ezwebin/design/ezwebin/override/templates/datatype/ezxmltext/quote.tpl (design:content/datatype/view/ezxmltags/quote.tpl) -->
<p class="small">extension/ezwebin/design/ezwebin/override/templates/datatype/ezxmltext/quote.tpl</p><br/>
<div class="object-';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'align', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['align'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'align', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['align'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

}
else
{
$text .= 'left';
}
unset( $if_cond );
// if ends

$text .= '">
    <div class="quote">
      <div class="quote-design">
      <div class="quote-begin"><span class="hide">"</span></div>
      ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
      ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'author', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['author'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<p class="author">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'author', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['author'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</p>';
}
unset( $if_cond );
// if ends

$text .= '      <div class="quote-end"><span class="hide">"</span></div>
      </div>
   </div>
</div>
<!-- STOP: including template: extension/ezwebin/design/ezwebin/override/templates/datatype/ezxmltext/quote.tpl (design:content/datatype/view/ezxmltags/quote.tpl) -->
';

$setArray = $oldSetArray_5a969ae6ee18d60e661173f8e68aabc7;
$tpl->Level--;
?>
