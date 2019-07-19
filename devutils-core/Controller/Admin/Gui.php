<?php

namespace OxidCommunity\DevutilsCore\Controller\Admin;

use OxidCommunity\DevutilsCore\Core\DevUtils;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\Eshop\Application\Controller\Admin\AdminController;

class Gui extends AdminController {
    protected $_sThisTemplate = 'dev_gui.tpl';

    public function clearTmp() {
        Registry::get(DevUtils::class)->clearTmp(true);
    }

    public function clearTpl() {
        Registry::get(DevUtils::class)->clearTpl(true);
    }

    public function updateViews() {
        Registry::get(DevUtils::class)->updateViews(true);
    }

    public function keepalive() {
    }
}
