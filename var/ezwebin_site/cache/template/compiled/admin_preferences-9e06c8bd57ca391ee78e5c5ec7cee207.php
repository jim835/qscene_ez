<?php
// URI:       design/admin2/templates/toolbar/full/admin_preferences.tpl
// Filename:  design/admin2/templates/toolbar/full/admin_preferences.tpl
// Timestamp: 1331119529 (Wed Mar 7 19:25:29 CST 2012)
$oldSetArray_4dd9473eb7e4182294b1a3bb101706e8 = isset( $setArray ) ? $setArray : array();
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
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) != ( 'edit' ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) != ( 'browse' ) );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div id="currentuserpreferences">

<div class="box-header"><div class="box-ml">

<h4>用户偏好</h4>

</div></div>

<div class="box-bc"><div class="box-ml"><div class="box-content">

<div class="settings">
<ul>
    <li class="nobullet">位置:
    ';
// if begins
unset( $if_cond );
$if_cond = eZPreferences::value( "admin_edit_show_locations" );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <span class="current">开启</span>&nbsp;|&nbsp;<a href="/index.php/ezwebin_site_admin/user/preferences/set/admin_edit_show_locations/0" title="编辑内容时，禁用位置窗口。">关闭</a>
    ';
}
else
{
$text .= '        <a href="/index.php/ezwebin_site_admin/user/preferences/set/admin_edit_show_locations/1" title="编辑内容时，启用位置窗口。">开启</a>&nbsp;|&nbsp;<span class="current">关闭</span>
    ';
}
unset( $if_cond );
// if ends

$text .= '    </li>
    <li class="nobullet">重新编辑:
    ';
// if begins
unset( $if_cond );
$if_cond = eZPreferences::value( "admin_edit_show_re_edit" );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <span class="current">开启</span>&nbsp;|&nbsp;<a href="/index.php/ezwebin_site_admin/user/preferences/set/admin_edit_show_re_edit/0" title="编辑内容时，禁用&quot;返回编辑&quot;复选框。">关闭</a>
    ';
}
else
{
$text .= '        <a href="/index.php/ezwebin_site_admin/user/preferences/set/admin_edit_show_re_edit/1" title="编辑内容时，启用&quot;返回编辑&quot;复选框。">开启</a>&nbsp;|&nbsp;<span class="current">关闭</span>
    ';
}
unset( $if_cond );
// if ends

$text .= '    </li>
</ul>
</div>

</div></div></div>

</div>';
}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_4dd9473eb7e4182294b1a3bb101706e8;
$tpl->Level--;
?>
