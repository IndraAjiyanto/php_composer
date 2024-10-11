<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5886b80dc629c983dae4cdec981cd648
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Progammerkece\\PhpComposer\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Progammerkece\\PhpComposer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5886b80dc629c983dae4cdec981cd648::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5886b80dc629c983dae4cdec981cd648::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5886b80dc629c983dae4cdec981cd648::$classMap;

        }, null, ClassLoader::class);
    }
}
