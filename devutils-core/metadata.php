<?php

$sMetadataVersion = '2.1';

$aModule = [
    'id'          => 'devutils-core',
    'title'       => '[devutils] _core',
    'description' => 'Developent utilities core package. It is <b>required</b> for all other dev modules from vt-devutils package.',
    'version'     => '1.0.0',
    'author'      => 'Marat Bedoev',
    'email'       => 'm@marat.ws',
    'url'         => 'https://github.com/OXIDprojects/devutils-oxhackathon19',
    'extend'      => [
        \OxidEsales\Eshop\Application\Controller\Admin\NavigationController::class => OxidCommunity\DevutilsCore\Controller\Admin\NavigationController::class,
        \OxidEsales\Eshop\Core\Utils::class                                        => OxidCommunity\DevutilsCore\Core\Utils::class,
        \OxidEsales\Eshop\Core\UtilsView::class                                    => OxidCommunity\DevutilsCore\Core\UtilsView::class,
        \OxidEsales\Eshop\Core\ViewConfig::class                                   => OxidCommunity\DevutilsCore\Core\ViewConfig::class,
    ],
    'controllers' => [
        'dev_gui' => OxidCommunity\DevutilsCore\Controller\Admin\Gui::class,
    ],
    'templates'   => [
        'dev_header.tpl'            => 'oxcom/devutils-core/views/admin/dev_header.tpl',
        'dev_footer.tpl'            => 'oxcom/devutils-core/views/admin/dev_footer.tpl',
        'dev_navigation_header.tpl' => 'oxcom/devutils-core/views/admin/dev_navigation_header.tpl',
        'dev_gui.tpl'               => 'oxcom/devutils-core/views/admin/dev_gui.tpl',
    ],
    'settings'    => [
        ['group' => 'DevCache', 'name' => 'bl_Dev_disableLangCache', 'type' => 'bool', 'value' => false],
        ['group' => 'DevCache', 'name' => 'bl_Dev_disableSmartyCache', 'type' => 'bool', 'value' => false],
    ],
];
