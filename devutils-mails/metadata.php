<?php

$sMetadataVersion = '2.1';
$aModule = [
    'id'          => 'dev-mails',
    'title'       => '[devutils] email preview',
    'description' => 'easy design and debugging for oxid eshop email templates',
    'version'     => '1.0.0',
    'author'      =>  '',
    'email'       => 'community@oxid-esales.com',
    'url'         => 'https://github.com/OXIDprojects/devutils-oxhackathon19',
    'extend'      => [
        \OxidEsales\Eshop\Core\Email::class              => OxidCommunity\DevutilsMails\Core\Email::class,
        \OxidEsales\Eshop\Application\Model\Order::class => OxidCommunity\DevutilsMails\Model\Order::class
    ],
    'controllers' => [
        'dev_mails'                 => OxidCommunity\DevutilsMails\Controller\Mails::class,
        'dev_order_mails'           => OxidCommunity\DevutilsMails\Controller\OrderMails::class
    ],
    'templates'   => [
        'dev_mails.tpl'             => 'oxcom/devutils-mails/views/admin/tpl/dev_mails.tpl',
        'dev_order_mails.tpl'       => 'oxcom/devutils-mails/views/admin/tpl/dev_order_mails.tpl'
    ],
];