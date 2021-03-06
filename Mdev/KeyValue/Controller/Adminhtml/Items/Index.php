<?php
/**
 * @category   Mdev
 * @package    Mdev_KeyValue
 * @author     Mohit
 */

namespace Mdev\KeyValue\Controller\Adminhtml\Items;

class Index extends \Mdev\KeyValue\Controller\Adminhtml\Items
{
    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Mdev_KeyValue::keyvalue');
        $resultPage->getConfig()->getTitle()->prepend(__('Key Value'));
        $resultPage->addBreadcrumb(__('Key'), __('Key'));
        $resultPage->addBreadcrumb(__('Value'), __('Value'));
        return $resultPage;
    }
}