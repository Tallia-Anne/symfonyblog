<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit541879668695c0f50d8c517d70f7b770
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Flex\\' => 13,
        ),
        'A' => 
        array (
            'App\\Tests\\' => 10,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Flex\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/flex/src',
        ),
        'App\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit541879668695c0f50d8c517d70f7b770::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit541879668695c0f50d8c517d70f7b770::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit541879668695c0f50d8c517d70f7b770::$classMap;

        }, null, ClassLoader::class);
    }
}
