<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd67be42fc66ed148f4b5856806bf0e45
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wallace\\SearchCep\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wallace\\SearchCep\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Search' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd67be42fc66ed148f4b5856806bf0e45::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd67be42fc66ed148f4b5856806bf0e45::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd67be42fc66ed148f4b5856806bf0e45::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitd67be42fc66ed148f4b5856806bf0e45::$classMap;

        }, null, ClassLoader::class);
    }
}
