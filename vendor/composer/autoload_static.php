<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcb96e5fa0755a90cd3286b91bfaf9e3c
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcb96e5fa0755a90cd3286b91bfaf9e3c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcb96e5fa0755a90cd3286b91bfaf9e3c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcb96e5fa0755a90cd3286b91bfaf9e3c::$classMap;

        }, null, ClassLoader::class);
    }
}
