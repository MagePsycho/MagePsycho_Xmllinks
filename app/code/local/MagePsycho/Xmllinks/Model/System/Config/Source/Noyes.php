<?php
/**
 * @category   MagePsycho
 * @package    MagePsycho_Xmllinks
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagePsycho_Xmllinks_Model_System_Config_Source_Noyes
{
    public function toOptionArray()
    {
        return array(
            array('value' => 1, 'label'=>Mage::helper('xmllinks')->__('Enabled')),
            array('value' => 0, 'label'=>Mage::helper('xmllinks')->__('Disabled')),
        );
    }
}