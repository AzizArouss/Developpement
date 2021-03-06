<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b6e1992789c16c7b926ed513776045c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Symfony\\Component\\Routing\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/routing',
            ),
            'Symfony\\Component\\HttpKernel\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/http-kernel',
            ),
            'Symfony\\Component\\HttpFoundation\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/http-foundation',
            ),
            'Symfony\\Component\\EventDispatcher\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
            ),
            'Symfony\\Component\\Debug\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/debug',
            ),
            'Silex' => 
            array (
                0 => __DIR__ . '/..' . '/silex/silex/src',
            ),
        ),
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/lib',
            ),
        ),
    );

    public static $classMap = array (
        'SessionHandlerInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
        'Symfony\\Component\\HttpFoundation\\Resources\\stubs\\FakeFile' => __DIR__ . '/..' . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/FakeFile.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b6e1992789c16c7b926ed513776045c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b6e1992789c16c7b926ed513776045c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4b6e1992789c16c7b926ed513776045c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit4b6e1992789c16c7b926ed513776045c::$classMap;

        }, null, ClassLoader::class);
    }
}
