<?php

namespace OxidCommunity\DevutilsCheckout\Model;

class Basket extends Basket_parent {
    /*
        public function addVoucher($sVoucherId) {
            parent::init();
            $oUser = $this->getUser();
            if ($oUser->oxuser__oxrights->value === "malladmin" || $oUser->inGroup("testuser")) oxRegistry::getSession()->setBasket($this->_oBasket);
        }
    */
}