<?php
/**
* 
*/
class Midin_CustomerList_Model_Newcustomer extends Mage_Core_Model_Abstract
{
	
	public function customerBaru(){
		$data = Mage::getModel('customer/customer')
			->getCollection()
			->addAttributeToSelect("*")
			->setPageSize(2)
			->setOrder('entity_id', 'desc');
		return $data;
	}
}