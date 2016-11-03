<?php
/**
*
*/
class Midin_ProductBaru_Model_Observer
{
	
	function test($observer){

		Mage::log('sukses tambah log nih', null,'midinlog.log');
	}

	function checkoutpesan($observer){

		$event = $observer->getEvent();
		$product = $event->getProduct();

		$pesan = "Event digunakan: ".$event->getName().
			" Product dipesan : ".$product->getName().
			" Harga dasar : ".$product->getPrice();

		Mage::getSingleton('checkout/session')->addSuccess("Nama Product : ".$product->getName());
		Mage::getSingleton('checkout/session')->addError("SKU Product : ".$product->getSku());
		Mage::getSingleton('checkout/session')->addWarning("Price Product : ".$product->getPrice());
		Mage::getSingleton('checkout/session')->addNotice("Pesan : ".$pesan);

		Mage::log('-----', null,'midinlog.log');
	}

	public function redirectlogin($observer){

		if(!Mage::getSingleton('customer/session')->isLoggedIn())
		{
			$path = 'checkout/onepage/';
			Mage::app()->getResponse()->setRedirect(Mage::getUrl($path));
			Mage::app()->getResponse()->sendResponse();
			exit;
		}
	}
}