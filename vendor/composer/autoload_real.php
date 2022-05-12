<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit21d9337bb868ef48bd646ffadc690294
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

        spl_autoload_register(array('ComposerAutoloaderInit21d9337bb868ef48bd646ffadc690294', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit21d9337bb868ef48bd646ffadc690294', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit21d9337bb868ef48bd646ffadc690294::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}