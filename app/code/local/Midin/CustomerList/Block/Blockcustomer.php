<?php
/**
* 
*/
class Midin_CustomerList_Block_Blockcustomer extends Mage_Core_Block_Template
{
	
	function blockCustomer()
	{
		$arr_value = array();
		$cust = Mage::getModel('midin_customerlist/newcustomer')->customerBaru();
		foreach($cust as $key=>$value){
			$arr_value[] = array(
					'id_customer' => $value->getId(),
					'nama_customer' => $value->getName(),
					'email_customer' => $value->getEmail(),
				);
		}
		return $arr_value;
	}
}