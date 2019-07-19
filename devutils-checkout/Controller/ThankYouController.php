<?php

namespace OxidCommunity\DevutilsCheckout\Controller;

use OxidEsales\Eshop\Core\Registry;

class ThankYouController extends ThankYouController_parent {
    public function init() {
        /*$oBasket = $this->getSession()->getBasket();
        $myBasket = clone $oBasket;
        var_dump($oBasket = $this->getSession());
        var_dump($myBasket);
        var_dump($myBasket->getProductsCount());

        parent::init();

        die;*/
    }

    public function getOrder() {
        /*$oUser = $this->getUser();
        $order = parent::getOrder();

        if ($order !== null and $order->getFieldData('oxordernr')) {
            return $order;
        } elseif ($oUser->oxuser__oxrights->value === "malladmin" || $oUser->inGroup("oxidadmin")) {
            $order->oxorder__oxordernr = new \OxidEsales\Eshop\Core\Field("1");
        }
        return $order;*/
    }

}
