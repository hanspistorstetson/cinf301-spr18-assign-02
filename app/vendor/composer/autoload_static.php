<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc22d87862caa5518b184384b61a86951
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc22d87862caa5518b184384b61a86951::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc22d87862caa5518b184384b61a86951::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}