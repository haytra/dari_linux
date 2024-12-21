<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita8a82d27da90f63920f0c1f8be651bf5
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Uyabri\\Php\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Uyabri\\Php\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita8a82d27da90f63920f0c1f8be651bf5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita8a82d27da90f63920f0c1f8be651bf5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita8a82d27da90f63920f0c1f8be651bf5::$classMap;

        }, null, ClassLoader::class);
    }
}