<?php
/**
 * File containing the ezcDocumentPcssStyleMeasureBoxValue class
 *
 * @package Document
 * @version //autogen//
 * @copyright Copyright (C) 2005-2010 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @access private
 */

/**
 * Style directive measure box value representation
 *
 * @package Document
 * @access private
 * @version //autogen//
 */
class ezcDocumentPcssStyleMeasureBoxValue extends ezcDocumentPcssStyleBoxValue
{
    /**
     * Get sub value handler
     * 
     * @return ezcDocumentPcssStyleValue
     */
    protected function getSubValue()
    {
        return 'ezcDocumentPcssStyleMeasureValue';
    }
}

?>
