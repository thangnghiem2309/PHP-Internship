<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite45ae5245181b95001fad2f5a68981c0
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Admin\\Mvc\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Admin\\Mvc\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite45ae5245181b95001fad2f5a68981c0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite45ae5245181b95001fad2f5a68981c0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite45ae5245181b95001fad2f5a68981c0::$classMap;

        }, null, ClassLoader::class);
    }
}