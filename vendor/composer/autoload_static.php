<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc9f84e5845335741fffd3b6dba24e00f
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LOMU\\' => 5,
        ),
        'D' => 
        array (
            'Dcblogdev\\PdoWrapper\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LOMU\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Dcblogdev\\PdoWrapper\\' => 
        array (
            0 => __DIR__ . '/..' . '/dcblogdev/pdo-wrapper/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc9f84e5845335741fffd3b6dba24e00f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc9f84e5845335741fffd3b6dba24e00f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc9f84e5845335741fffd3b6dba24e00f::$classMap;

        }, null, ClassLoader::class);
    }
}
