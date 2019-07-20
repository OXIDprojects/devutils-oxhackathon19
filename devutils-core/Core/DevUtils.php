<?php

namespace OxidCommunity\DevutilsCore\Core;

use OxidEsales\Eshop\Core\Base;
use OxidEsales\Eshop\Core\Config;
use OxidEsales\Eshop\Core\Registry;

class DevUtils extends Base {

    public function success($content, $time = false) {
        header('Content-Type: application/json; charset=UTF-8');
        if ($time) {
            header('Last-Modified: ' . date('r', $time));
        }

        echo json_encode($content);
        exit;
    }

    public function error($content) {
        header('HTTP/1.1 500 It didnt work... ');
        header('Content-Type: application/json; charset=UTF-8');
        die(json_encode(array('error' => $content)));
    }

    /**
     *  Not used at the moment => ??
     *
     * @param bool $output
     * @return mixed
     *
     */
    public function updateViews($output = false) {
        if (Registry::getSession()->getVariable("malladmin")) {
            $oMetaData = oxNew('oxDbMetaDataHandler');
            $ret = $oMetaData->updateViews();

            if (!$output) {
                return $ret;
            }

            echo $ret;
            exit;
        }
    }

}
