<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit350eebe708ee62e542595e0f1db99c3c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit350eebe708ee62e542595e0f1db99c3c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit350eebe708ee62e542595e0f1db99c3c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit350eebe708ee62e542595e0f1db99c3c::$classMap;

        }, null, ClassLoader::class);
    }
}
