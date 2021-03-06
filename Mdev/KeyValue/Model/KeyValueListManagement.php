<?php

/**
 * @category   Mdev
 * @package    Mdev_KeyValue
 * @author     Mohit 
 */
 
namespace Mdev\KeyValue\Model;
use Mdev\KeyValue\Api\KeyVaueManagementInterface;
use Mdev\KeyValue\Model\KeyValueFactory;

class KeyValueListManagement implements KeyVaueManagementInterface
{
    /**
     * @var KeyValue
     */
    protected $_keyvalue;
    public function __construct(
        KeyValueFactory $keyvalue
    ) {
        $this->_keyvalue = $keyvalue;
    }

    /**
     * {@inheritdoc}
     */
    public function getKeyValueList()
    {
        
        try{
            $keyvalue = $this->_keyvalue->create();
            $collection = $keyvalue->getCollection();
            $response = $collection->getData();
        }catch(\Exception $e) {
            $response=['error' => $e->getMessage()];
        }
 
        return json_encode($response);
    }

    /**
     * {@inheritdoc}
     */
    public function getkeyValueByCode($code)
    {
        try{
            $keyvalue = $this->_keyvalue->create();
            $collection = $keyvalue->getCollection();
            $collection->addFieldToFilter('code',$code);
            $response = $collection->getData();
        }catch(\Exception $e) {
            $response=['error' => $e->getMessage()];
        }
        return json_encode($response);
    }

      /**
     * {@inheritdoc}
     */
    public function deleteKeyValueItem($code)
    {
         $response = ['success' => false];
        try{
            $keyvalue = $this->_keyvalue->create();
            $collection = $keyvalue->getCollection();
            $collection->addFieldToFilter('code',$code);
            foreach ($collection as $record) {
                $record->delete();
            }
            $response = ['success' => true, 'message' => 'keyvalue record entity deleted.'];
        }catch(\Exception $e) {
            $response=['error' => $e->getMessage()];
        }
        return json_encode($response);
    }

    /**
     * {@inheritdoc}
     */
    public function addkeyValue($code,$value){
        $response = ['success' => false];
        try{
            $keyvalue = $this->_keyvalue->create();
            $keyvalue->setCode($code);
            $keyvalue->setValue($value);
            if($keyvalue->save()){
                $response = ['success' => true, 'message' => 'You saved the key value record.'];
            }else{
                $response = ['success' => true, 'message' => "Something went wrong!"];
            }
        }catch(\Exception $e) {
            $response = ['success' => false, 'message' => $e->getMessage()];
        }
        return json_encode($response);
    }
    
}