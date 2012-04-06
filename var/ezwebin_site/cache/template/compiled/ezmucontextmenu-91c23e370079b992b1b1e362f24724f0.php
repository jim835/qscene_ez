<?php
// URI:       design:node/ezmucontextmenu.tpl
// Filename:  extension/ezmultiupload/design/standard/templates/node/ezmucontextmenu.tpl
// Timestamp: 1324678014 (Sat Dec 24 6:06:54 CST 2011)
$oldSetArray_90f4713a8d41ab92bb45f4ee8f171397 = isset( $setArray ) ? $setArray : array();
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
<hr/>
<script type="text/javascript">
menuArray[\'ContextMenu\'][\'elements\'][\'menu-multiupload\'] = new Array();
menuArray[\'ContextMenu\'][\'elements\'][\'menu-multiupload\'][\'url\'] = "/index.php/ezwebin_site_admin/ezmultiupload/upload/%nodeID%";
</script>

<a id="menu-multiupload" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )" >Upload multiple files</a>';

$setArray = $oldSetArray_90f4713a8d41ab92bb45f4ee8f171397;
$tpl->Level--;
?>
