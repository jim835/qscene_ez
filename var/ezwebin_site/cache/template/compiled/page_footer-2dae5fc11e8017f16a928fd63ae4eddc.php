<?php
// URI:       extension/qstest/design/qstest/templates/page_footer.tpl
// Filename:  extension/qstest/design/qstest/templates/page_footer.tpl
// Timestamp: 1333183883 (Sat Mar 31 16:51:23 CST 2012)
$oldSetArray_1588a735befabf814f1bd6bb12769177 = isset( $setArray ) ? $setArray : array();
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
<!-- START: including template: extension/qstest/design/qstest/templates/page_footer.tpl (extension/qstest/design/qstest/templates/page_footer.tpl) -->
<p class="small">extension/qstest/design/qstest/templates/page_footer.tpl</p><br/>
  <!-- Footer area: START -->
  <div id="footer">
    <address>
        Powered by <a href="http://qscene.com.cn" title="QScene&#8482; company.">QScene&#8482; company.</a>. 
    </address>
  </div>
  <!-- Footer area: END -->

<!-- STOP: including template: extension/qstest/design/qstest/templates/page_footer.tpl (extension/qstest/design/qstest/templates/page_footer.tpl) -->
';

$setArray = $oldSetArray_1588a735befabf814f1bd6bb12769177;
$tpl->Level--;
?>
