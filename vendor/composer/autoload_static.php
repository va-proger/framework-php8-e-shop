<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit18db7527e1da54cef51128efde56f871
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wfm\\' => 4,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wfm\\' => 
        array (
            0 => __DIR__ . '/..' . '/wfm',
        ),
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit18db7527e1da54cef51128efde56f871::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit18db7527e1da54cef51128efde56f871::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit18db7527e1da54cef51128efde56f871::$classMap;

        }, null, ClassLoader::class);
    }
}