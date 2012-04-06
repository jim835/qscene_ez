<?php
// URI:       extension/qstest/design/qstest/templates/page_mainarea.tpl
// Filename:  extension/qstest/design/qstest/templates/page_mainarea.tpl
// Timestamp: 1333612252 (Thu Apr 5 15:50:52 CST 2012)
$oldSetArray_a55c3adb23d96765d329f1e5b0700cf2 = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/qstest/design/qstest/templates/page_mainarea.tpl (extension/qstest/design/qstest/templates/page_mainarea.tpl) -->
<p class="small">extension/qstest/design/qstest/templates/page_mainarea.tpl</p><br/>
<div id="left-position">
        ';
$oldRestoreIncludeArray_7b2eb75045be14d572c0e371a497aa15 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/left_side_news-1834b0076cd8f3385460f7bfe2564b74.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/qstest/design/qstest/templates/left_side_news.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/left_side_news-1834b0076cd8f3385460f7bfe2564b74.php' );
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
$tpl->processURI( 'extension/qstest/design/qstest/templates/left_side_news.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_7b2eb75045be14d572c0e371a497aa15;

$text .= '</div>
    <div id="main-position">
      <div id="main" class="float-break">
        <div class="overflow-fix">
          <!-- Main area content: START -->
          ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
          <!-- Main area content: END -->
        </div>
      </div>
    </div>
<!-- STOP: including template: extension/qstest/design/qstest/templates/page_mainarea.tpl (extension/qstest/design/qstest/templates/page_mainarea.tpl) -->
';

$setArray = $oldSetArray_a55c3adb23d96765d329f1e5b0700cf2;
$tpl->Level--;
?>
