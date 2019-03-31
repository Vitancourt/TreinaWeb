<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9dccd2b872fdf942adf0983518182910
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'autoload\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'autoload\\' => 
        array (
            0 => __DIR__ . '/..' . '/autoload',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9dccd2b872fdf942adf0983518182910::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9dccd2b872fdf942adf0983518182910::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
