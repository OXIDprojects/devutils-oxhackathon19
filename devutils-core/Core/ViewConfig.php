<?php

namespace OxidCommunity\DevutilsCore\Core;

use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Core\Request;

class ViewConfig extends ViewConfig_parent
{
    public function devCoreActive()
    {
        return true;
    }

    public function DevUtilClear()
    {
        $sFnc = Registry::get(Request::class)->getRequestParameter('devutilclear');

        if ($sFnc == 'cleartpl') {
            $this->clearTpl();
        } elseif ($sFnc == 'cleartmp') {
            $this->clearTmp();
        }
    }

    private function clearTmp()
    {
        $pattern = Registry::getConfig()->getConfigParam("sCompileDir") . "/*.txt";
        $i = 0;
        $fs = 0;
        foreach (glob($pattern) as $item) {
            if (is_file($item)) {
                $fs += filesize($item);
                unlink($item);
                $i++;
            }
        }
    }

    private function clearTpl() {
        $pattern = Registry::getConfig()->getConfigParam("sCompileDir") . "smarty/*.php";

        $i = 0;
        $fs = 0;
        foreach (glob($pattern) as $item) {
            if (is_file($item)) {
                $fs += filesize($item);
                unlink($item);
                $i++;
            }
        }
    }
}
