<?php
/**
 * @category   Mdev
 * @package    Mdev_KeyValue
 * @author     Mohit
 */

namespace Mdev\KeyValue\Controller\Adminhtml\Items;

class NewAction extends \Mdev\KeyValue\Controller\Adminhtml\Items
{

    public function execute()
    {
        $this->_forward('edit');
    }
}
