<?php
// URI:       design/admin2/templates/page_head_style_inline.tpl
// Filename:  design/admin2/templates/page_head_style_inline.tpl
// Timestamp: 1331119530 (Wed Mar 7 19:25:30 CST 2012)
$oldSetArray_5dfeae3928fbe3f7becd6e965bdd54ca = isset( $setArray ) ? $setArray : array();
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

<!--[if lt IE 8]>
<style>
/* Terminate floating elements flow in IE < 8 */
.float-break
{
  height: 1%;
}
</style>
<![endif]-->
<!--[if lte IE 8]>
<style>
#controlbar-top .box-bc
{
  filter:progid:DXImageTransform.Microsoft.Shadow(color=\'gray\', Direction=180, Strength=8);
  zoom: 1;
}
</style>
<![endif]-->
<!--[if IE 6]>
<style>
.yui3-js-enabled .scroll-to-top {display: none;}
input.box, textarea.box {width: 99%}
</style>
<![endif]-->

';

$setArray = $oldSetArray_5dfeae3928fbe3f7becd6e965bdd54ca;
$tpl->Level--;
?>
