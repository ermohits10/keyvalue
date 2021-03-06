<?php
/**
 * @category   Mdev
 * @package    Mdev_KeyValue
 * @author     Mohit
 */

namespace Mdev\KeyValue\Controller\Adminhtml\Items;

class Edit extends \Mdev\KeyValue\Controller\Adminhtml\Items
{

    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        
        $model = $this->_objectManager->create('Mdev\KeyValue\Model\KeyValue');

        if ($id) {
            $model->load($id);
            if (!$model->getId()) {
                $this->messageManager->addError(__('This item no longer exists.'));
                $this->_redirect('mdev_keyvalue/*');
                return;
            }
        }
        // set entered data if was error when we do save
        $data = $this->_objectManager->get('Magento\Backend\Model\Session')->getPageData(true);
        if (!empty($data)) {
            $model->addData($data);
        }
        $this->_coreRegistry->register('current_mdev_keyvalue_items', $model);
        $this->_initAction();
        $this->_view->getLayout()->getBlock('items_items_edit');
        $this->_view->renderLayout();
    }
}
