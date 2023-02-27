<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0483c84bb615b94147f991a2a67788d3
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0483c84bb615b94147f991a2a67788d3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0483c84bb615b94147f991a2a67788d3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0483c84bb615b94147f991a2a67788d3::$classMap;

        }, null, ClassLoader::class);
    }
}