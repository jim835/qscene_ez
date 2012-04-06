<?php
// URI:       extension/qstest/design/qstest/templates/page_footer.tpl
// Filename:  extension/qstest/design/qstest/templates/page_footer.tpl
// Timestamp: 1333183883 (Sat Mar 31 16:51:23 CST 2012)
$oldSetArray_8f0e50bf27ba414b6b3408d134d1e08e = isset( $setArray ) ? $setArray : array();
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

$text .= '  <!-- Footer area: START -->
  <div id="footer">
    <address>
        Powered by <a href="http://qscene.com.cn" title="QScene&#8482; company.">QScene&#8482; company.</a>. 
    </address>
  </div>
  <!-- Footer area: END -->
';

$setArray = $oldSetArray_8f0e50bf27ba414b6b3408d134d1e08e;
$tpl->Level--;
?>
