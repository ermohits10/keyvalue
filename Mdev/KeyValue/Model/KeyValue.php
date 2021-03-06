<?php
/**
 * @category   Mdev
 * @package    Mdev_KeyValue
 * @author     Mohit 
 */

namespace Mdev\KeyValue\Model;

use Magento\Framework\Model\AbstractModel;

class KeyValue extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Mdev\KeyValue\Model\ResourceModel\KeyValue');
    }
}