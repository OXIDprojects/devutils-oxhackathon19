<?php

namespace OxidCommunity\DevutilsCore\Core;

use OxidEsales\Eshop\Core\Registry;

class UtilsView extends UtilsView_parent {

    /**
     * Not in use, because function is not tested successful
     * ToDo: Check
     *
     * @param $sCacheName
     * @param $aLangCache
     * @return bool
     *
     */
    public function setLangCache($sCacheName, $aLangCache) {
        if (Registry::getConfig()->getConfigParam("bl_Dev_disableLangCache")) {
            return true;
        }
        return parent::setLangCache($sCacheName, $aLangCache);
    }

}
