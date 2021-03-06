<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit30f177adeed043abe2d2f09b4e59927e
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Santhiya715\\HelloComposer\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Santhiya715\\HelloComposer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit30f177adeed043abe2d2f09b4e59927e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit30f177adeed043abe2d2f09b4e59927e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit30f177adeed043abe2d2f09b4e59927e::$classMap;

        }, null, ClassLoader::class);
    }
}
