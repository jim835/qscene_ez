<?php
// URI:       extension/qstest/design/qstest/templates/left_side_news.tpl
// Filename:  extension/qstest/design/qstest/templates/left_side_news.tpl
// Timestamp: 1333612252 (Thu Apr 5 15:50:52 CST 2012)
$oldSetArray_356e51607cee412d2b7b4e8b3b194511 = isset( $setArray ) ? $setArray : array();
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

// def $left_news
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => 168,
    'sort_by' => array( "modified",
       false ),
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => 5,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => false,
    'class_filter_array' => false,
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'left_news', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'left_news' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 4,
    1 => 48,
    2 => 139,
  ),
  2 => 'extension/qstest/design/qstest/templates/left_side_news.tpl',
) );
    $tpl->setVariable( 'left_news', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'left_news', $var, $rootNamespace );
}

$text .= '
<div>
<ul>';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_563431e1d54282ffd7f0933ee9eade2a_7 ) ) $fe_variable_stack_563431e1d54282ffd7f0933ee9eade2a_7 = array();
$fe_variable_stack_563431e1d54282ffd7f0933ee9eade2a_7[] = compact( 'fe_array_563431e1d54282ffd7f0933ee9eade2a_7', 'fe_array_keys_563431e1d54282ffd7f0933ee9eade2a_7', 'fe_n_items_563431e1d54282ffd7f0933ee9eade2a_7', 'fe_n_items_processed_563431e1d54282ffd7f0933ee9eade2a_7', 'fe_i_563431e1d54282ffd7f0933ee9eade2a_7', 'fe_key_563431e1d54282ffd7f0933ee9eade2a_7', 'fe_val_563431e1d54282ffd7f0933ee9eade2a_7', 'fe_offset_563431e1d54282ffd7f0933ee9eade2a_7', 'fe_max_563431e1d54282ffd7f0933ee9eade2a_7', 'fe_reverse_563431e1d54282ffd7f0933ee9eade2a_7', 'fe_first_val_563431e1d54282ffd7f0933ee9eade2a_7', 'fe_last_val_563431e1d54282ffd7f0933ee9eade2a_7' );
unset( $fe_array_563431e1d54282ffd7f0933ee9eade2a_7 );
unset( $fe_array_563431e1d54282ffd7f0933ee9eade2a_7 );
$fe_array_563431e1d54282ffd7f0933ee9eade2a_7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_news', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_news'] : null;
if (! isset( $fe_array_563431e1d54282ffd7f0933ee9eade2a_7 ) ) $fe_array_563431e1d54282ffd7f0933ee9eade2a_7 = NULL;
while ( is_object( $fe_array_563431e1d54282ffd7f0933ee9eade2a_7 ) and method_exists( $fe_array_563431e1d54282ffd7f0933ee9eade2a_7, 'templateValue' ) )
    $fe_array_563431e1d54282ffd7f0933ee9eade2a_7 = $fe_array_563431e1d54282ffd7f0933ee9eade2a_7->templateValue();

$fe_array_keys_563431e1d54282ffd7f0933ee9eade2a_7 = is_array( $fe_array_563431e1d54282ffd7f0933ee9eade2a_7 ) ? array_keys( $fe_array_563431e1d54282ffd7f0933ee9eade2a_7 ) : array();
$fe_n_items_563431e1d54282ffd7f0933ee9eade2a_7 = count( $fe_array_keys_563431e1d54282ffd7f0933ee9eade2a_7 );
$fe_n_items_processed_563431e1d54282ffd7f0933ee9eade2a_7 = 0;
$fe_offset_563431e1d54282ffd7f0933ee9eade2a_7 = 0;
$fe_max_563431e1d54282ffd7f0933ee9eade2a_7 = $fe_n_items_563431e1d54282ffd7f0933ee9eade2a_7 - $fe_offset_563431e1d54282ffd7f0933ee9eade2a_7;
$fe_reverse_563431e1d54282ffd7f0933ee9eade2a_7 = false;
if ( $fe_offset_563431e1d54282ffd7f0933ee9eade2a_7 < 0 || $fe_offset_563431e1d54282ffd7f0933ee9eade2a_7 >= $fe_n_items_563431e1d54282ffd7f0933ee9eade2a_7 )
{
    $fe_offset_563431e1d54282ffd7f0933ee9eade2a_7 = ( $fe_offset_563431e1d54282ffd7f0933ee9eade2a_7 < 0 ) ? 0 : $fe_n_items_563431e1d54282ffd7f0933ee9eade2a_7;
    if ( $fe_n_items_563431e1d54282ffd7f0933ee9eade2a_7 || $fe_offset_563431e1d54282ffd7f0933ee9eade2a_7 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_563431e1d54282ffd7f0933ee9eade2a_7'. Array count: $fe_n_items_563431e1d54282ffd7f0933ee9eade2a_7");   
}
}
if ( $fe_max_563431e1d54282ffd7f0933ee9eade2a_7 < 0 || $fe_offset_563431e1d54282ffd7f0933ee9eade2a_7 + $fe_max_563431e1d54282ffd7f0933ee9eade2a_7 > $fe_n_items_563431e1d54282ffd7f0933ee9eade2a_7 )
{
    if ( $fe_max_563431e1d54282ffd7f0933ee9eade2a_7 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_563431e1d54282ffd7f0933ee9eade2a_7");
    $fe_max_563431e1d54282ffd7f0933ee9eade2a_7 = $fe_n_items_563431e1d54282ffd7f0933ee9eade2a_7 - $fe_offset_563431e1d54282ffd7f0933ee9eade2a_7;
}
if ( $fe_reverse_563431e1d54282ffd7f0933ee9eade2a_7 )
{
    $fe_first_val_563431e1d54282ffd7f0933ee9eade2a_7 = $fe_n_items_563431e1d54282ffd7f0933ee9eade2a_7 - 1 - $fe_offset_563431e1d54282ffd7f0933ee9eade2a_7;
    $fe_last_val_563431e1d54282ffd7f0933ee9eade2a_7  = 0;
}
else
{
    $fe_first_val_563431e1d54282ffd7f0933ee9eade2a_7 = $fe_offset_563431e1d54282ffd7f0933ee9eade2a_7;
    $fe_last_val_563431e1d54282ffd7f0933ee9eade2a_7  = $fe_n_items_563431e1d54282ffd7f0933ee9eade2a_7 - 1;
}
// foreach
for ( $fe_i_563431e1d54282ffd7f0933ee9eade2a_7 = $fe_first_val_563431e1d54282ffd7f0933ee9eade2a_7; $fe_n_items_processed_563431e1d54282ffd7f0933ee9eade2a_7 < $fe_max_563431e1d54282ffd7f0933ee9eade2a_7 && ( $fe_reverse_563431e1d54282ffd7f0933ee9eade2a_7 ? $fe_i_563431e1d54282ffd7f0933ee9eade2a_7 >= $fe_last_val_563431e1d54282ffd7f0933ee9eade2a_7 : $fe_i_563431e1d54282ffd7f0933ee9eade2a_7 <= $fe_last_val_563431e1d54282ffd7f0933ee9eade2a_7 ); $fe_reverse_563431e1d54282ffd7f0933ee9eade2a_7 ? $fe_i_563431e1d54282ffd7f0933ee9eade2a_7-- : $fe_i_563431e1d54282ffd7f0933ee9eade2a_7++ )
{
$fe_key_563431e1d54282ffd7f0933ee9eade2a_7 = $fe_array_keys_563431e1d54282ffd7f0933ee9eade2a_7[$fe_i_563431e1d54282ffd7f0933ee9eade2a_7];
$fe_val_563431e1d54282ffd7f0933ee9eade2a_7 = $fe_array_563431e1d54282ffd7f0933ee9eade2a_7[$fe_key_563431e1d54282ffd7f0933ee9eade2a_7];
$vars[$rootNamespace]['news'] = $fe_val_563431e1d54282ffd7f0933ee9eade2a_7;
$text .= '    <li>
        <a href="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'news', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['news'] : null;
$var1 = compiledFetchAttribute( $var, 'url_alias' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'news', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['news'] : null;
$var1 = compiledFetchAttribute( $var, 'name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</a>
    </li>';
$fe_n_items_processed_563431e1d54282ffd7f0933ee9eade2a_7++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_563431e1d54282ffd7f0933ee9eade2a_7 ) ) extract( array_pop( $fe_variable_stack_563431e1d54282ffd7f0933ee9eade2a_7 ) );

else
{

unset( $fe_array_563431e1d54282ffd7f0933ee9eade2a_7 );

unset( $fe_array_keys_563431e1d54282ffd7f0933ee9eade2a_7 );

unset( $fe_n_items_563431e1d54282ffd7f0933ee9eade2a_7 );

unset( $fe_n_items_processed_563431e1d54282ffd7f0933ee9eade2a_7 );

unset( $fe_i_563431e1d54282ffd7f0933ee9eade2a_7 );

unset( $fe_key_563431e1d54282ffd7f0933ee9eade2a_7 );

unset( $fe_val_563431e1d54282ffd7f0933ee9eade2a_7 );

unset( $fe_offset_563431e1d54282ffd7f0933ee9eade2a_7 );

unset( $fe_max_563431e1d54282ffd7f0933ee9eade2a_7 );

unset( $fe_reverse_563431e1d54282ffd7f0933ee9eade2a_7 );

unset( $fe_first_val_563431e1d54282ffd7f0933ee9eade2a_7 );

unset( $fe_last_val_563431e1d54282ffd7f0933ee9eade2a_7 );

unset( $fe_variable_stack_563431e1d54282ffd7f0933ee9eade2a_7 );

}

// foreach ends
$text .= '</ul>
</div>';

$setArray = $oldSetArray_356e51607cee412d2b7b4e8b3b194511;
$tpl->Level--;
?>
