<?php
/**
* 
*/
class Midin_ProductBaru_Block_Bproductbaru extends Mage_Core_Block_Template
{
	public function blockProduct(){
		$arr_value = array();
		$prod = Mage::getModel('midin_productbaru/mproductbaru')->productBaru();
		foreach($prod as $key=>$value){
			$arr_value[] = array(
					'idproduct' => $value->getId(),
					'nama' => $value->getName(),
					'harga' => $value->getPrice(),
					'url' => $value->getProductUrl()
				);
		}
		return $arr_value;
	}
}