<?php
// URI:       design:pagelayout.tpl
// Filename:  extension/ezwebin/design/ezwebin/templates/pagelayout.tpl
// Timestamp: 1333174325 (Sat Mar 31 14:12:05 CST 2012)
$oldSetArray_d2158539c90843044fccb140495222a5 = isset( $setArray ) ? $setArray : array();
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

$text .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$var2 = compiledFetchAttribute( $var1, 'http_equiv' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'Content-language' );
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

$text .= '" lang="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$var2 = compiledFetchAttribute( $var1, 'http_equiv' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'Content-language' );
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

$text .= '">
<head>';
// def $basket_is_empty
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var2 = compiledFetchAttribute( $var1, 'is_logged_in' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    unset( $var2 );
$var2 = call_user_func_array( array( new eZShopFunctionCollection(), 'fetchBasket' ),
  array(  ) );
$var2 = isset( $var2['result'] ) ? $var2['result'] : null;
$var3 = compiledFetchAttribute( $var2, "is_empty" );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

    $var = $var2;
}
else
{
    
    $var = 1;
}
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'basket_is_empty', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'basket_is_empty' is already defined.", array (
  0 => 
  array (
    0 => 4,
    1 => 0,
    2 => 274,
  ),
  1 => 
  array (
    0 => 5,
    1 => 142,
    2 => 511,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'basket_is_empty', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'basket_is_empty', $var, $rootNamespace );
}

// def $user_hash
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var3 = compiledFetchAttribute( $var2, 'role_id_list' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = implode( ",", $var2 );unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var5 = compiledFetchAttribute( $var4, 'limited_assignment_value_list' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = implode( ",", $var4 );unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = ( $var1 . ',' . $var3 );
unset( $var1, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'user_hash', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'user_hash' is already defined.", array (
  0 => 
  array (
    0 => 4,
    1 => 0,
    2 => 274,
  ),
  1 => 
  array (
    0 => 5,
    1 => 142,
    2 => 511,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'user_hash', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'user_hash', $var, $rootNamespace );
}

$oldRestoreIncludeArray_c6e3a40cfdb3a7f34fffdb0ad056392a = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/page_head_displaystyles-c97ad1008a841d8cede0fead0fe92a8f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/page_head_displaystyles.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/page_head_displaystyles-c97ad1008a841d8cede0fead0fe92a8f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/standard/templates/page_head_displaystyles.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_c6e3a40cfdb3a7f34fffdb0ad056392a;

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'extra_cache_key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['extra_cache_key'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !( $if_cond1 );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// def $extra_cache_key
if ( $tpl->hasVariable( 'extra_cache_key', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'extra_cache_key' is already defined.", array (
  0 => 
  array (
    0 => 10,
    1 => 4,
    2 => 607,
  ),
  1 => 
  array (
    0 => 10,
    1 => 29,
    2 => 632,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'extra_cache_key', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'extra_cache_key', '', $rootNamespace );
}

}
unset( $if_cond );
// if ends

unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys1 );
$cacheKeys1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$cacheKeys2 = compiledFetchAttribute( $cacheKeys1, 'uri' );
unset( $cacheKeys1 );
$cacheKeys1 = $cacheKeys2;
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
unset( $cacheKeys2 );
unset( $cacheKeys2 );
$cacheKeys2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'basket_is_empty', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['basket_is_empty'] : null;
if (! isset( $cacheKeys2 ) ) $cacheKeys2 = NULL;
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
unset( $cacheKeys3 );
unset( $cacheKeys3 );
$cacheKeys3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$cacheKeys4 = compiledFetchAttribute( $cacheKeys3, 'contentobject_id' );
unset( $cacheKeys3 );
$cacheKeys3 = $cacheKeys4;
if (! isset( $cacheKeys3 ) ) $cacheKeys3 = NULL;
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
unset( $cacheKeys4 );
unset( $cacheKeys4 );
$cacheKeys4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'extra_cache_key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['extra_cache_key'] : null;
if (! isset( $cacheKeys4 ) ) $cacheKeys4 = NULL;
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
$cacheKeys = array( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4 );unset( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
$cacheKeys = array( $cacheKeys, "13_0_13_112_extension/ezwebin/design/ezwebin/templates/pagelayout.tpl", "chi" );

list($cacheHandler_fc2f7ca6c2bf1a2976f15360d414a2d9, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, 7200, true );
if ( !( $contentData instanceof eZClusterFileFailure ) )
{

$text .= $contentData;
    unset( $contentData );
}
else
{
    unset( $contentData );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
// def $pagedata
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezpagedata',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'pagedata', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'pagedata' is already defined.", array (
  0 => 
  array (
    0 => 14,
    1 => 0,
    2 => 757,
  ),
  1 => 
  array (
    0 => 18,
    1 => 42,
    2 => 996,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'pagedata', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'pagedata', $var, $rootNamespace );
}

// def $pagestyle
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var1 = compiledFetchAttribute( $var, 'css_classes' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'pagestyle', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'pagestyle' is already defined.", array (
  0 => 
  array (
    0 => 14,
    1 => 0,
    2 => 757,
  ),
  1 => 
  array (
    0 => 18,
    1 => 42,
    2 => 996,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'pagestyle', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'pagestyle', $var, $rootNamespace );
}

// def $locales
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchTranslationList' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'locales', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'locales' is already defined.", array (
  0 => 
  array (
    0 => 14,
    1 => 0,
    2 => 757,
  ),
  1 => 
  array (
    0 => 18,
    1 => 42,
    2 => 996,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'locales', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'locales', $var, $rootNamespace );
}

// def $pagedesign
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var1 = compiledFetchAttribute( $var, 'template_look' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'pagedesign', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'pagedesign' is already defined.", array (
  0 => 
  array (
    0 => 14,
    1 => 0,
    2 => 757,
  ),
  1 => 
  array (
    0 => 18,
    1 => 42,
    2 => 996,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'pagedesign', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'pagedesign', $var, $rootNamespace );
}

// def $current_node_id
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'current_node_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'current_node_id' is already defined.", array (
  0 => 
  array (
    0 => 14,
    1 => 0,
    2 => 757,
  ),
  1 => 
  array (
    0 => 18,
    1 => 42,
    2 => 996,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'current_node_id', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'current_node_id', $var, $rootNamespace );
}

$oldRestoreIncludeArray_15ab6618e5f29683a5b4daeda57ddf10 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/page_head-1a74593420af6e34edd36708191d12a4.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/templates/page_head.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/page_head-1a74593420af6e34edd36708191d12a4.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/templates/page_head.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_15ab6618e5f29683a5b4daeda57ddf10;

$oldRestoreIncludeArray_d1acce14fc9b91d5210f4c070f07829d = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/page_head_style-d6800161c95057de78bdf6b5f9ae61d1.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/templates/page_head_style.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/page_head_style-d6800161c95057de78bdf6b5f9ae61d1.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/templates/page_head_style.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_d1acce14fc9b91d5210f4c070f07829d;

$oldRestoreIncludeArray_e459fbf8c1cf89822bba242e37b4c97c = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/page_head_script-d46b1d3c766c1adf8a1053a26cd59220.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/templates/page_head_script.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/page_head_script-d46b1d3c766c1adf8a1053a26cd59220.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/templates/page_head_script.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_e459fbf8c1cf89822bba242e37b4c97c;

$text .= '
</head>

<!--[if lt IE 7 ]><body class="ie6"><![endif]-->
<!--[if IE 7 ]>   <body class="ie7"><![endif]-->
<!--[if IE 8 ]>   <body class="ie8"><![endif]-->
<!--[if (gt IE 8)|!(IE)]><!--><body><!--<![endif]-->
<!-- Complete page area: START -->

<!-- Change between "sidemenu"/"nosidemenu" and "extrainfo"/"noextrainfo" to switch display of side columns on or off  -->
<div id="page" class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagestyle', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagestyle'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">

  ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'persistent_variable' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'extra_template_list' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'persistent_variable' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'extra_template_list' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond2Data = array( 'value' => $if_cond2 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond2Data, false, false );
$if_cond2 = $if_cond2Data['value'];
unset( $if_cond2Data );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_43daae3804b3a40cb82384e3fc052698_1 ) ) $fe_variable_stack_43daae3804b3a40cb82384e3fc052698_1 = array();
$fe_variable_stack_43daae3804b3a40cb82384e3fc052698_1[] = compact( 'fe_array_43daae3804b3a40cb82384e3fc052698_1', 'fe_array_keys_43daae3804b3a40cb82384e3fc052698_1', 'fe_n_items_43daae3804b3a40cb82384e3fc052698_1', 'fe_n_items_processed_43daae3804b3a40cb82384e3fc052698_1', 'fe_i_43daae3804b3a40cb82384e3fc052698_1', 'fe_key_43daae3804b3a40cb82384e3fc052698_1', 'fe_val_43daae3804b3a40cb82384e3fc052698_1', 'fe_offset_43daae3804b3a40cb82384e3fc052698_1', 'fe_max_43daae3804b3a40cb82384e3fc052698_1', 'fe_reverse_43daae3804b3a40cb82384e3fc052698_1', 'fe_first_val_43daae3804b3a40cb82384e3fc052698_1', 'fe_last_val_43daae3804b3a40cb82384e3fc052698_1' );
unset( $fe_array_43daae3804b3a40cb82384e3fc052698_1 );
unset( $fe_array_43daae3804b3a40cb82384e3fc052698_1 );
$fe_array_43daae3804b3a40cb82384e3fc052698_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$fe_array_43daae3804b3a40cb82384e3fc052698_11 = compiledFetchAttribute( $fe_array_43daae3804b3a40cb82384e3fc052698_1, 'persistent_variable' );
unset( $fe_array_43daae3804b3a40cb82384e3fc052698_1 );
$fe_array_43daae3804b3a40cb82384e3fc052698_1 = $fe_array_43daae3804b3a40cb82384e3fc052698_11;
$fe_array_43daae3804b3a40cb82384e3fc052698_11 = compiledFetchAttribute( $fe_array_43daae3804b3a40cb82384e3fc052698_1, 'extra_template_list' );
unset( $fe_array_43daae3804b3a40cb82384e3fc052698_1 );
$fe_array_43daae3804b3a40cb82384e3fc052698_1 = $fe_array_43daae3804b3a40cb82384e3fc052698_11;
if (! isset( $fe_array_43daae3804b3a40cb82384e3fc052698_1 ) ) $fe_array_43daae3804b3a40cb82384e3fc052698_1 = NULL;
while ( is_object( $fe_array_43daae3804b3a40cb82384e3fc052698_1 ) and method_exists( $fe_array_43daae3804b3a40cb82384e3fc052698_1, 'templateValue' ) )
    $fe_array_43daae3804b3a40cb82384e3fc052698_1 = $fe_array_43daae3804b3a40cb82384e3fc052698_1->templateValue();

$fe_array_keys_43daae3804b3a40cb82384e3fc052698_1 = is_array( $fe_array_43daae3804b3a40cb82384e3fc052698_1 ) ? array_keys( $fe_array_43daae3804b3a40cb82384e3fc052698_1 ) : array();
$fe_n_items_43daae3804b3a40cb82384e3fc052698_1 = count( $fe_array_keys_43daae3804b3a40cb82384e3fc052698_1 );
$fe_n_items_processed_43daae3804b3a40cb82384e3fc052698_1 = 0;
$fe_offset_43daae3804b3a40cb82384e3fc052698_1 = 0;
$fe_max_43daae3804b3a40cb82384e3fc052698_1 = $fe_n_items_43daae3804b3a40cb82384e3fc052698_1 - $fe_offset_43daae3804b3a40cb82384e3fc052698_1;
$fe_reverse_43daae3804b3a40cb82384e3fc052698_1 = false;
if ( $fe_offset_43daae3804b3a40cb82384e3fc052698_1 < 0 || $fe_offset_43daae3804b3a40cb82384e3fc052698_1 >= $fe_n_items_43daae3804b3a40cb82384e3fc052698_1 )
{
    $fe_offset_43daae3804b3a40cb82384e3fc052698_1 = ( $fe_offset_43daae3804b3a40cb82384e3fc052698_1 < 0 ) ? 0 : $fe_n_items_43daae3804b3a40cb82384e3fc052698_1;
    if ( $fe_n_items_43daae3804b3a40cb82384e3fc052698_1 || $fe_offset_43daae3804b3a40cb82384e3fc052698_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_43daae3804b3a40cb82384e3fc052698_1'. Array count: $fe_n_items_43daae3804b3a40cb82384e3fc052698_1");   
}
}
if ( $fe_max_43daae3804b3a40cb82384e3fc052698_1 < 0 || $fe_offset_43daae3804b3a40cb82384e3fc052698_1 + $fe_max_43daae3804b3a40cb82384e3fc052698_1 > $fe_n_items_43daae3804b3a40cb82384e3fc052698_1 )
{
    if ( $fe_max_43daae3804b3a40cb82384e3fc052698_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_43daae3804b3a40cb82384e3fc052698_1");
    $fe_max_43daae3804b3a40cb82384e3fc052698_1 = $fe_n_items_43daae3804b3a40cb82384e3fc052698_1 - $fe_offset_43daae3804b3a40cb82384e3fc052698_1;
}
if ( $fe_reverse_43daae3804b3a40cb82384e3fc052698_1 )
{
    $fe_first_val_43daae3804b3a40cb82384e3fc052698_1 = $fe_n_items_43daae3804b3a40cb82384e3fc052698_1 - 1 - $fe_offset_43daae3804b3a40cb82384e3fc052698_1;
    $fe_last_val_43daae3804b3a40cb82384e3fc052698_1  = 0;
}
else
{
    $fe_first_val_43daae3804b3a40cb82384e3fc052698_1 = $fe_offset_43daae3804b3a40cb82384e3fc052698_1;
    $fe_last_val_43daae3804b3a40cb82384e3fc052698_1  = $fe_n_items_43daae3804b3a40cb82384e3fc052698_1 - 1;
}
// foreach
for ( $fe_i_43daae3804b3a40cb82384e3fc052698_1 = $fe_first_val_43daae3804b3a40cb82384e3fc052698_1; $fe_n_items_processed_43daae3804b3a40cb82384e3fc052698_1 < $fe_max_43daae3804b3a40cb82384e3fc052698_1 && ( $fe_reverse_43daae3804b3a40cb82384e3fc052698_1 ? $fe_i_43daae3804b3a40cb82384e3fc052698_1 >= $fe_last_val_43daae3804b3a40cb82384e3fc052698_1 : $fe_i_43daae3804b3a40cb82384e3fc052698_1 <= $fe_last_val_43daae3804b3a40cb82384e3fc052698_1 ); $fe_reverse_43daae3804b3a40cb82384e3fc052698_1 ? $fe_i_43daae3804b3a40cb82384e3fc052698_1-- : $fe_i_43daae3804b3a40cb82384e3fc052698_1++ )
{
$fe_key_43daae3804b3a40cb82384e3fc052698_1 = $fe_array_keys_43daae3804b3a40cb82384e3fc052698_1[$fe_i_43daae3804b3a40cb82384e3fc052698_1];
$fe_val_43daae3804b3a40cb82384e3fc052698_1 = $fe_array_43daae3804b3a40cb82384e3fc052698_1[$fe_key_43daae3804b3a40cb82384e3fc052698_1];
$vars[$rootNamespace]['extra_template'] = $fe_val_43daae3804b3a40cb82384e3fc052698_1;
$text .= '      ';
$textElements = array();
$tpl->processFunction( 'include', $textElements,
                       false,
                       array (
  'uri' => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'concat',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'design:extra/',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'extra_template',
            ),
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 38,
    1 => 6,
    2 => 1833,
  ),
  1 => 
  array (
    0 => 38,
    1 => 58,
    2 => 1885,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/pagelayout.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    ';
$fe_n_items_processed_43daae3804b3a40cb82384e3fc052698_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_43daae3804b3a40cb82384e3fc052698_1 ) ) extract( array_pop( $fe_variable_stack_43daae3804b3a40cb82384e3fc052698_1 ) );

else
{

unset( $fe_array_43daae3804b3a40cb82384e3fc052698_1 );

unset( $fe_array_keys_43daae3804b3a40cb82384e3fc052698_1 );

unset( $fe_n_items_43daae3804b3a40cb82384e3fc052698_1 );

unset( $fe_n_items_processed_43daae3804b3a40cb82384e3fc052698_1 );

unset( $fe_i_43daae3804b3a40cb82384e3fc052698_1 );

unset( $fe_key_43daae3804b3a40cb82384e3fc052698_1 );

unset( $fe_val_43daae3804b3a40cb82384e3fc052698_1 );

unset( $fe_offset_43daae3804b3a40cb82384e3fc052698_1 );

unset( $fe_max_43daae3804b3a40cb82384e3fc052698_1 );

unset( $fe_reverse_43daae3804b3a40cb82384e3fc052698_1 );

unset( $fe_first_val_43daae3804b3a40cb82384e3fc052698_1 );

unset( $fe_last_val_43daae3804b3a40cb82384e3fc052698_1 );

unset( $fe_variable_stack_43daae3804b3a40cb82384e3fc052698_1 );

}

// foreach ends
$text .= '  ';
}
unset( $if_cond );
// if ends

$text .= '
  <!-- Header area: START -->
  ';
$oldRestoreIncludeArray_9a30e1f70f034a8f18dcc88eafae7b79 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/page_header-60cf502734d9020daf99d5088f835166.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/qstest/design/qstest/templates/page_header.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/page_header-60cf502734d9020daf99d5088f835166.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/qstest/design/qstest/templates/page_header.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_9a30e1f70f034a8f18dcc88eafae7b79;

$text .= '  <!-- Header area: END -->

  ';
unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys1 );
$cacheKeys1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$cacheKeys2 = compiledFetchAttribute( $cacheKeys1, 'uri' );
unset( $cacheKeys1 );
$cacheKeys1 = $cacheKeys2;
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
unset( $cacheKeys2 );
unset( $cacheKeys2 );
$cacheKeys2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_hash'] : null;
if (! isset( $cacheKeys2 ) ) $cacheKeys2 = NULL;
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
unset( $cacheKeys3 );
unset( $cacheKeys3 );
$cacheKeys3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'extra_cache_key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['extra_cache_key'] : null;
if (! isset( $cacheKeys3 ) ) $cacheKeys3 = NULL;
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
$cacheKeys = array( $cacheKeys1, $cacheKeys2, $cacheKeys3 );unset( $cacheKeys1, $cacheKeys2, $cacheKeys3 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
$cacheKeys = array( $cacheKeys, "46_2_46_76_extension/ezwebin/design/ezwebin/templates/pagelayout.tpl", "chi" );

list($cacheHandler_ddceecbfd5c7a7f8cf640a40ab80b8f5, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, 7200, true );
if ( !( $contentData instanceof eZClusterFileFailure ) )
{

$text .= $contentData;
    unset( $contentData );
}
else
{
    unset( $contentData );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$text .= '
  <!-- Top menu area: START -->
  ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'top_menu' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
$oldRestoreIncludeArray_f8a7b1a45729c3a9006949ed1bc14ba0 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/page_topmenu-80cb90c1ba8ffc656674f6c9680d5cc1.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/templates/page_topmenu.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/page_topmenu-80cb90c1ba8ffc656674f6c9680d5cc1.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/templates/page_topmenu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_f8a7b1a45729c3a9006949ed1bc14ba0;

$text .= '  ';
}
unset( $if_cond );
// if ends

$text .= '  <!-- Top menu area: END -->

  <!-- Path area: START -->
  ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'show_path' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
$oldRestoreIncludeArray_8781669263db8c159d275e6011d1da70 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/page_toppath-48fb99e5da6514ffff5e0c9f6fc1014a.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/templates/page_toppath.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/page_toppath-48fb99e5da6514ffff5e0c9f6fc1014a.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/templates/page_toppath.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_8781669263db8c159d275e6011d1da70;

$text .= '  ';
}
unset( $if_cond );
// if ends

$text .= '  <!-- Path area: END -->

  <!-- Toolbar area: START -->
  ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'website_toolbar' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'is_edit' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = !( $if_cond3 );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
$oldRestoreIncludeArray_3b3535f6b30afb792dc7541b05fcf933 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/page_toolbar-ec1702066a315882b01d69c7c7340ff2.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/templates/page_toolbar.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/page_toolbar-ec1702066a315882b01d69c7c7340ff2.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/templates/page_toolbar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_3b3535f6b30afb792dc7541b05fcf933;

$text .= '  ';
}
unset( $if_cond );
// if ends

$text .= '  <!-- Toolbar area: END -->

  <!-- Columns area: START -->
  <div id="columns-position">
  <div id="columns" class="float-break">

    <!-- Side menu area: START -->
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'left_menu' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
$oldRestoreIncludeArray_ac9153dc758ac27d1789856a5b77cf12 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/page_leftmenu-03a32802d619d83efa3d8c4036286014.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/templates/page_leftmenu.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/page_leftmenu-03a32802d619d83efa3d8c4036286014.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/templates/page_leftmenu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_ac9153dc758ac27d1789856a5b77cf12;

$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    <!-- Side menu area: END -->

  ';
$cachedText = $text;
$cacheHandler_ddceecbfd5c7a7f8cf640a40ab80b8f5->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_ddceecbfd5c7a7f8cf640a40ab80b8f5 );
}

$cachedText = $text;
$cacheHandler_fc2f7ca6c2bf1a2976f15360d414a2d9->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_fc2f7ca6c2bf1a2976f15360d414a2d9 );
}

$text .= '    <!-- Main area: START -->
    ';
$oldRestoreIncludeArray_fd676f31ae2be78e2333427e942b98f1 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/page_mainarea-b9f47fefbe93881593c4650b155a43a8.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/qstest/design/qstest/templates/page_mainarea.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/page_mainarea-b9f47fefbe93881593c4650b155a43a8.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/qstest/design/qstest/templates/page_mainarea.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_fd676f31ae2be78e2333427e942b98f1;

$text .= '    <!-- Main area: END -->';
unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys1 );
$cacheKeys1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$cacheKeys2 = compiledFetchAttribute( $cacheKeys1, 'uri' );
unset( $cacheKeys1 );
$cacheKeys1 = $cacheKeys2;
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
unset( $cacheKeys2 );
unset( $cacheKeys2 );
$cacheKeys2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_hash'] : null;
if (! isset( $cacheKeys2 ) ) $cacheKeys2 = NULL;
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
unset( $cacheKeys3 );
unset( $cacheKeys3 );
$cacheKeys3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'access_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['access_type'] : null;
$cacheKeys4 = compiledFetchAttribute( $cacheKeys3, 'name' );
unset( $cacheKeys3 );
$cacheKeys3 = $cacheKeys4;
if (! isset( $cacheKeys3 ) ) $cacheKeys3 = NULL;
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
unset( $cacheKeys4 );
unset( $cacheKeys4 );
$cacheKeys4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'extra_cache_key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['extra_cache_key'] : null;
if (! isset( $cacheKeys4 ) ) $cacheKeys4 = NULL;
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
$cacheKeys = array( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4 );unset( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
$cacheKeys = array( $cacheKeys, "81_0_81_93_extension/ezwebin/design/ezwebin/templates/pagelayout.tpl", "chi" );

list($cacheHandler_aad04f5b23d3a389e54ec8beea8aaa25, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, 7200, true );
if ( !( $contentData instanceof eZClusterFileFailure ) )
{

$text .= $contentData;
    unset( $contentData );
}
else
{
    unset( $contentData );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$text .= '
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedesign', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedesign'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// def $pagedata
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezpagedata',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'pagedata', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'pagedata' is already defined.", array (
  0 => 
  array (
    0 => 84,
    1 => 8,
    2 => 3073,
  ),
  1 => 
  array (
    0 => 85,
    1 => 50,
    2 => 3154,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'pagedata', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'pagedata', $var, $rootNamespace );
}

// def $pagedesign
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$var1 = compiledFetchAttribute( $var, 'template_look' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'pagedesign', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'pagedesign' is already defined.", array (
  0 => 
  array (
    0 => 84,
    1 => 8,
    2 => 3073,
  ),
  1 => 
  array (
    0 => 85,
    1 => 50,
    2 => 3154,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'pagedesign', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'pagedesign', $var, $rootNamespace );
}

$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '
    <!-- Extra area: START -->
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'extra_menu' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
$oldRestoreIncludeArray_add31578648d4ba006233420227356fe = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/page_extramenu-88b93c97b255cf0d0b291b5457fefa94.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/templates/page_extramenu.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/page_extramenu-88b93c97b255cf0d0b291b5457fefa94.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/templates/page_extramenu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_add31578648d4ba006233420227356fe;

$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    <!-- Extra area: END -->

  </div>
  </div>
  <!-- Columns area: END -->

  <!-- Footer area: START -->
  ';
$oldRestoreIncludeArray_3981773b63ddcf56a9aeb369d604464d = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/page_footer-30beaac3b6bbc3f2f2a850c3e157769e.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/qstest/design/qstest/templates/page_footer.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/page_footer-30beaac3b6bbc3f2f2a850c3e157769e.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/qstest/design/qstest/templates/page_footer.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_3981773b63ddcf56a9aeb369d604464d;

$text .= '  <!-- Footer area: END -->

</div>
<!-- Complete page area: END -->

<!-- Footer script area: START -->';
$oldRestoreIncludeArray_c9d9261cb008b2a1037f64bed7858e8e = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/page_footer_script-f74f1a6e7fc5589cf7c9fdcc228cfcc2.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/templates/page_footer_script.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/page_footer_script-f74f1a6e7fc5589cf7c9fdcc228cfcc2.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/templates/page_footer_script.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_c9d9261cb008b2a1037f64bed7858e8e;

$text .= '<!-- Footer script area: END -->
';
$cachedText = $text;
$cacheHandler_aad04f5b23d3a389e54ec8beea8aaa25->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_aad04f5b23d3a389e54ec8beea8aaa25 );
}

$text .= '

<!--DEBUG_REPORT-->
</body>
</html>';

$setArray = $oldSetArray_d2158539c90843044fccb140495222a5;
$tpl->Level--;
?>
