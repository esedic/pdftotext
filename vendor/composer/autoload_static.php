<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit867b88a747903145abeb8112159678c4
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Process\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $prefixesPsr0 = array (
        'X' => 
        array (
            'XPDF' => 
            array (
                0 => __DIR__ . '/..' . '/php-xpdf/php-xpdf/src',
            ),
        ),
        'E' => 
        array (
            'Evenement' => 
            array (
                0 => __DIR__ . '/..' . '/evenement/evenement/src',
            ),
        ),
        'A' => 
        array (
            'Alchemy' => 
            array (
                0 => __DIR__ . '/..' . '/alchemy/binary-driver/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit867b88a747903145abeb8112159678c4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit867b88a747903145abeb8112159678c4::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit867b88a747903145abeb8112159678c4::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit867b88a747903145abeb8112159678c4::$classMap;

        }, null, ClassLoader::class);
    }
}