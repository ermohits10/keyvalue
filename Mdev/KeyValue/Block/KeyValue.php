<?php
/**
 * @category   Mdev
 * @package    Mdev_KeyValue
 * @author     Mohit Singh
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Mdev\KeyValue\Block;

/**
 * KeyValue content block
 */
class KeyValue extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context
    ) {
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Mdev KeyValue'));
        
        return parent::_prepareLayout();
    }
}
