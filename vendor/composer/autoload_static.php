<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0fb686d1860dc73e98bcea1d8cb3593
{
    public static $fallbackDirsPsr4
        = array(
            0 => __DIR__.'/../..'.'/lib',
        );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4
                = ComposerStaticInita0fb686d1860dc73e98bcea1d8cb3593::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
