<?php
// URI:       design/admin2/templates/popupmenu/popup_class_menu.tpl
// Filename:  design/admin2/templates/popupmenu/popup_class_menu.tpl
// Timestamp: 1331119538 (Wed Mar 7 19:25:38 CST 2012)
$oldSetArray_f8be3e686df4143a9248938b83d2d8b4 = isset( $setArray ) ? $setArray : array();
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

$text .= '<!-- Class popup menu -->
<script type="text/javascript">
menuArray[\'ClassMenu\'] = { \'depth\': 0, \'headerID\': \'class-header\' };
menuArray[\'ClassMenu\'][\'elements\'] = {};
menuArray[\'ClassMenu\'][\'elements\'][\'class-view\'] = { \'url\': "/index.php/ezwebin_site_admin/class/view/%classID%" };
menuArray[\'ClassMenu\'][\'elements\'][\'class-edit\'] = { \'url\': "/index.php/ezwebin_site_admin/class/edit/%classID%" };
menuArray[\'ClassMenu\'][\'elements\'][\'view-cache-delete\'] = { \'url\': "/index.php/ezwebin_site_admin/%currentURL%" };
menuArray[\'ClassMenu\'][\'elements\'][\'recursive-view-cache-delete\'] = { \'url\': "/index.php/ezwebin_site_admin/%currentURL%" };
menuArray[\'ClassMenu\'][\'elements\'][\'class-createnodefeed\'] = { \'url\': "/index.php/ezwebin_site_admin/content/view/full/%nodeID%" };
menuArray[\'ClassMenu\'][\'elements\'][\'class-createnodefeed\'][\'disabled_class\'] = \'menu-item-disabled\';
menuArray[\'ClassMenu\'][\'elements\'][\'class-createnodefeed\'][\'disabled_for\'] = { \'class-createnodefeed\': \'yes\' };
menuArray[\'ClassMenu\'][\'elements\'][\'class-removenodefeed\'] = { \'url\': "/index.php/ezwebin_site_admin/content/view/full/%nodeID%" };
menuArray[\'ClassMenu\'][\'elements\'][\'class-removenodefeed\'][\'disabled_class\'] = \'menu-item-disabled\';
menuArray[\'ClassMenu\'][\'elements\'][\'class-removenodefeed\'][\'disabled_for\'] = { \'class-removenodefeed\': \'yes\' };
menuArray[\'ClassMenu\'][\'elements\'][\'class-history\'] = { \'url\': "/index.php/ezwebin_site_admin/content/history/%objectID%" };
menuArray[\'ClassMenu\'][\'elements\'][\'url-alias\'] = { \'url\': "/index.php/ezwebin_site_admin/content/urlalias/%nodeID%" };
</script>

<div class="popupmenu" id="ClassMenu">
    <div class="popupmenuheader"><h3 id="class-header">XXX</h3>

        <div class="break"></div>
    </div>
    <a id="class-view" href="#" onmouseover="ezpopmenu_mouseOver( \'ClassMenu\' )">查看类</a>';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'multilingual_site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['multilingual_site'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <a id="class-edit-in" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'EditClassSubmenu\', \'class-edit-in\' ); return false;">编辑类 </a>';
}
else
{
$text .= '    <a id="class-edit" href="#" onmouseover="ezpopmenu_mouseOver( \'ClassMenu\' )">编辑类</a>';
}
unset( $if_cond );
// if ends

$text .= '
    <hr />
    <a id="view-cache-delete" href="#" onmouseover="ezpopmenu_mouseOver( \'ClassMenu\' )" onclick="ezpopmenu_submitForm( \'menu-form-view-cache-delete\' ); return false;">删除视图缓存</a>
<!--
    <a id="template-cache-delete" href="#" onmouseover="ezpopmenu_mouseOver( \'ClassMenu\' )">删除模板缓存</a>
-->
    <a id="recursive-view-cache-delete" href="#" onmouseover="ezpopmenu_mouseOver( \'ClassMenu\' )" onclick="ezpopmenu_submitForm( \'menu-form-recursive-view-cache-delete\' ); return false;">在此删除视图缓存</a>
    <hr />
    <a id="class-createnodefeed" href="#" onmouseover="ezpopmenu_mouseOver( \'ClassMenu\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-createnodefeed\' ); return false;">创建RSS/ATOM订阅</a>
    <a id="class-removenodefeed" href="#" onmouseover="ezpopmenu_mouseOver( \'ClassMenu\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-removenodefeed\' ); return false;">移除RSS/ATOM订阅</a>
    <hr />
    <a id="override-view" class="more" href="#" onmouseover="ezpopmenu_hide(\'OverrideByClassSiteAccess\'); ezpopmenu_hide(\'OverrideByNodeSiteAccess\'); ezpopmenu_showSubLevel( event, \'OverrideSiteAccess\', \'override-view\' ); return false;">模板覆盖</a>
    <a id="override-by-class-view" class="more" href="#" onmouseover="ezpopmenu_hide(\'OverrideSiteAccess\'); ezpopmenu_hide(\'OverrideByNodeSiteAccess\'); ezpopmenu_showSubLevel( event, \'OverrideByClassSiteAccess\', \'override-by-class-view\' ); return false;">新建类覆盖</a>
    <a id="override-by-node-view" class="more" href="#" onmouseover="ezpopmenu_hide(\'OverrideSiteAccess\'); ezpopmenu_hide(\'OverrideByClassSiteAccess\'); ezpopmenu_showSubLevel( event, \'OverrideByNodeSiteAccess\', \'override-by-node-view\' ); return false;">新建节点覆盖</a>
    <hr />
    <a id="class-history" href="#" onmouseover="ezpopmenu_mouseOver( \'ClassMenu\' )">管理版本</a>
    <a id="url-alias" href="#" onmouseover="ezpopmenu_mouseOver( \'ClassMenu\' )">管理URL别名</a>
    
    
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_fbab56ae5172948461cfdfbfb5485db5_19 ) ) $fe_variable_stack_fbab56ae5172948461cfdfbfb5485db5_19 = array();
$fe_variable_stack_fbab56ae5172948461cfdfbfb5485db5_19[] = compact( 'fe_array_fbab56ae5172948461cfdfbfb5485db5_19', 'fe_array_keys_fbab56ae5172948461cfdfbfb5485db5_19', 'fe_n_items_fbab56ae5172948461cfdfbfb5485db5_19', 'fe_n_items_processed_fbab56ae5172948461cfdfbfb5485db5_19', 'fe_i_fbab56ae5172948461cfdfbfb5485db5_19', 'fe_key_fbab56ae5172948461cfdfbfb5485db5_19', 'fe_val_fbab56ae5172948461cfdfbfb5485db5_19', 'fe_offset_fbab56ae5172948461cfdfbfb5485db5_19', 'fe_max_fbab56ae5172948461cfdfbfb5485db5_19', 'fe_reverse_fbab56ae5172948461cfdfbfb5485db5_19', 'fe_first_val_fbab56ae5172948461cfdfbfb5485db5_19', 'fe_last_val_fbab56ae5172948461cfdfbfb5485db5_19' );
$fe_array_fbab56ae5172948461cfdfbfb5485db5_19 = array (
);
$fe_array_keys_fbab56ae5172948461cfdfbfb5485db5_19 = is_array( $fe_array_fbab56ae5172948461cfdfbfb5485db5_19 ) ? array_keys( $fe_array_fbab56ae5172948461cfdfbfb5485db5_19 ) : array();
$fe_n_items_fbab56ae5172948461cfdfbfb5485db5_19 = count( $fe_array_keys_fbab56ae5172948461cfdfbfb5485db5_19 );
$fe_n_items_processed_fbab56ae5172948461cfdfbfb5485db5_19 = 0;
$fe_offset_fbab56ae5172948461cfdfbfb5485db5_19 = 0;
$fe_max_fbab56ae5172948461cfdfbfb5485db5_19 = $fe_n_items_fbab56ae5172948461cfdfbfb5485db5_19 - $fe_offset_fbab56ae5172948461cfdfbfb5485db5_19;
$fe_reverse_fbab56ae5172948461cfdfbfb5485db5_19 = false;
if ( $fe_offset_fbab56ae5172948461cfdfbfb5485db5_19 < 0 || $fe_offset_fbab56ae5172948461cfdfbfb5485db5_19 >= $fe_n_items_fbab56ae5172948461cfdfbfb5485db5_19 )
{
    $fe_offset_fbab56ae5172948461cfdfbfb5485db5_19 = ( $fe_offset_fbab56ae5172948461cfdfbfb5485db5_19 < 0 ) ? 0 : $fe_n_items_fbab56ae5172948461cfdfbfb5485db5_19;
    if ( $fe_n_items_fbab56ae5172948461cfdfbfb5485db5_19 || $fe_offset_fbab56ae5172948461cfdfbfb5485db5_19 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_fbab56ae5172948461cfdfbfb5485db5_19'. Array count: $fe_n_items_fbab56ae5172948461cfdfbfb5485db5_19");   
}
}
if ( $fe_max_fbab56ae5172948461cfdfbfb5485db5_19 < 0 || $fe_offset_fbab56ae5172948461cfdfbfb5485db5_19 + $fe_max_fbab56ae5172948461cfdfbfb5485db5_19 > $fe_n_items_fbab56ae5172948461cfdfbfb5485db5_19 )
{
    if ( $fe_max_fbab56ae5172948461cfdfbfb5485db5_19 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_fbab56ae5172948461cfdfbfb5485db5_19");
    $fe_max_fbab56ae5172948461cfdfbfb5485db5_19 = $fe_n_items_fbab56ae5172948461cfdfbfb5485db5_19 - $fe_offset_fbab56ae5172948461cfdfbfb5485db5_19;
}
if ( $fe_reverse_fbab56ae5172948461cfdfbfb5485db5_19 )
{
    $fe_first_val_fbab56ae5172948461cfdfbfb5485db5_19 = $fe_n_items_fbab56ae5172948461cfdfbfb5485db5_19 - 1 - $fe_offset_fbab56ae5172948461cfdfbfb5485db5_19;
    $fe_last_val_fbab56ae5172948461cfdfbfb5485db5_19  = 0;
}
else
{
    $fe_first_val_fbab56ae5172948461cfdfbfb5485db5_19 = $fe_offset_fbab56ae5172948461cfdfbfb5485db5_19;
    $fe_last_val_fbab56ae5172948461cfdfbfb5485db5_19  = $fe_n_items_fbab56ae5172948461cfdfbfb5485db5_19 - 1;
}
// foreach
for ( $fe_i_fbab56ae5172948461cfdfbfb5485db5_19 = $fe_first_val_fbab56ae5172948461cfdfbfb5485db5_19; $fe_n_items_processed_fbab56ae5172948461cfdfbfb5485db5_19 < $fe_max_fbab56ae5172948461cfdfbfb5485db5_19 && ( $fe_reverse_fbab56ae5172948461cfdfbfb5485db5_19 ? $fe_i_fbab56ae5172948461cfdfbfb5485db5_19 >= $fe_last_val_fbab56ae5172948461cfdfbfb5485db5_19 : $fe_i_fbab56ae5172948461cfdfbfb5485db5_19 <= $fe_last_val_fbab56ae5172948461cfdfbfb5485db5_19 ); $fe_reverse_fbab56ae5172948461cfdfbfb5485db5_19 ? $fe_i_fbab56ae5172948461cfdfbfb5485db5_19-- : $fe_i_fbab56ae5172948461cfdfbfb5485db5_19++ )
{
$fe_key_fbab56ae5172948461cfdfbfb5485db5_19 = $fe_array_keys_fbab56ae5172948461cfdfbfb5485db5_19[$fe_i_fbab56ae5172948461cfdfbfb5485db5_19];
$fe_val_fbab56ae5172948461cfdfbfb5485db5_19 = $fe_array_fbab56ae5172948461cfdfbfb5485db5_19[$fe_key_fbab56ae5172948461cfdfbfb5485db5_19];
$vars[$rootNamespace]['template'] = $fe_val_fbab56ae5172948461cfdfbfb5485db5_19;
$text .= '        ';
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
            1 => 'design:',
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
              2 => 'template',
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
    0 => 52,
    1 => 8,
    2 => 4869,
  ),
  1 => 
  array (
    0 => 52,
    1 => 49,
    2 => 4910,
  ),
  2 => 'design/admin2/templates/popupmenu/popup_class_menu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    ';
$fe_n_items_processed_fbab56ae5172948461cfdfbfb5485db5_19++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_fbab56ae5172948461cfdfbfb5485db5_19 ) ) extract( array_pop( $fe_variable_stack_fbab56ae5172948461cfdfbfb5485db5_19 ) );

else
{

unset( $fe_array_fbab56ae5172948461cfdfbfb5485db5_19 );

unset( $fe_array_keys_fbab56ae5172948461cfdfbfb5485db5_19 );

unset( $fe_n_items_fbab56ae5172948461cfdfbfb5485db5_19 );

unset( $fe_n_items_processed_fbab56ae5172948461cfdfbfb5485db5_19 );

unset( $fe_i_fbab56ae5172948461cfdfbfb5485db5_19 );

unset( $fe_key_fbab56ae5172948461cfdfbfb5485db5_19 );

unset( $fe_val_fbab56ae5172948461cfdfbfb5485db5_19 );

unset( $fe_offset_fbab56ae5172948461cfdfbfb5485db5_19 );

unset( $fe_max_fbab56ae5172948461cfdfbfb5485db5_19 );

unset( $fe_reverse_fbab56ae5172948461cfdfbfb5485db5_19 );

unset( $fe_first_val_fbab56ae5172948461cfdfbfb5485db5_19 );

unset( $fe_last_val_fbab56ae5172948461cfdfbfb5485db5_19 );

unset( $fe_variable_stack_fbab56ae5172948461cfdfbfb5485db5_19 );

}

// foreach ends
$text .= '</div>


<form id="menu-form-createnodefeed" method="post" action="/index.php/ezwebin_site_admin/content/action">
  <input type="hidden" name="ContentObjectID" value="%objectID%" />
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="CreateNodeFeed" value="x" />
</form>


<form id="menu-form-removenodefeed" method="post" action="/index.php/ezwebin_site_admin/content/action">
  <input type="hidden" name="ContentObjectID" value="%objectID%" />
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="RemoveNodeFeed" value="x" />
</form>


<form id="menu-form-view-cache-delete" method="post" action="/index.php/ezwebin_site_admin/content/action">
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
  <input type="hidden" name="ClearViewCacheButton" value="x" />
</form>


<form id="menu-form-recursive-view-cache-delete" method="post" action="/index.php/ezwebin_site_admin/content/action">
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
  <input type="hidden" name="ClearViewCacheSubtreeButton" value="x" />
</form>';

$setArray = $oldSetArray_f8be3e686df4143a9248938b83d2d8b4;
$tpl->Level--;
?>
