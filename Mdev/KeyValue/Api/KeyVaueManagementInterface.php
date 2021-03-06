<?php 
/**
 * @category   Mdev
 * @package    Mdev_KeyValue
 * @author     Mohit 
 */
 
namespace Mdev\KeyValue\Api;
 
 
interface KeyVaueManagementInterface {


	/**
	 * GET for api
	 * @return string
	 */
	
	public function getKeyValueList();

     /**
     * GET for api
     * @param string $code
     * @return string
     */
    public function getkeyValueByCode($code);

    /**
     * DELETE for api
     * @param string $code
     * @return string
     */
    public function deleteKeyValueItem($code); 

     /**
     * POST add key value record
     *
     * @api
     *
     * @param string $code
     * @param string $value
     * @return string
     */
    public function addkeyValue($code,$value);
	
}