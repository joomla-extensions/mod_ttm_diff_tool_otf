<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd080ebcf00dd263add3013a77879c9ea
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Joomla\\Http\\' => 12,
            'Joomla\\Github\\' => 14,
        ),
        'C' => 
        array (
            'Composer\\CaBundle\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Joomla\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/joomla/http/src',
        ),
        'Joomla\\Github\\' => 
        array (
            0 => __DIR__ . '/..' . '/joomla/github/src',
        ),
        'Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd080ebcf00dd263add3013a77879c9ea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd080ebcf00dd263add3013a77879c9ea::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
