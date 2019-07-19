<?php

namespace OxidCommunity\DevutilsCore\Core;

use OxidEsales\Eshop\Core\Registry;

class UtilsView extends UtilsView_parent {
    public function setLangCache($sCacheName, $aLangCache) {
        if (Registry::getConfig()->getConfigParam("bl_Dev_disableLangCache")) return true;
        return parent::setLangCache($sCacheName, $aLangCache);
    }

}
