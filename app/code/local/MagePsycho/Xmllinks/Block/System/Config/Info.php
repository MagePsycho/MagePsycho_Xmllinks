<?php
/**
 * @category   MagePsycho
 * @package    MagePsycho_Xmllinks
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagePsycho_Xmllinks_Block_System_Config_Info
    extends Mage_Adminhtml_Block_Abstract
    implements Varien_Data_Form_Element_Renderer_Interface
{

    /**
     * Render fieldset html
     *
     * @param Varien_Data_Form_Element_Abstract $element
     * @return string
     */
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
         $html = '<div style="background:url(\'http://www.magepsycho.com/_logo.png\') no-repeat scroll 15px center #EAF0EE;border:1px solid #CCCCCC;margin-bottom:10px;padding:10px 5px 5px 200px;">
                    <h4>About MagePsycho</h4>
                    <p>Zend PHP5 Certified Engineer, Magento Certified Developer, Magento Moderator, Freelancer with specialization in web applications (CMS, E-Commerce, ERP etc.).<br /><br />
                    View more extensions @ <a href="http://www.magentocommerce.com/magento-connect/developer/MagePsycho" target="_blank">MagentoConnect</a><br />
                    <a href="http://www.magepsycho.com/contacts" target="_blank">Request a Quote / Contact Us</a><br />
					<table width="100%">
					<tr><td width="70px">Skype:</td><td>magentopycho</td></tr>
					<tr><td>Email:</td><td><a href="mailto:info@magepsycho.com">info@magepsycho.com</a></td></tr>
					<tr><td>Follow:</td><td><a href="http://twitter.com/magepsycho" target="_blank">@magepsycho</a></td></tr>
					<tr><td>Website:</td><td><a href="http://www.magepsycho.com" target="_blank">www.magespycho.com</a></td></tr>
					<tr><td>Blog:</td><td><a href="http://www.blog.magepsycho.com" target="_blank">www.blog.magepsycho.com</a></td></tr>
					</table>
                </div>';

        return $html;
    }
}
