<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit303542ca42622cd5f3b82644a6c93219
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

        spl_autoload_register(array('ComposerAutoloaderInit303542ca42622cd5f3b82644a6c93219', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit303542ca42622cd5f3b82644a6c93219', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit303542ca42622cd5f3b82644a6c93219::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
