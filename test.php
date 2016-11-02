<?php
require_once("app/Mage.php");
Mage::app();

// $data = new Midin_Latihan_Model_Welcome;
// echo $data->apakabar();

$data2 = Mage::getModel('midin_latihan/welcome');
var_dump(get_class($data2));

echo $data2->apakabar();
// $data = new Mage_Catalog_Model_Session;
// print_r(get_class($data));

echo "<br/>";
$coba = Mage::getModel('catalog/session');
print_r(get_class($coba));


$data2 = Mage::getModel('midin_latihan/baru');
var_dump(get_class($data2));

$data2->coba();


Mage::helper('midin_latihan')->cobaHelper();