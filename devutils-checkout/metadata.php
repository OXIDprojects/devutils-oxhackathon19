<?php

$sMetadataVersion = '2.1';
$aModule = [
    'id'          => 'devutils-checkout',
    'title'       => '[devutils] checkout (work in progress)',
    'description' => 'show cached module metadata from database and resetting metadata entries',
    'version'     => '1.0.0',
    'author'      => '',
    'email'       => 'community@oxid-esales.com',
    'url'         => 'https://github.com/OXIDprojects/devutils-oxhackathon19',
    'extend'      => [
        \OxidEsales\Eshop\Application\Controller\ThankYouController::class => OxidCommunity\DevutilsCheckout\Controller\ThankYouController::class,
        \OxidEsales\Eshop\Application\Model\Basket::class                  => OxidCommunity\DevutilsCheckout\Model\Basket::class
    ],
    'controllers' => [],
    'templates'   => [],
    'settings'    => []
];