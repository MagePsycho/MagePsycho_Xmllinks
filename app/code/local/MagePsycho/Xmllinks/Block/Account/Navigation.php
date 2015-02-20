<?php
/**
 * @category   MagePsycho
 * @package    MagePsycho_Xmllinks
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagePsycho_Xmllinks_Block_Account_Navigation extends Mage_Customer_Block_Account_Navigation
{
    public function removeLinkByName($name)
    {
        foreach ($this->_links as $k => $v) {
            if ($v->getName() == $name) {
                unset($this->_links[$k]);
            }
        }
        return $this;
    }
}