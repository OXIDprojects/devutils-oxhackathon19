[{$smarty.block.parent}]
[{$oViewConf->DevUtilClear() }]
<li class="sep">
    <a href="[{$oViewConf->getSelfLink()}]cl=navigation&item=header.tpl&devutilclear=cleartmp"  target="_self" class="rc"><b>[{oxmultilang ident="DEVUTIL_CLEARTMP_LABEL"}]</b></a>
</li>
<li class="sep">
    <a href="[{$oViewConf->getSelfLink()}]cl=navigation&item=header.tpl&devutilclear=cleartpl" target="_self" class="rc"><b>[{oxmultilang ident="DEVUTIL_CLEARTPL_LABEL"}]</b></a>
</li>