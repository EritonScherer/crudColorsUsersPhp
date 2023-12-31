<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb2e1ae74f4cd9ad9d2102c00c0193fe3
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb2e1ae74f4cd9ad9d2102c00c0193fe3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb2e1ae74f4cd9ad9d2102c00c0193fe3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb2e1ae74f4cd9ad9d2102c00c0193fe3::$classMap;

        }, null, ClassLoader::class);
    }
}
