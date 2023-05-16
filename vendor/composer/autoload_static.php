<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc6865cd0543df97287d1062e3c808cdf
{
    public static $files = array (
        'df41b8ab281d7ca6e4c4fe6ddafc58da' => __DIR__ . '/../..' . '/app/helpers/helpers.php',
    );

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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc6865cd0543df97287d1062e3c808cdf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc6865cd0543df97287d1062e3c808cdf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc6865cd0543df97287d1062e3c808cdf::$classMap;

        }, null, ClassLoader::class);
    }
}
