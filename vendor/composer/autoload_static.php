<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9d847fb36233d18ec5ff2ecdcb42b1fb
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9d847fb36233d18ec5ff2ecdcb42b1fb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9d847fb36233d18ec5ff2ecdcb42b1fb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9d847fb36233d18ec5ff2ecdcb42b1fb::$classMap;

        }, null, ClassLoader::class);
    }
}
