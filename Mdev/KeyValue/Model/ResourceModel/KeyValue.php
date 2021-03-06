<?php
/**
 * @category   Mdev
 * @package    Mdev_KeyValue
 * @author     Mohit
 */

namespace Mdev\KeyValue\Model\ResourceModel;

class KeyValue extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('mdev_keyvalue', 'id');   //here "mdev_keyvalue" is table name and "id" is the primary key of table
    }
}