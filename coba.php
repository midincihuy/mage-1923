<?php
require_once("app/Mage.php");
Mage::app();

// $data = Mage::getModel('customer/customer')
// 			->getCollection()
// 			->addAttributeToSelect("*")
// 			->setOrder('entity_id', 'desc');
// foreach($data as $k=>$v){
// 	// print_r($v);
// 	echo "[";
// 	echo $v->getId();
// 	echo "]";
// 	echo $v->getEmail();
// 	echo " namanya : ";
// 	echo $v->getFirstname();
// 	echo "&nbsp;";
// 	echo $v->getLastname();
// 	echo "<br/>";
// }

// $data = Mage::getModel('midin_productbaru/mproductbaru');
// $hasil = $data->productBaru();
// foreach($hasil as $key=>$value){
// 	echo $value->getId();
// }
$data = Mage::getModel('midin_customerlist/newcustomer');
$hasil = $data->customerBaru();
foreach($hasil as $key=>$value){
	echo $value->getEmail();
}