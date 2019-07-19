<?php

namespace OxidCommunity\DevutilsMails\Core;

use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Core\SeoEncoder;

class Email extends Email_parent {
    private $_blDebug = false;

    public function setDebug($blDebug = true) {
        $this->_blDebug = $blDebug;
    }

    public function isDebug() {
        return $this->_blDebug;
    }

    public function send() {
        if ($this->isDebug()) {
            return $this;
        }
        return parent::send();
    }

    public function sendForgotPwdEmail($sEmailAddress, $sSubject = null) {
        $ret = parent::sendForgotPwdEmail($sEmailAddress, $sSubject);

        return ($this->isDebug()) ? $this : $ret;
    }

    public function sendOrderEmailToUser($order, $subject = null)
    {
        $myConfig = $this->getConfig();
        $this->setViewData("shopTemplateDir", $myConfig->getTemplateDir(false));
        $lang = \OxidEsales\Eshop\Core\Registry::getLang();
        $orderLang = (int) (isset($order->oxorder__oxlang->value) ? $order->oxorder__oxlang->value : 0);
        $smarty = $this->_getSmarty();

        // #1469 - we need to patch security here as we do not use standard template dir, so smarty stops working
        $store['INCLUDE_ANY'] = $smarty->security_settings['INCLUDE_ANY'];
        //V send email in order language
        $oldTplLang = $lang->getTplLanguage();
        $oldBaseLang = $lang->getTplLanguage();
        $lang->setTplLanguage($orderLang);
        $lang->setBaseLanguage($orderLang);

        $smarty->security_settings['INCLUDE_ANY'] = true;
        // force non admin to get correct paths (tpl, img)
        $myConfig->setAdminMode(false);


        $ret = parent::sendOrderEmailToUser($order, $subject);

        $myConfig->setAdminMode(true);
        $lang->setTplLanguage($oldTplLang);
        $lang->setBaseLanguage($oldBaseLang);
        // set it back
        $smarty->security_settings['INCLUDE_ANY'] = $store['INCLUDE_ANY'];

        return $ret;
    }
}
