<?php
require_once("app/Mage.php");
Mage::app();

// $data = Mage::getModel('catalog/product')
// 			->getCollection()
// 			->addAttributeToSelect("*")
// 			->setOrder('entity_id', 'desc');
// foreach($data as $k=>$v){
// 	echo "[";
// 	echo $v->getId();
// 	echo "]";
// 	echo $v->getName();
// 	echo " =====> with price ";
// 	echo $v->getPrice();
// 	echo "<br/>";
// }

$data = Mage::getModel('midin_productbaru/mproductbaru');
$hasil = $data->productBaru();
foreach($hasil as $key=>$value){
	echo $value->getId();
}