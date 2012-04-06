<?php
// URI:       extension/qstest/design/qstest/templates/page_header.tpl
// Filename:  extension/qstest/design/qstest/templates/page_header.tpl
// Timestamp: 1333612252 (Thu Apr 5 15:50:52 CST 2012)
$oldSetArray_b02f0ea4c6d7aa48e9c3d697df04dab4 = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/qstest/design/qstest/templates/page_header.tpl (extension/qstest/design/qstest/templates/page_header.tpl) -->
<p class="small">extension/qstest/design/qstest/templates/page_header.tpl</p><br/>
  <div id="header-position">
  <div id="header" class="float-break">
    <div id="usermenu">
      ';
$oldRestoreIncludeArray_f5b856983b07aafb25d9c25ceff03677 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/page_header_languages-ec5e6f1b0009a09811a0f6f7d2d582d3.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/templates/page_header_languages.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/page_header_languages-ec5e6f1b0009a09811a0f6f7d2d582d3.php' );
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
$tpl->processURI( 'extension/ezwebin/design/ezwebin/templates/page_header_languages.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_f5b856983b07aafb25d9c25ceff03677;

$text .= '  
      ';
$oldRestoreIncludeArray_42e0fa2c62af0ed11d7e34e3946b9330 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/page_header_links-8b33e806d86be213a86ea665278e8125.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/templates/page_header_links.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/page_header_links-8b33e806d86be213a86ea665278e8125.php' );
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
$tpl->processURI( 'extension/ezwebin/design/ezwebin/templates/page_header_links.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_42e0fa2c62af0ed11d7e34e3946b9330;

$text .= '    </div>

    ';
$oldRestoreIncludeArray_a3fb9f7807dd1e488708320169bc44b0 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/page_header_logo-42d6c9538f4fc1d2db236120ea617527.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/qstest/design/qstest/templates/page_header_logo.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/page_header_logo-42d6c9538f4fc1d2db236120ea617527.php' );
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
$tpl->processURI( 'extension/qstest/design/qstest/templates/page_header_logo.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_a3fb9f7807dd1e488708320169bc44b0;

$text .= '    
    
    
    <p class="hide"><a href="#main">Skip to main content</a></p>
  </div>
  </div>
<!-- STOP: including template: extension/qstest/design/qstest/templates/page_header.tpl (extension/qstest/design/qstest/templates/page_header.tpl) -->
';

$setArray = $oldSetArray_b02f0ea4c6d7aa48e9c3d697df04dab4;
$tpl->Level--;
?>
