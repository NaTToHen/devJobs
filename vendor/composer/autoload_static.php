<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita067e2faa53fb27ba33aa94a97896cd2
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita067e2faa53fb27ba33aa94a97896cd2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita067e2faa53fb27ba33aa94a97896cd2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita067e2faa53fb27ba33aa94a97896cd2::$classMap;

        }, null, ClassLoader::class);
    }
}
