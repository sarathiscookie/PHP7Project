<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf519ffdf0f50a3ce6a32de0fefa33d75
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tour\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
            'Abstractt\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tour\\' => 
        array (
            0 => __DIR__ . '/../..' . '/namespaceAndAutoloadTwo',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/namespaceAndAutoload',
        ),
        'Abstractt\\' => 
        array (
            0 => __DIR__ . '/../..' . '/abstractNamespaceAutoload',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf519ffdf0f50a3ce6a32de0fefa33d75::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf519ffdf0f50a3ce6a32de0fefa33d75::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
