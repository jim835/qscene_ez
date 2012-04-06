<?php
// URI:       design/admin2/templates/toolbar/full/admin_quick_settings.tpl
// Filename:  design/admin2/templates/toolbar/full/admin_quick_settings.tpl
// Timestamp: 1331119543 (Wed Mar 7 19:25:43 CST 2012)
$oldSetArray_5f654a42fcb76b162551a0fc9b103aca = isset( $setArray ) ? $setArray : array();
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

// if begins
unset( $if_cond );
$if_cond = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array(     'module' => "setup",
    'function' => "setup",
    'user_id' => null ) );
$if_cond = isset( $if_cond['result'] ) ? $if_cond['result'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '
<div id="quicksettings-tool">
<div class="box-header"><div class="box-ml">

   ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'edit' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '     <h4><span class="disabled">快速设置</span></h4>
   ';
}
else
{
$text .= '     <h4>快速设置</h4>
   ';
}
unset( $if_cond );
// if ends

$text .= '
</div></div>

<div class="box-bc"><div class="box-ml"><div class="box-content">
    ';
unset( $var );
$var = eZPreferences::value( "admin_quicksettings_siteaccess" );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['siteaccess'] = $var;
unset( $var );
$vars[$currentNamespace]['select_siteaccess'] = 'true';
$text .= '        ';
$oldRestoreIncludeArray_a442f8f4c2080f5c34e3d4004ba2d27a = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/quick_settings-0c657035353f28405fd9f7c628f25e7b.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/setup/quick_settings.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/quick_settings-0c657035353f28405fd9f7c628f25e7b.php' );
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
$tpl->processURI( 'design/admin2/templates/setup/quick_settings.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_a442f8f4c2080f5c34e3d4004ba2d27a;

$text .= '    ';
unset( $vars[$currentNamespace]['siteaccess'] );
unset( $vars[$currentNamespace]['select_siteaccess'] );
$text .= '</div></div></div>
</div>
';
}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_5f654a42fcb76b162551a0fc9b103aca;
$tpl->Level--;
?>
