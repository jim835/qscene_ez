<?php
// URI:       design:node/view/full.tpl
// Filename:  extension/ezwebin/design/ezwebin/override/templates/full/folder.tpl
// Timestamp: 1333174325 (Sat Mar 31 14:12:05 CST 2012)
$oldSetArray_31ad68735c6863b8158f81686f7e85ea = isset( $setArray ) ? $setArray : array();
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

$node = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "node", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["node"] : null;
if ( is_object( $node ) )
$object = $node->attribute( 'object' );
if ( isset( $object ) && is_object( $object ) )
$nod_31ad68735c6863b8158f81686f7e85ea = $object->attribute( 'data_map' );
else
$nod_31ad68735c6863b8158f81686f7e85ea = false;
unset( $node, $object );

$text .= '
<!-- START: including template: extension/ezwebin/design/ezwebin/override/templates/full/folder.tpl (design:node/view/full.tpl) -->
<p class="small">extension/ezwebin/design/ezwebin/override/templates/full/folder.tpl</p><br/>
';
// def $rss_export
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZRSSFunctionCollection(), 'exportByNode' ),
  array(     'node_id' => $var1 ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'rss_export', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'rss_export' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 26,
  ),
  1 => 
  array (
    0 => 2,
    1 => 84,
    2 => 110,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/full/folder.tpl',
) );
    $tpl->setVariable( 'rss_export', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'rss_export', $var, $rootNamespace );
}

$text .= '
<div class="border-box">
<div class="border-tl"><div class="border-tr"><div class="border-tc"></div></div></div>
<div class="border-ml"><div class="border-mr"><div class="border-mc float-break">

<div class="content-view-full">
    <div class="class-folder">

        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'rss_export', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['rss_export'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <div class="attribute-rss-icon">
            <a href="';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'rss_export', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['rss_export'] : null;
$var4 = compiledFetchAttribute( $var3, 'access_url' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/rss/feed/' . $var3 );
unset( $var3 );
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

$text .= '" title="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'rss_export', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['rss_export'] : null;
$var2 = compiledFetchAttribute( $var1, 'title' );
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

$text .= '"><img src="/extension/ezwebin/design/ezwebin/images/rss-icon.gif" alt="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'rss_export', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['rss_export'] : null;
$var2 = compiledFetchAttribute( $var1, 'title' );
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

$text .= '" /></a>
        </div>
        ';
}
unset( $if_cond );
// if ends

$text .= '
        <div class="attribute-header">
            <h1>';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'name',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 18,
    1 => 16,
    2 => 729,
  ),
  1 => 
  array (
    0 => 18,
    1 => 64,
    2 => 777,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/full/folder.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</h1>
        </div>

        ';
// if begins
$if_cond = true;
if ( $if_cond )
{
$text .= '            ';
// if begins
unset( $if_cond );
$if_cond = $nod_31ad68735c6863b8158f81686f7e85ea;
if ( !$if_cond )
{
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'object' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
}
if ( !isset( $if_cond['short_description'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$if_cond['short_description'] does not exist, cannot fetch the value." );
    $if_cond = null;
}
else
    $if_cond = $if_cond['short_description'];
if ( !is_object( $if_cond ) )
{
    $if_cond = null;
}
else if ( $if_cond->hasAttribute( "has_content" ) )
{
    $if_cond = $if_cond->attribute( "has_content" );
}
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                <div class="attribute-short">
                    ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'short_description',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 24,
    1 => 20,
    2 => 1020,
  ),
  1 => 
  array (
    0 => 24,
    1 => 81,
    2 => 1081,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/full/folder.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                </div>
            ';
}
unset( $if_cond );
// if ends

$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '
        ';
// if begins
unset( $if_cond );
$if_cond = $nod_31ad68735c6863b8158f81686f7e85ea;
if ( !$if_cond )
{
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'object' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
}
if ( !isset( $if_cond['description'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$if_cond['description'] does not exist, cannot fetch the value." );
    $if_cond = null;
}
else
    $if_cond = $if_cond['description'];
if ( !is_object( $if_cond ) )
{
    $if_cond = null;
}
else if ( $if_cond->hasAttribute( "has_content" ) )
{
    $if_cond = $if_cond->attribute( "has_content" );
}
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <div class="attribute-long">
                ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'description',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 31,
    1 => 16,
    2 => 1256,
  ),
  1 => 
  array (
    0 => 31,
    1 => 71,
    2 => 1311,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/full/folder.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '            </div>
        ';
}
unset( $if_cond );
// if ends

$text .= '
        ';
// if begins
unset( $if_cond );
$if_cond = $nod_31ad68735c6863b8158f81686f7e85ea;
if ( !$if_cond )
{
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'object' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'data_map' );
unset( $if_cond );
$if_cond = $if_cond1;
}
if ( !isset( $if_cond['show_children'] ) )
{
    $tpl->error( 'eZTemplateCompiler', "PHP variable \$if_cond['show_children'] does not exist, cannot fetch the value." );
    $if_cond = null;
}
else
    $if_cond = $if_cond['show_children'];
if ( !is_object( $if_cond ) )
{
    $if_cond = null;
}
else if ( $if_cond->hasAttribute( "data_int" ) )
{
    $if_cond = $if_cond->attribute( "data_int" );
}
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
// def $page_limit
if ( $tpl->hasVariable( 'page_limit', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'page_limit' is already defined.", array (
  0 => 
  array (
    0 => 36,
    1 => 12,
    2 => 1418,
  ),
  1 => 
  array (
    0 => 39,
    1 => 37,
    2 => 1607,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/full/folder.tpl',
) );
    $tpl->setVariable( 'page_limit', 10, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'page_limit', 10, $rootNamespace );
}

// def $classes
if ( $tpl->hasVariable( 'classes', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'classes' is already defined.", array (
  0 => 
  array (
    0 => 36,
    1 => 12,
    2 => 1418,
  ),
  1 => 
  array (
    0 => 39,
    1 => 37,
    2 => 1607,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/full/folder.tpl',
) );
    $tpl->setVariable( 'classes', array (
  0 => 'infobox',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'classes', array (
  0 => 'infobox',
), $rootNamespace );
}

// def $children
if ( $tpl->hasVariable( 'children', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'children' is already defined.", array (
  0 => 
  array (
    0 => 36,
    1 => 12,
    2 => 1418,
  ),
  1 => 
  array (
    0 => 39,
    1 => 37,
    2 => 1607,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/full/folder.tpl',
) );
    $tpl->setVariable( 'children', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'children', array (
), $rootNamespace );
}

// def $children_count
if ( $tpl->hasVariable( 'children_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'children_count' is already defined.", array (
  0 => 
  array (
    0 => 36,
    1 => 12,
    2 => 1418,
  ),
  1 => 
  array (
    0 => 39,
    1 => 37,
    2 => 1607,
  ),
  2 => 'extension/ezwebin/design/ezwebin/override/templates/full/folder.tpl',
) );
    $tpl->setVariable( 'children_count', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'children_count', '', $rootNamespace );
}

$text .= '                 
            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'depth' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) <= ( '3' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['classes'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = array_merge( $var1, array( "folder",
       "link" ) );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'classes', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['classes'] = $var;
    unset( $var );
}
$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '
            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['classes'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTreeCount' ),
  array(     'parent_node_id' => $var1,
    'only_translated' => false,
    'language' => false,
    'class_filter_type' => "exclude",
    'class_filter_array' => $var2,
    'attribute_filter' => false,
    'depth' => 1,
    'depth_operator' => "le",
    'ignore_visibility' => false,
    'limitation' => null,
    'main_node_only' => false,
    'extended_attribute_filter' => false,
    'objectname_filter' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'children_count', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['children_count'] = $var;
    unset( $var );
}
$text .= '
            <div class="content-view-children">
                ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'children_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['children_count'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_2251f4e62c03124ccc71a1da3167fd9a_1 ) ) $fe_variable_stack_2251f4e62c03124ccc71a1da3167fd9a_1 = array();
$fe_variable_stack_2251f4e62c03124ccc71a1da3167fd9a_1[] = compact( 'fe_array_2251f4e62c03124ccc71a1da3167fd9a_1', 'fe_array_keys_2251f4e62c03124ccc71a1da3167fd9a_1', 'fe_n_items_2251f4e62c03124ccc71a1da3167fd9a_1', 'fe_n_items_processed_2251f4e62c03124ccc71a1da3167fd9a_1', 'fe_i_2251f4e62c03124ccc71a1da3167fd9a_1', 'fe_key_2251f4e62c03124ccc71a1da3167fd9a_1', 'fe_val_2251f4e62c03124ccc71a1da3167fd9a_1', 'fe_offset_2251f4e62c03124ccc71a1da3167fd9a_1', 'fe_max_2251f4e62c03124ccc71a1da3167fd9a_1', 'fe_reverse_2251f4e62c03124ccc71a1da3167fd9a_1', 'fe_first_val_2251f4e62c03124ccc71a1da3167fd9a_1', 'fe_last_val_2251f4e62c03124ccc71a1da3167fd9a_1' );
unset( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_1 );
unset( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_11 );
unset( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_11 );
$fe_array_2251f4e62c03124ccc71a1da3167fd9a_11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$fe_array_2251f4e62c03124ccc71a1da3167fd9a_12 = compiledFetchAttribute( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_11, 'node_id' );
unset( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_11 );
$fe_array_2251f4e62c03124ccc71a1da3167fd9a_11 = $fe_array_2251f4e62c03124ccc71a1da3167fd9a_12;
if (! isset( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_11 ) ) $fe_array_2251f4e62c03124ccc71a1da3167fd9a_11 = NULL;
while ( is_object( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_11 ) and method_exists( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_11, 'templateValue' ) )
    $fe_array_2251f4e62c03124ccc71a1da3167fd9a_11 = $fe_array_2251f4e62c03124ccc71a1da3167fd9a_11->templateValue();
while ( is_object( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_11 ) and method_exists( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_11, 'templateValue' ) )
    $fe_array_2251f4e62c03124ccc71a1da3167fd9a_11 = $fe_array_2251f4e62c03124ccc71a1da3167fd9a_11->templateValue();
unset( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_12 );
unset( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_12 );
$fe_array_2251f4e62c03124ccc71a1da3167fd9a_12 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$fe_array_2251f4e62c03124ccc71a1da3167fd9a_13 = compiledFetchAttribute( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_12, 'sort_array' );
unset( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_12 );
$fe_array_2251f4e62c03124ccc71a1da3167fd9a_12 = $fe_array_2251f4e62c03124ccc71a1da3167fd9a_13;
if (! isset( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_12 ) ) $fe_array_2251f4e62c03124ccc71a1da3167fd9a_12 = NULL;
while ( is_object( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_12 ) and method_exists( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_12, 'templateValue' ) )
    $fe_array_2251f4e62c03124ccc71a1da3167fd9a_12 = $fe_array_2251f4e62c03124ccc71a1da3167fd9a_12->templateValue();
while ( is_object( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_12 ) and method_exists( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_12, 'templateValue' ) )
    $fe_array_2251f4e62c03124ccc71a1da3167fd9a_12 = $fe_array_2251f4e62c03124ccc71a1da3167fd9a_12->templateValue();
unset( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_13 );
unset( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_13 );
$fe_array_2251f4e62c03124ccc71a1da3167fd9a_13 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$fe_array_2251f4e62c03124ccc71a1da3167fd9a_14 = compiledFetchAttribute( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_13, 'offset' );
unset( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_13 );
$fe_array_2251f4e62c03124ccc71a1da3167fd9a_13 = $fe_array_2251f4e62c03124ccc71a1da3167fd9a_14;
if (! isset( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_13 ) ) $fe_array_2251f4e62c03124ccc71a1da3167fd9a_13 = NULL;
while ( is_object( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_13 ) and method_exists( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_13, 'templateValue' ) )
    $fe_array_2251f4e62c03124ccc71a1da3167fd9a_13 = $fe_array_2251f4e62c03124ccc71a1da3167fd9a_13->templateValue();
while ( is_object( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_13 ) and method_exists( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_13, 'templateValue' ) )
    $fe_array_2251f4e62c03124ccc71a1da3167fd9a_13 = $fe_array_2251f4e62c03124ccc71a1da3167fd9a_13->templateValue();
unset( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_14 );
unset( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_14 );
$fe_array_2251f4e62c03124ccc71a1da3167fd9a_14 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['page_limit'] : null;
if (! isset( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_14 ) ) $fe_array_2251f4e62c03124ccc71a1da3167fd9a_14 = NULL;
while ( is_object( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_14 ) and method_exists( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_14, 'templateValue' ) )
    $fe_array_2251f4e62c03124ccc71a1da3167fd9a_14 = $fe_array_2251f4e62c03124ccc71a1da3167fd9a_14->templateValue();
while ( is_object( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_14 ) and method_exists( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_14, 'templateValue' ) )
    $fe_array_2251f4e62c03124ccc71a1da3167fd9a_14 = $fe_array_2251f4e62c03124ccc71a1da3167fd9a_14->templateValue();
unset( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_15 );
unset( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_15 );
$fe_array_2251f4e62c03124ccc71a1da3167fd9a_15 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['classes'] : null;
if (! isset( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_15 ) ) $fe_array_2251f4e62c03124ccc71a1da3167fd9a_15 = NULL;
while ( is_object( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_15 ) and method_exists( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_15, 'templateValue' ) )
    $fe_array_2251f4e62c03124ccc71a1da3167fd9a_15 = $fe_array_2251f4e62c03124ccc71a1da3167fd9a_15->templateValue();
while ( is_object( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_15 ) and method_exists( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_15, 'templateValue' ) )
    $fe_array_2251f4e62c03124ccc71a1da3167fd9a_15 = $fe_array_2251f4e62c03124ccc71a1da3167fd9a_15->templateValue();
$fe_array_2251f4e62c03124ccc71a1da3167fd9a_1 = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => $fe_array_2251f4e62c03124ccc71a1da3167fd9a_11,
    'sort_by' => $fe_array_2251f4e62c03124ccc71a1da3167fd9a_12,
    'only_translated' => false,
    'language' => false,
    'offset' => $fe_array_2251f4e62c03124ccc71a1da3167fd9a_13,
    'limit' => $fe_array_2251f4e62c03124ccc71a1da3167fd9a_14,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => "exclude",
    'class_filter_array' => $fe_array_2251f4e62c03124ccc71a1da3167fd9a_15,
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) );
$fe_array_2251f4e62c03124ccc71a1da3167fd9a_1 = isset( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_1['result'] ) ? $fe_array_2251f4e62c03124ccc71a1da3167fd9a_1['result'] : null;
unset( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_11, $fe_array_2251f4e62c03124ccc71a1da3167fd9a_12, $fe_array_2251f4e62c03124ccc71a1da3167fd9a_13, $fe_array_2251f4e62c03124ccc71a1da3167fd9a_14, $fe_array_2251f4e62c03124ccc71a1da3167fd9a_15 );
if (! isset( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_1 ) ) $fe_array_2251f4e62c03124ccc71a1da3167fd9a_1 = NULL;
while ( is_object( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_1 ) and method_exists( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_1, 'templateValue' ) )
    $fe_array_2251f4e62c03124ccc71a1da3167fd9a_1 = $fe_array_2251f4e62c03124ccc71a1da3167fd9a_1->templateValue();

$fe_array_keys_2251f4e62c03124ccc71a1da3167fd9a_1 = is_array( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_1 ) ? array_keys( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_1 ) : array();
$fe_n_items_2251f4e62c03124ccc71a1da3167fd9a_1 = count( $fe_array_keys_2251f4e62c03124ccc71a1da3167fd9a_1 );
$fe_n_items_processed_2251f4e62c03124ccc71a1da3167fd9a_1 = 0;
$fe_offset_2251f4e62c03124ccc71a1da3167fd9a_1 = 0;
$fe_max_2251f4e62c03124ccc71a1da3167fd9a_1 = $fe_n_items_2251f4e62c03124ccc71a1da3167fd9a_1 - $fe_offset_2251f4e62c03124ccc71a1da3167fd9a_1;
$fe_reverse_2251f4e62c03124ccc71a1da3167fd9a_1 = false;
if ( $fe_offset_2251f4e62c03124ccc71a1da3167fd9a_1 < 0 || $fe_offset_2251f4e62c03124ccc71a1da3167fd9a_1 >= $fe_n_items_2251f4e62c03124ccc71a1da3167fd9a_1 )
{
    $fe_offset_2251f4e62c03124ccc71a1da3167fd9a_1 = ( $fe_offset_2251f4e62c03124ccc71a1da3167fd9a_1 < 0 ) ? 0 : $fe_n_items_2251f4e62c03124ccc71a1da3167fd9a_1;
    if ( $fe_n_items_2251f4e62c03124ccc71a1da3167fd9a_1 || $fe_offset_2251f4e62c03124ccc71a1da3167fd9a_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_2251f4e62c03124ccc71a1da3167fd9a_1'. Array count: $fe_n_items_2251f4e62c03124ccc71a1da3167fd9a_1");   
}
}
if ( $fe_max_2251f4e62c03124ccc71a1da3167fd9a_1 < 0 || $fe_offset_2251f4e62c03124ccc71a1da3167fd9a_1 + $fe_max_2251f4e62c03124ccc71a1da3167fd9a_1 > $fe_n_items_2251f4e62c03124ccc71a1da3167fd9a_1 )
{
    if ( $fe_max_2251f4e62c03124ccc71a1da3167fd9a_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_2251f4e62c03124ccc71a1da3167fd9a_1");
    $fe_max_2251f4e62c03124ccc71a1da3167fd9a_1 = $fe_n_items_2251f4e62c03124ccc71a1da3167fd9a_1 - $fe_offset_2251f4e62c03124ccc71a1da3167fd9a_1;
}
if ( $fe_reverse_2251f4e62c03124ccc71a1da3167fd9a_1 )
{
    $fe_first_val_2251f4e62c03124ccc71a1da3167fd9a_1 = $fe_n_items_2251f4e62c03124ccc71a1da3167fd9a_1 - 1 - $fe_offset_2251f4e62c03124ccc71a1da3167fd9a_1;
    $fe_last_val_2251f4e62c03124ccc71a1da3167fd9a_1  = 0;
}
else
{
    $fe_first_val_2251f4e62c03124ccc71a1da3167fd9a_1 = $fe_offset_2251f4e62c03124ccc71a1da3167fd9a_1;
    $fe_last_val_2251f4e62c03124ccc71a1da3167fd9a_1  = $fe_n_items_2251f4e62c03124ccc71a1da3167fd9a_1 - 1;
}
// foreach
for ( $fe_i_2251f4e62c03124ccc71a1da3167fd9a_1 = $fe_first_val_2251f4e62c03124ccc71a1da3167fd9a_1; $fe_n_items_processed_2251f4e62c03124ccc71a1da3167fd9a_1 < $fe_max_2251f4e62c03124ccc71a1da3167fd9a_1 && ( $fe_reverse_2251f4e62c03124ccc71a1da3167fd9a_1 ? $fe_i_2251f4e62c03124ccc71a1da3167fd9a_1 >= $fe_last_val_2251f4e62c03124ccc71a1da3167fd9a_1 : $fe_i_2251f4e62c03124ccc71a1da3167fd9a_1 <= $fe_last_val_2251f4e62c03124ccc71a1da3167fd9a_1 ); $fe_reverse_2251f4e62c03124ccc71a1da3167fd9a_1 ? $fe_i_2251f4e62c03124ccc71a1da3167fd9a_1-- : $fe_i_2251f4e62c03124ccc71a1da3167fd9a_1++ )
{
$fe_key_2251f4e62c03124ccc71a1da3167fd9a_1 = $fe_array_keys_2251f4e62c03124ccc71a1da3167fd9a_1[$fe_i_2251f4e62c03124ccc71a1da3167fd9a_1];
$fe_val_2251f4e62c03124ccc71a1da3167fd9a_1 = $fe_array_2251f4e62c03124ccc71a1da3167fd9a_1[$fe_key_2251f4e62c03124ccc71a1da3167fd9a_1];
$vars[$rootNamespace]['child'] = $fe_val_2251f4e62c03124ccc71a1da3167fd9a_1;
$text .= '                        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'child', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['child'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
$vars[$namespace]['node'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( 'design' );
    $dKeys = $resH->keys();
}
if ( !isset( $dKeysStack ) )
{
    $dKeysStack = array();
}
$dKeysStack[] = $dKeys;
unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'contentobject_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["object"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'contentclass_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'section_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'match_ingroup_id_list' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_group"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_id_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'state_identifier_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent_node_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'depth' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["depth"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'url_alias' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["url_alias"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_node_remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'node', $vars[$namespace] ) ) ? $vars[$namespace]['node'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'parent' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'object' );
unset( $dKey );
$dKey = $dKey1;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["parent_object_remote_id"] = $dKey;
unset( $dKey );

if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/article-7a133e92d5e128deef1a2e2a274688b4.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/article.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/article-7a133e92d5e128deef1a2e2a274688b4.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "geo_article", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "geo_article" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/geo_article-db63b9376fe2f92406887696a87755ea.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/geo_article.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/geo_article-db63b9376fe2f92406887696a87755ea.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/geo_article.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_mainpage", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_mainpage" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/article_mainpage-7c20fad43fedec375b69bcb975168dea.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/article_mainpage.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/article_mainpage-7c20fad43fedec375b69bcb975168dea.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/article_mainpage.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "article_subpage", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "article_subpage" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/article_subpage-093b7ef1c897201fa9bdab08c1554ca4.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/article_subpage.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/article_subpage-093b7ef1c897201fa9bdab08c1554ca4.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/article_subpage.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "banner", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "banner" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/banner-9f51f18ab07a41f7c8f21da116cdd54c.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/banner.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/banner-9f51f18ab07a41f7c8f21da116cdd54c.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/banner.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "blog", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "blog" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/blog-d51aa33f31b34c54fc8bbd32ffd9ac32.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/blog.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/blog-d51aa33f31b34c54fc8bbd32ffd9ac32.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/blog.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "blog_post", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "blog_post" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/blog_post-9aa60759a2449d6d322873c3020025cc.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/blog_post.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/blog_post-9aa60759a2449d6d322873c3020025cc.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/blog_post.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "comment", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "comment" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/comment-cc4185957ff9ea417d5d0c2147e6de05.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/comment.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/comment-cc4185957ff9ea417d5d0c2147e6de05.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/comment.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "documentation_page", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "documentation_page" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/documentation_page-c2e5c0eb59f1e210f729844ed391023a.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/documentation_page.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/documentation_page-c2e5c0eb59f1e210f729844ed391023a.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/documentation_page.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "event_calendar", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "event_calendar" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/event_calendar-d9c9c403485d66a0b3e4bd6ff480f882.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/event_calendar.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/event_calendar-d9c9c403485d66a0b3e4bd6ff480f882.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/event_calendar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "event", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "event" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/event-78c4d2298a1c4c8be874dc362c6deccf.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/event.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/event-78c4d2298a1c4c8be874dc362c6deccf.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/event.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "feedback_form", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "feedback_form" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/feedback_form-35f7d558445a58ba1c148d19a52220a7.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/feedback_form.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/feedback_form-35f7d558445a58ba1c148d19a52220a7.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/feedback_form.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "file", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "file" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/file-01fe767db0dab66e83f18b5736fbcd5a.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/file.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/file-01fe767db0dab66e83f18b5736fbcd5a.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/file.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "flash", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "flash" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/flash-a1bca8825655ab832c4713673f0a05cf.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/flash.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/flash-a1bca8825655ab832c4713673f0a05cf.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/flash.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "folder", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "folder" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/folder-7460b711afe54a51db5b771fddb5fe8d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/folder.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/folder-7460b711afe54a51db5b771fddb5fe8d.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/folder.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/forum-54e7ecf7d051c238270b9165f317eed1.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/forum.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/forum-54e7ecf7d051c238270b9165f317eed1.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/forum.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum_reply", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum_reply" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/forum_reply-7a3f46c34677313968937b9d570ce309.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_reply.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/forum_reply-7a3f46c34677313968937b9d570ce309.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_reply.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forum_topic", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forum_topic" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/forum_topic-5a4ad5d8a71d90948d63bdbb9d6725d3.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_topic.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/forum_topic-5a4ad5d8a71d90948d63bdbb9d6725d3.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/forum_topic.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "forums", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "forums" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/forums-415c4b1d5e0ae73d411a59157cebcb59.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/forums.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/forums-415c4b1d5e0ae73d411a59157cebcb59.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/forums.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "gallery", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "gallery" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/gallery-a5e00016918d18c27b0ab514553d912c.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/gallery.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/gallery-a5e00016918d18c27b0ab514553d912c.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/gallery.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "image", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "image" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/image-a2eaa47233b117fd009628e70cda9e38.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/image.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/image-a2eaa47233b117fd009628e70cda9e38.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/image.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "infobox", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "infobox" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/infobox-9aae8ace8f20a667c7168b526b763436.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/infobox.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/infobox-9aae8ace8f20a667c7168b526b763436.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/infobox.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "link", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "link" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/link-0c4f06d1e1b5b67c52856289d3b55224.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/link.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/link-0c4f06d1e1b5b67c52856289d3b55224.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/link.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "multicalendar", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "multicalendar" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/multicalendar-fc5b4d6720bde74bd2b509f79c1e836d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/multicalendar.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/multicalendar-fc5b4d6720bde74bd2b509f79c1e836d.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/multicalendar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "poll", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "poll" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/poll-bf0c86f27959c5c31f9c119652237601.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/poll.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/poll-bf0c86f27959c5c31f9c119652237601.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/poll.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "product", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "product" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/product-aabd6eeca24279503ecb6b8307cca117.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/product.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/product-aabd6eeca24279503ecb6b8307cca117.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/product.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "silverlight", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "silverlight" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/silverlight-ae80cdc6830531fbc1115f4b9098fbff.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/silverlight.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/silverlight-ae80cdc6830531fbc1115f4b9098fbff.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/silverlight.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "quicktime", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "quicktime" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/quicktime-da2f63645c0388cfd9177c4c21687929.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/quicktime.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/quicktime-da2f63645c0388cfd9177c4c21687929.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/quicktime.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "real_video", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "real_video" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/real_video-ad24146dddb32cf55508374e5b5883b7.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/real_video.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/real_video-ad24146dddb32cf55508374e5b5883b7.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/real_video.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else  if ( isset( $dKeys["class_identifier"] ) and ( is_array( $dKeys["class_identifier"] ) ? in_array( "windows_media", $dKeys["class_identifier"] ) : $dKeys["class_identifier"] == "windows_media" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/windows_media-0d05008510810c89ff9f8389df094996.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/override/templates/line/windows_media.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/windows_media-0d05008510810c89ff9f8389df094996.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/override/templates/line/windows_media.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else 
{
$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/line-fd44d94ab2848e9d96ca3e1134cd85bc.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwebin/design/ezwebin/templates/node/view/line.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/line-fd44d94ab2848e9d96ca3e1134cd85bc.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'NodeView' : ( $currentNamespace . ':' . 'NodeView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'extension/ezwebin/design/ezwebin/templates/node/view/line.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "NodeView";
else
    $namespace .= ':NodeView';
unset( $vars[$namespace]['node'] );
$text .= '                    ';
$fe_n_items_processed_2251f4e62c03124ccc71a1da3167fd9a_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_2251f4e62c03124ccc71a1da3167fd9a_1 ) ) extract( array_pop( $fe_variable_stack_2251f4e62c03124ccc71a1da3167fd9a_1 ) );

else
{

unset( $fe_array_2251f4e62c03124ccc71a1da3167fd9a_1 );

unset( $fe_array_keys_2251f4e62c03124ccc71a1da3167fd9a_1 );

unset( $fe_n_items_2251f4e62c03124ccc71a1da3167fd9a_1 );

unset( $fe_n_items_processed_2251f4e62c03124ccc71a1da3167fd9a_1 );

unset( $fe_i_2251f4e62c03124ccc71a1da3167fd9a_1 );

unset( $fe_key_2251f4e62c03124ccc71a1da3167fd9a_1 );

unset( $fe_val_2251f4e62c03124ccc71a1da3167fd9a_1 );

unset( $fe_offset_2251f4e62c03124ccc71a1da3167fd9a_1 );

unset( $fe_max_2251f4e62c03124ccc71a1da3167fd9a_1 );

unset( $fe_reverse_2251f4e62c03124ccc71a1da3167fd9a_1 );

unset( $fe_first_val_2251f4e62c03124ccc71a1da3167fd9a_1 );

unset( $fe_last_val_2251f4e62c03124ccc71a1da3167fd9a_1 );

unset( $fe_variable_stack_2251f4e62c03124ccc71a1da3167fd9a_1 );

}

// foreach ends
$text .= '                ';
}
unset( $if_cond );
// if ends

$text .= '            </div>

            ';
$oldRestoreIncludeArray_7ba28e408e3dba8d602334c3c90c11aa = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $namespace ) and isset( $vars[$namespace]['page_uri'] ) )
    $restoreIncludeArray[] = array( $namespace, 'page_uri', $vars[$namespace]['page_uri'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['page_uri'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'page_uri', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'url_alias' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['page_uri'] = $var;
unset( $var );
if ( isset( $namespace ) and isset( $vars[$namespace]['item_count'] ) )
    $restoreIncludeArray[] = array( $namespace, 'item_count', $vars[$namespace]['item_count'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['item_count'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'item_count', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'children_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['children_count'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['item_count'] = $var;
unset( $var );
if ( isset( $namespace ) and isset( $vars[$namespace]['view_parameters'] ) )
    $restoreIncludeArray[] = array( $namespace, 'view_parameters', $vars[$namespace]['view_parameters'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['view_parameters'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'view_parameters', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['view_parameters'] = $var;
unset( $var );
if ( isset( $namespace ) and isset( $vars[$namespace]['item_limit'] ) )
    $restoreIncludeArray[] = array( $namespace, 'item_limit', $vars[$namespace]['item_limit'] );
elseif ( !isset( $vars[( isset( $namespace ) ? $namespace : '' )]['item_limit'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $namespace ) ? $namespace : '' ), 'item_limit', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['page_limit'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "navigator";
else
    $namespace .= ':navigator';
$vars[$namespace]['item_limit'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezwebin_site/cache/template/compiled/google-b5b64b12dd58b8eeb2e327e30ca4d430.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'navigator' : ( $currentNamespace . ':' . 'navigator' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/navigator/google.tpl' );
include( '' . 'var/ezwebin_site/cache/template/compiled/google-b5b64b12dd58b8eeb2e327e30ca4d430.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'navigator' : ( $currentNamespace . ':' . 'navigator' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/standard/templates/navigator/google.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_7ba28e408e3dba8d602334c3c90c11aa;

$text .= '
        ';
}
unset( $if_cond );
// if ends

$text .= '    </div>
</div>

</div></div></div>
<div class="border-bl"><div class="border-br"><div class="border-bc"></div></div></div>
</div>
<!-- STOP: including template: extension/ezwebin/design/ezwebin/override/templates/full/folder.tpl (design:node/view/full.tpl) -->
';

$setArray = $oldSetArray_31ad68735c6863b8158f81686f7e85ea;
$tpl->Level--;
?>
