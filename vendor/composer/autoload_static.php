<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb46c6c668eb3c8b04df021b10f4c7e5
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PKMegaSlider\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PKMegaSlider\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb46c6c668eb3c8b04df021b10f4c7e5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb46c6c668eb3c8b04df021b10f4c7e5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcb46c6c668eb3c8b04df021b10f4c7e5::$classMap;

        }, null, ClassLoader::class);
    }
}
