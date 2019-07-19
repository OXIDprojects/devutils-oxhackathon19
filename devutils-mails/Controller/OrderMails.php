<?php

namespace OxidCommunity\DevutilsMails\Controller;

use OxidEsales\Eshop\Core\Email;

class OrderMails extends \OxidEsales\Eshop\Application\Controller\Admin\AdminDetailsController {

    protected $_sThisTemplate = 'dev_order_mails.tpl';

    public function render() {
        $this->addTplParam('sHtmlEmail', $this->_generateOrderEmail());

        return parent::render();
    }

    private function _generateOrderEmail() {
        $oOrder = oxNew(\OxidEsales\Eshop\Application\Model\Order::class);
        $soxId = $this->getEditObjectId();
        if (isset($soxId) && $soxId != "-1") {
            if($oOrder->load($soxId)){

                $oOrder->restoreBasket();
                $oEmail = oxNew(Email::class);
                $oEmail->setDebug();
                $oEmail->sendOrderEmailToUser($oOrder);

                return $oEmail->getBody();
            }
        }
    }

}
