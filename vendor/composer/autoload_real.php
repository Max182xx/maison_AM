<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit39eb217d1dd61264b46d4bb72d3d8267
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit39eb217d1dd61264b46d4bb72d3d8267', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit39eb217d1dd61264b46d4bb72d3d8267', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit39eb217d1dd61264b46d4bb72d3d8267::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
