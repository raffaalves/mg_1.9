<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b2c85a5300a99bd7b64d3bbbdf844e0
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'MagentoHackathon\\Composer\\Magento' => 
            array (
                0 => __DIR__ . '/..' . '/magento-hackathon/magento-composer-installer/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit3b2c85a5300a99bd7b64d3bbbdf844e0::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
