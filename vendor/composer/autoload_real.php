<?php

// autoload_real.php generated by Composer

class ComposerAutoloaderInitda9ad687743c5d2b0e5bf986c6ae08bb
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitda9ad687743c5d2b0e5bf986c6ae08bb', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInitda9ad687743c5d2b0e5bf986c6ae08bb', 'loadClassLoader'));

        $vendorDir = dirname(__DIR__);
        $baseDir = dirname($vendorDir);

        $map = require __DIR__ . '/autoload_namespaces.php';
        foreach ($map as $namespace => $path) {
            $loader->set($namespace, $path);
        }

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->register(true);

        require $vendorDir . '/swiftmailer/swiftmailer/lib/swift_required.php';
        require $vendorDir . '/ircmaxell/password-compat/lib/password.php';
        require $vendorDir . '/laravel/framework/src/Illuminate/Support/helpers.php';

        return $loader;
    }
}
