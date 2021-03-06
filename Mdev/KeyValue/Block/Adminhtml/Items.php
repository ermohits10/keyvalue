<?php
/**
 * @category   Mdev
 * @package    Mdev_KeyValue
 * @author     Mohit
 */

namespace Mdev\KeyValue\Block\Adminhtml;

class Items extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'items';
        $this->_headerText = __('Key Value');
        $this->_addButtonLabel = __('Add Key Value');
        parent::_construct();
    }
}
