<?php
/**
 * @category   Mdev
 * @package    Mdev_KeyValue
 * @author    Mohit
 */

namespace Mdev\KeyValue\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
    }
}
