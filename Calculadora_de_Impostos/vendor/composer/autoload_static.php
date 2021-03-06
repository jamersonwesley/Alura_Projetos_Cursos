<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit10b18be019cff81b792a484cd38e3210
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vacant\\DesingPattern\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vacant\\DesingPattern\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit10b18be019cff81b792a484cd38e3210::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit10b18be019cff81b792a484cd38e3210::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit10b18be019cff81b792a484cd38e3210::$classMap;

        }, null, ClassLoader::class);
    }
}
