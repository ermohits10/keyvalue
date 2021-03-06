<?php
/**
 * @category   Mdev
 * @package    Mdev_KeyValue
 * @author     Mohit
 */

namespace Mdev\KeyValue\Model\ResourceModel\KeyValue;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'id';
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Mdev\KeyValue\Model\KeyValue',
            'Mdev\KeyValue\Model\ResourceModel\KeyValue'
        );
    }
}