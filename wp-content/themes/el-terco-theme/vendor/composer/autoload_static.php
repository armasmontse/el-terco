<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit68facceaccbcccae660081ba144b3c51
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
        '5b6a39524e5ca547a7b8be64b61bf01c' => __DIR__ . '/../..' . '/framework/src/Illuminate/Support/helpers.php',
        'a6e134ab65d95e47857494064eced92f' => __DIR__ . '/../..' . '/app/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'I' => 
        array (
            'Illuminate\\' => 11,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Illuminate\\' => 
        array (
            0 => __DIR__ . '/../..' . '/framework/src/Illuminate',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit68facceaccbcccae660081ba144b3c51::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit68facceaccbcccae660081ba144b3c51::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
