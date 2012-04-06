<?php
// URI:       design/admin2/templates/page_topmenu.tpl
// Filename:  design/admin2/templates/page_topmenu.tpl
// Timestamp: 1331119528 (Wed Mar 7 19:25:28 CST 2012)
$oldSetArray_8aceb509e7205fa34c55f12f785fdfda = isset( $setArray ) ? $setArray : array();
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

$text .= '<div id="header-topmenu">
<ul>';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_53e2e0e94e1dcbc3e69ce31b1865d157_8 ) ) $fe_variable_stack_53e2e0e94e1dcbc3e69ce31b1865d157_8 = array();
$fe_variable_stack_53e2e0e94e1dcbc3e69ce31b1865d157_8[] = compact( 'fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8', 'fe_array_keys_53e2e0e94e1dcbc3e69ce31b1865d157_8', 'fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_8', 'fe_n_items_processed_53e2e0e94e1dcbc3e69ce31b1865d157_8', 'fe_i_53e2e0e94e1dcbc3e69ce31b1865d157_8', 'fe_key_53e2e0e94e1dcbc3e69ce31b1865d157_8', 'fe_val_53e2e0e94e1dcbc3e69ce31b1865d157_8', 'fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_8', 'fe_max_53e2e0e94e1dcbc3e69ce31b1865d157_8', 'fe_reverse_53e2e0e94e1dcbc3e69ce31b1865d157_8', 'fe_first_val_53e2e0e94e1dcbc3e69ce31b1865d157_8', 'fe_last_val_53e2e0e94e1dcbc3e69ce31b1865d157_8' );
unset( $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8 );
if (! isset( $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8 ) ) $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8 = NULL;
while ( is_object( $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8 ) and method_exists( $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8, 'templateValue' ) )
    $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8 = $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8->templateValue();
$fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8Data = array( 'value' => $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8 );
$tpl->processOperator( 'topmenu',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'ui_context',
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 7,
      1 => true,
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8Data, false, false );
$fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8 = $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8Data['value'];
unset( $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8Data );
if (! isset( $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8 ) ) $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8 = NULL;
while ( is_object( $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8 ) and method_exists( $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8, 'templateValue' ) )
    $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8 = $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8->templateValue();

$fe_array_keys_53e2e0e94e1dcbc3e69ce31b1865d157_8 = is_array( $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8 ) ? array_keys( $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8 ) : array();
$fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_8 = count( $fe_array_keys_53e2e0e94e1dcbc3e69ce31b1865d157_8 );
$fe_n_items_processed_53e2e0e94e1dcbc3e69ce31b1865d157_8 = 0;
$fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_8 = 0;
$fe_max_53e2e0e94e1dcbc3e69ce31b1865d157_8 = $fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_8 - $fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_8;
$fe_reverse_53e2e0e94e1dcbc3e69ce31b1865d157_8 = false;
if ( $fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_8 < 0 || $fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_8 >= $fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_8 )
{
    $fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_8 = ( $fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_8 < 0 ) ? 0 : $fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_8;
    if ( $fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_8 || $fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_8 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_8'. Array count: $fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_8");   
}
}
if ( $fe_max_53e2e0e94e1dcbc3e69ce31b1865d157_8 < 0 || $fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_8 + $fe_max_53e2e0e94e1dcbc3e69ce31b1865d157_8 > $fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_8 )
{
    if ( $fe_max_53e2e0e94e1dcbc3e69ce31b1865d157_8 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_53e2e0e94e1dcbc3e69ce31b1865d157_8");
    $fe_max_53e2e0e94e1dcbc3e69ce31b1865d157_8 = $fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_8 - $fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_8;
}
if ( $fe_reverse_53e2e0e94e1dcbc3e69ce31b1865d157_8 )
{
    $fe_first_val_53e2e0e94e1dcbc3e69ce31b1865d157_8 = $fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_8 - 1 - $fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_8;
    $fe_last_val_53e2e0e94e1dcbc3e69ce31b1865d157_8  = 0;
}
else
{
    $fe_first_val_53e2e0e94e1dcbc3e69ce31b1865d157_8 = $fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_8;
    $fe_last_val_53e2e0e94e1dcbc3e69ce31b1865d157_8  = $fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_8 - 1;
}
// foreach
for ( $fe_i_53e2e0e94e1dcbc3e69ce31b1865d157_8 = $fe_first_val_53e2e0e94e1dcbc3e69ce31b1865d157_8; $fe_n_items_processed_53e2e0e94e1dcbc3e69ce31b1865d157_8 < $fe_max_53e2e0e94e1dcbc3e69ce31b1865d157_8 && ( $fe_reverse_53e2e0e94e1dcbc3e69ce31b1865d157_8 ? $fe_i_53e2e0e94e1dcbc3e69ce31b1865d157_8 >= $fe_last_val_53e2e0e94e1dcbc3e69ce31b1865d157_8 : $fe_i_53e2e0e94e1dcbc3e69ce31b1865d157_8 <= $fe_last_val_53e2e0e94e1dcbc3e69ce31b1865d157_8 ); $fe_reverse_53e2e0e94e1dcbc3e69ce31b1865d157_8 ? $fe_i_53e2e0e94e1dcbc3e69ce31b1865d157_8-- : $fe_i_53e2e0e94e1dcbc3e69ce31b1865d157_8++ )
{
$fe_key_53e2e0e94e1dcbc3e69ce31b1865d157_8 = $fe_array_keys_53e2e0e94e1dcbc3e69ce31b1865d157_8[$fe_i_53e2e0e94e1dcbc3e69ce31b1865d157_8];
$fe_val_53e2e0e94e1dcbc3e69ce31b1865d157_8 = $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8[$fe_key_53e2e0e94e1dcbc3e69ce31b1865d157_8];
$vars[$rootNamespace]['menu'] = $fe_val_53e2e0e94e1dcbc3e69ce31b1865d157_8;
$text .= '    ';
$oldRestoreIncludeArray_213013d6b2a503f472202b30136816b2 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['menu_item'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'menu_item', $vars[$currentNamespace]['menu_item'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['menu_item'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'menu_item', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['menu_item'] = $var;
unset( $var );
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['navigationpart_identifier'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'navigationpart_identifier', $vars[$currentNamespace]['navigationpart_identifier'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['navigationpart_identifier'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'navigationpart_identifier', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'navigation_part', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['navigation_part'] : null;
$var1 = compiledFetchAttribute( $var, 'identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['navigationpart_identifier'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/page_topmenuitem-04505be59c42043dcda4425b44c9b26d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/page_topmenuitem.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/page_topmenuitem-04505be59c42043dcda4425b44c9b26d.php' );
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
$tpl->processURI( 'design/admin2/templates/page_topmenuitem.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_213013d6b2a503f472202b30136816b2;

$fe_n_items_processed_53e2e0e94e1dcbc3e69ce31b1865d157_8++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_53e2e0e94e1dcbc3e69ce31b1865d157_8 ) ) extract( array_pop( $fe_variable_stack_53e2e0e94e1dcbc3e69ce31b1865d157_8 ) );

else
{

unset( $fe_array_53e2e0e94e1dcbc3e69ce31b1865d157_8 );

unset( $fe_array_keys_53e2e0e94e1dcbc3e69ce31b1865d157_8 );

unset( $fe_n_items_53e2e0e94e1dcbc3e69ce31b1865d157_8 );

unset( $fe_n_items_processed_53e2e0e94e1dcbc3e69ce31b1865d157_8 );

unset( $fe_i_53e2e0e94e1dcbc3e69ce31b1865d157_8 );

unset( $fe_key_53e2e0e94e1dcbc3e69ce31b1865d157_8 );

unset( $fe_val_53e2e0e94e1dcbc3e69ce31b1865d157_8 );

unset( $fe_offset_53e2e0e94e1dcbc3e69ce31b1865d157_8 );

unset( $fe_max_53e2e0e94e1dcbc3e69ce31b1865d157_8 );

unset( $fe_reverse_53e2e0e94e1dcbc3e69ce31b1865d157_8 );

unset( $fe_first_val_53e2e0e94e1dcbc3e69ce31b1865d157_8 );

unset( $fe_last_val_53e2e0e94e1dcbc3e69ce31b1865d157_8 );

unset( $fe_variable_stack_53e2e0e94e1dcbc3e69ce31b1865d157_8 );

}

// foreach ends
$text .= '</ul>
</div>

<script type="text/javascript">

jQuery( \'#header-topmenu ul li\' ).click(function(){ jQuery(this).addClass(\'active\'); });

</script>
';

$setArray = $oldSetArray_8aceb509e7205fa34c55f12f785fdfda;
$tpl->Level--;
?>
