<?php
/**
* 
*/
class Midin_ProductBaru_Model_Mproductbaru extends Mage_Core_Model_Abstract
{
	function productBaru(){
		$data = Mage::getModel('catalog/product')
			->getCollection()
			->addAttributeToSelect("*")
			->setOrder('entity_id', 'desc');
		return $data;
	}
}