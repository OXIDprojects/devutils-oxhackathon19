<?php

namespace OxidCommunity\DevutilsCore\Controller\Admin;

class NavigationController extends NavigationController_parent
{
    public function render()
    {
        $r = parent::render();
        return ($r == "header.tpl") ? "dev_navigation_header.tpl" : $r;
    }
    
}
