<?php
// URI:       design:dashboard/latest_content.tpl
// Filename:  design/standard/templates/dashboard/latest_content.tpl
// Timestamp: 1331119525 (Wed Mar 7 19:25:25 CST 2012)
$oldSetArray_6662a2961c1d16dc9bdfc1e396337b31 = isset( $setArray ) ? $setArray : array();
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

unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys1 );
$cacheKeys1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user'] : null;
$cacheKeys2 = compiledFetchAttribute( $cacheKeys1, 'contentobject_id' );
unset( $cacheKeys1 );
$cacheKeys1 = $cacheKeys2;
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
$cacheKeys = array( $cacheKeys1 );unset( $cacheKeys1 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
$cacheKeys = array( $cacheKeys, "1_0_1_48_design/standard/templates/dashboard/latest_content.tpl", "ezwebin_site_admin" );

list($cacheHandler_beaca3859df7c32ea32c68250e28c938, $contentData) =
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
// def $latest_content
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var2 = compiledFetchAttribute( $var1, 'number_of_items' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user'] : null;
$var5 = compiledFetchAttribute( $var4, 'contentobject_id' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = array( "owner", "=", $var4 );unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => "2",
    'sort_by' => array( "modified",
       false ),
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => $var1,
    'depth' => false,
    'depth_operator' => false,
    'class_id' => false,
    'attribute_filter' => $var2,
    'extended_attribute_filter' => false,
    'class_filter_type' => false,
    'class_filter_array' => false,
    'group_by' => false,
    'main_node_only' => true,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'latest_content', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'latest_content' is already defined.", array (
  0 => 
  array (
    0 => 3,
    1 => 0,
    2 => 53,
  ),
  1 => 
  array (
    0 => 7,
    1 => 133,
    2 => 599,
  ),
  2 => 'design/standard/templates/dashboard/latest_content.tpl',
) );
    $tpl->setVariable( 'latest_content', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'latest_content', $var, $rootNamespace );
}

$text .= '
<h2>我最近的内容</h2>
';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'latest_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['latest_content'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '
<table class="list" cellpadding="0" cellspacing="0" border="0">
    <tr>
        <th>名称</th>
        <th>类型</th>
        <th>更改时间</th>
        <th class="tight"></th>
    </tr>
    ';
// foreach begins
$skipDelimiter = true;
// creating sequence variables for \{foreach} loop
$foreach_sequence_array_614401abe4850022cf155f1d2dde8ff4_4 = array (
  0 => 'bglight',
  1 => 'bgdark',
);
$foreach_sequence_var_614401abe4850022cf155f1d2dde8ff4_4 = current( $foreach_sequence_array_614401abe4850022cf155f1d2dde8ff4_4 );

if ( !isset( $fe_variable_stack_614401abe4850022cf155f1d2dde8ff4_4 ) ) $fe_variable_stack_614401abe4850022cf155f1d2dde8ff4_4 = array();
$fe_variable_stack_614401abe4850022cf155f1d2dde8ff4_4[] = compact( 'fe_array_614401abe4850022cf155f1d2dde8ff4_4', 'fe_array_keys_614401abe4850022cf155f1d2dde8ff4_4', 'fe_n_items_614401abe4850022cf155f1d2dde8ff4_4', 'fe_n_items_processed_614401abe4850022cf155f1d2dde8ff4_4', 'fe_i_614401abe4850022cf155f1d2dde8ff4_4', 'fe_key_614401abe4850022cf155f1d2dde8ff4_4', 'fe_val_614401abe4850022cf155f1d2dde8ff4_4', 'fe_offset_614401abe4850022cf155f1d2dde8ff4_4', 'fe_max_614401abe4850022cf155f1d2dde8ff4_4', 'fe_reverse_614401abe4850022cf155f1d2dde8ff4_4', 'fe_first_val_614401abe4850022cf155f1d2dde8ff4_4', 'fe_last_val_614401abe4850022cf155f1d2dde8ff4_4' );
unset( $fe_array_614401abe4850022cf155f1d2dde8ff4_4 );
unset( $fe_array_614401abe4850022cf155f1d2dde8ff4_4 );
$fe_array_614401abe4850022cf155f1d2dde8ff4_4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'latest_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['latest_content'] : null;
if (! isset( $fe_array_614401abe4850022cf155f1d2dde8ff4_4 ) ) $fe_array_614401abe4850022cf155f1d2dde8ff4_4 = NULL;
while ( is_object( $fe_array_614401abe4850022cf155f1d2dde8ff4_4 ) and method_exists( $fe_array_614401abe4850022cf155f1d2dde8ff4_4, 'templateValue' ) )
    $fe_array_614401abe4850022cf155f1d2dde8ff4_4 = $fe_array_614401abe4850022cf155f1d2dde8ff4_4->templateValue();

$fe_array_keys_614401abe4850022cf155f1d2dde8ff4_4 = is_array( $fe_array_614401abe4850022cf155f1d2dde8ff4_4 ) ? array_keys( $fe_array_614401abe4850022cf155f1d2dde8ff4_4 ) : array();
$fe_n_items_614401abe4850022cf155f1d2dde8ff4_4 = count( $fe_array_keys_614401abe4850022cf155f1d2dde8ff4_4 );
$fe_n_items_processed_614401abe4850022cf155f1d2dde8ff4_4 = 0;
$fe_offset_614401abe4850022cf155f1d2dde8ff4_4 = 0;
$fe_max_614401abe4850022cf155f1d2dde8ff4_4 = $fe_n_items_614401abe4850022cf155f1d2dde8ff4_4 - $fe_offset_614401abe4850022cf155f1d2dde8ff4_4;
$fe_reverse_614401abe4850022cf155f1d2dde8ff4_4 = false;
if ( $fe_offset_614401abe4850022cf155f1d2dde8ff4_4 < 0 || $fe_offset_614401abe4850022cf155f1d2dde8ff4_4 >= $fe_n_items_614401abe4850022cf155f1d2dde8ff4_4 )
{
    $fe_offset_614401abe4850022cf155f1d2dde8ff4_4 = ( $fe_offset_614401abe4850022cf155f1d2dde8ff4_4 < 0 ) ? 0 : $fe_n_items_614401abe4850022cf155f1d2dde8ff4_4;
    if ( $fe_n_items_614401abe4850022cf155f1d2dde8ff4_4 || $fe_offset_614401abe4850022cf155f1d2dde8ff4_4 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_614401abe4850022cf155f1d2dde8ff4_4'. Array count: $fe_n_items_614401abe4850022cf155f1d2dde8ff4_4");   
}
}
if ( $fe_max_614401abe4850022cf155f1d2dde8ff4_4 < 0 || $fe_offset_614401abe4850022cf155f1d2dde8ff4_4 + $fe_max_614401abe4850022cf155f1d2dde8ff4_4 > $fe_n_items_614401abe4850022cf155f1d2dde8ff4_4 )
{
    if ( $fe_max_614401abe4850022cf155f1d2dde8ff4_4 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_614401abe4850022cf155f1d2dde8ff4_4");
    $fe_max_614401abe4850022cf155f1d2dde8ff4_4 = $fe_n_items_614401abe4850022cf155f1d2dde8ff4_4 - $fe_offset_614401abe4850022cf155f1d2dde8ff4_4;
}
if ( $fe_reverse_614401abe4850022cf155f1d2dde8ff4_4 )
{
    $fe_first_val_614401abe4850022cf155f1d2dde8ff4_4 = $fe_n_items_614401abe4850022cf155f1d2dde8ff4_4 - 1 - $fe_offset_614401abe4850022cf155f1d2dde8ff4_4;
    $fe_last_val_614401abe4850022cf155f1d2dde8ff4_4  = 0;
}
else
{
    $fe_first_val_614401abe4850022cf155f1d2dde8ff4_4 = $fe_offset_614401abe4850022cf155f1d2dde8ff4_4;
    $fe_last_val_614401abe4850022cf155f1d2dde8ff4_4  = $fe_n_items_614401abe4850022cf155f1d2dde8ff4_4 - 1;
}
// foreach
for ( $fe_i_614401abe4850022cf155f1d2dde8ff4_4 = $fe_first_val_614401abe4850022cf155f1d2dde8ff4_4; $fe_n_items_processed_614401abe4850022cf155f1d2dde8ff4_4 < $fe_max_614401abe4850022cf155f1d2dde8ff4_4 && ( $fe_reverse_614401abe4850022cf155f1d2dde8ff4_4 ? $fe_i_614401abe4850022cf155f1d2dde8ff4_4 >= $fe_last_val_614401abe4850022cf155f1d2dde8ff4_4 : $fe_i_614401abe4850022cf155f1d2dde8ff4_4 <= $fe_last_val_614401abe4850022cf155f1d2dde8ff4_4 ); $fe_reverse_614401abe4850022cf155f1d2dde8ff4_4 ? $fe_i_614401abe4850022cf155f1d2dde8ff4_4-- : $fe_i_614401abe4850022cf155f1d2dde8ff4_4++ )
{
$fe_key_614401abe4850022cf155f1d2dde8ff4_4 = $fe_array_keys_614401abe4850022cf155f1d2dde8ff4_4[$fe_i_614401abe4850022cf155f1d2dde8ff4_4];
$fe_val_614401abe4850022cf155f1d2dde8ff4_4 = $fe_array_614401abe4850022cf155f1d2dde8ff4_4[$fe_key_614401abe4850022cf155f1d2dde8ff4_4];
$vars[$rootNamespace]['latest_node'] = $fe_val_614401abe4850022cf155f1d2dde8ff4_4;
// setting current sequence value
$vars[$rootNamespace]['style'] = $foreach_sequence_var_614401abe4850022cf155f1d2dde8ff4_4;
$text .= '        <tr class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'style', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['style'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
            <td>
                <a href="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'latest_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['latest_node'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" title="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'latest_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['latest_node'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
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

$text .= '">';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'latest_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['latest_node'] : null;
$var3 = compiledFetchAttribute( $var2, 'name' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$strlenFunc = 'mb_strlen'; $substrFunc = 'mb_substr';
$length = 80; $seq = "..."; $trimType = "right";
                                                                  if ( 2 > 1 )
                                                                  {
                                                                      $length = '30';
                                                                  }
                                                                  if ( 2 > 2 )
                                                                  {
                                                                      $seq = $staticValues[2];
                                                                  }
                                                                  if ( 2 > 3 )
                                                                  {
                                                                      $trimType = $staticValues[3];
                                                                  }
                                                                  if ( $trimType === "middle" )
                                                                  {
                                                                      $appendedStrLen = $strlenFunc( $seq );
                                                                      if ( $length > $appendedStrLen && ( $strlenFunc( $var2 ) > $length ) )
                                                                      {
                                                                          $operatorValueLength = $strlenFunc( $var2 );
                                                                          $chop = $length - $appendedStrLen;
                                                                          $middlePos = (int)($chop / 2);
                                                                          $leftPartLength = $middlePos;
                                                                          $rightPartLength = $chop - $middlePos;
                                                                          $var1 = trim( $substrFunc( $var2, 0, $leftPartLength ) . $seq . $substrFunc( $var2, $operatorValueLength - $rightPartLength, $rightPartLength ) );
                                                                      }
                                                                      else
                                                                      {
                                                                          $var1 = $var2;
                                                                      }
                                                                  }
                                                                  else // default: trim_type === "right"
                                                                  {
                                                                      $maxLength = $length - $strlenFunc( $seq );
                                                                      if ( ( $strlenFunc( $var2 ) > $length ) && $strlenFunc( $var2 ) > $maxLength )
                                                                      {
                                                                          $var1 = trim( $substrFunc( $var2, 0, $maxLength) ) . $seq;
                                                                      }
                                                                      else
                                                                      {
                                                                          $var1 = $var2;
                                                                      }
                                                                  }
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</a>
            </td>
            <td>
                ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'latest_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['latest_node'] : null;
$var2 = compiledFetchAttribute( $var1, 'class_name' );
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

$text .= '
            </td>
            <td>
                ';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'latest_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['latest_node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'modified' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

$var = $locale->formatShortDate( $var1 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
            </td>
            <td>
            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'latest_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['latest_node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_edit' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                <a href="';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'latest_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['latest_node'] : null;
$var4 = compiledFetchAttribute( $var3, 'contentobject_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'latest_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['latest_node'] : null;
$var6 = compiledFetchAttribute( $var5, 'object' );
unset( $var5 );
$var5 = $var6;
$var6 = compiledFetchAttribute( $var5, 'default_language' );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var1 = ( 'content/edit/' . $var3 . '/f/' . $var5 );
unset( $var3, $var5 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">
                    <img src="/design/standard/images/edit.gif" width="16" height="16" alt="编辑" title="';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'latest_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['latest_node'] : null;
$var5 = compiledFetchAttribute( $var4, 'name' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = array( '%child_name' => $var4 );unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var4 = array();
foreach ( $var3 as $var5 => $var6 )
{
  if ( is_int( $var5 ) )
    $var4['%' . ( ($var5%9) + 1 )] = $var6;
  else
    $var4[$var5] = $var6;
}
$var1 = strtr( '编辑 <%child_name>。', $var4 );
unset( $var3, $var4, $var5, $var6 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
                </a>
            ';
}
else
{
$text .= '                <img src="/design/standard/images/edit-disabled.gif" alt="编辑" title="';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'child_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['child_name'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = array( '%child_name' => $var4 );unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var4 = array();
foreach ( $var3 as $var5 => $var6 )
{
  if ( is_int( $var5 ) )
    $var4['%' . ( ($var5%9) + 1 )] = $var6;
  else
    $var4[$var5] = $var6;
}
$var1 = strtr( '您没有权限编辑<%child_name>。', $var4 );
unset( $var3, $var4, $var5, $var6 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" />
            ';
}
unset( $if_cond );
// if ends

$text .= '            </td>
        </tr>
    ';
// sequence iteration
if ( ( $foreach_sequence_var_614401abe4850022cf155f1d2dde8ff4_4 = next( $foreach_sequence_array_614401abe4850022cf155f1d2dde8ff4_4 ) ) === false )
{
   reset( $foreach_sequence_array_614401abe4850022cf155f1d2dde8ff4_4 );
   $foreach_sequence_var_614401abe4850022cf155f1d2dde8ff4_4 = current( $foreach_sequence_array_614401abe4850022cf155f1d2dde8ff4_4 );
}

$fe_n_items_processed_614401abe4850022cf155f1d2dde8ff4_4++;
} // foreach
unset( $foreach_sequence_array_614401abe4850022cf155f1d2dde8ff4_4 );

unset( $foreach_sequence_var_614401abe4850022cf155f1d2dde8ff4_4 );

unset( $vars[$rootNamespace]['style'] );
$skipDelimiter = false;
if ( count( $fe_variable_stack_614401abe4850022cf155f1d2dde8ff4_4 ) ) extract( array_pop( $fe_variable_stack_614401abe4850022cf155f1d2dde8ff4_4 ) );

else
{

unset( $fe_array_614401abe4850022cf155f1d2dde8ff4_4 );

unset( $fe_array_keys_614401abe4850022cf155f1d2dde8ff4_4 );

unset( $fe_n_items_614401abe4850022cf155f1d2dde8ff4_4 );

unset( $fe_n_items_processed_614401abe4850022cf155f1d2dde8ff4_4 );

unset( $fe_i_614401abe4850022cf155f1d2dde8ff4_4 );

unset( $fe_key_614401abe4850022cf155f1d2dde8ff4_4 );

unset( $fe_val_614401abe4850022cf155f1d2dde8ff4_4 );

unset( $fe_offset_614401abe4850022cf155f1d2dde8ff4_4 );

unset( $fe_max_614401abe4850022cf155f1d2dde8ff4_4 );

unset( $fe_reverse_614401abe4850022cf155f1d2dde8ff4_4 );

unset( $fe_first_val_614401abe4850022cf155f1d2dde8ff4_4 );

unset( $fe_last_val_614401abe4850022cf155f1d2dde8ff4_4 );

unset( $fe_variable_stack_614401abe4850022cf155f1d2dde8ff4_4 );

}

// foreach ends
$text .= '</table>
';
}
else
{
$text .= '
<p>你的最近内容列表为空.</p>
';
}
unset( $if_cond );
// if ends

// undef $latest_content
$tpl->unsetLocalVariable( 'latest_content', $rootNamespace );

$cachedText = $text;
$cacheHandler_beaca3859df7c32ea32c68250e28c938->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_beaca3859df7c32ea32c68250e28c938 );
}


$setArray = $oldSetArray_6662a2961c1d16dc9bdfc1e396337b31;
$tpl->Level--;
?>
