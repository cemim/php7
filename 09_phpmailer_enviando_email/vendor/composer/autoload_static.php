<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit364cb7ff2be68e1a3f17e44aa241a295
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit364cb7ff2be68e1a3f17e44aa241a295::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit364cb7ff2be68e1a3f17e44aa241a295::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
