<?php

namespace OxidCommunity\DevutilsCore\Core;

use OxidEsales\Eshop\Core\Registry;

class Utils extends Utils_parent {

    /**
     * Not in User, because function is not tested successful
     * ToDo: Check
     *
     * @param $oSmarty
     */

    protected function _fillCommonSmartyProperties($oSmarty) {
        parent::_fillCommonSmartyProperties($oSmarty);
        if (Registry::getConfig()->getConfigParam("bl_Dev_disableSmartyCache")) {
            $oSmarty->force_compile = true;
        }

    }

}
