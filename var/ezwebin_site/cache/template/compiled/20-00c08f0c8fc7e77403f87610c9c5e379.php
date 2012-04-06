<?php
// URI:       design:error/kernel/20.tpl
// Filename:  design/standard/templates/error/kernel/20.tpl
// Timestamp: 1331119521 (Wed Mar 7 19:25:21 CST 2012)
$oldSetArray_bf138312f59f44f9227d0d5dd1cd8afa = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: design/standard/templates/error/kernel/20.tpl (design:error/kernel/20.tpl) -->
<p class="small">design/standard/templates/error/kernel/20.tpl</p><br/>

<div class="warning">
<h2>没发现模块</h2>
<p>';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['parameters'] : null;
$var5 = compiledFetchAttribute( $var4, 'module' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = htmlspecialchars( $var4 );
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%module' => $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( '找不到请求的模块。', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</p>
<p>可能的原因是:</p>
<ul>
    <li>模块名拼写错误。请试试修改一下URL。</li>
    <li>该模块不存在。</li>
    <li>此站点使用存取网址来匹配URL，但是您没有提供存取网址。试试在URL中的模块前插入一个存取网址名称。</li>
</ul>
</div>
';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'embed_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['embed_content'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '
';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'embed_content', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['embed_content'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

}
unset( $if_cond );
// if ends

$text .= '
<!-- STOP: including template: design/standard/templates/error/kernel/20.tpl (design:error/kernel/20.tpl) -->
';

$setArray = $oldSetArray_bf138312f59f44f9227d0d5dd1cd8afa;
$tpl->Level--;
?>
