<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/wlcb-share-config/src/SmartyConfig/WLCB',
            S_ROOT.'vendor/qixinyun/wlcb-share-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/wlcb-share-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
