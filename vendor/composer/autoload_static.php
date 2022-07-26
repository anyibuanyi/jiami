<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit530383a0c8613a6d90ffac9cf18a3c67
{
    public static $prefixLengthsPsr4 = array (
        'X' => 
        array (
            'Xuyi\\Jiami\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Xuyi\\Jiami\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit530383a0c8613a6d90ffac9cf18a3c67::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit530383a0c8613a6d90ffac9cf18a3c67::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit530383a0c8613a6d90ffac9cf18a3c67::$classMap;

        }, null, ClassLoader::class);
    }
}
