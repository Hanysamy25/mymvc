<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit62ef22b0784f027f2f53afea63c06dac
{
    public static $files = array (
        '71ecd0286a4e74fd8732297fb587023c' => __DIR__ . '/..' . '/thingengineer/mysqli-database-class/MysqliDb.php',
        'd383f1ec7b1e54a09cb53eb6fcf751e0' => __DIR__ . '/..' . '/thingengineer/mysqli-database-class/dbObject.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CRUDMVC\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CRUDMVC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'CRUDMVC\\Controllers\\HomeController' => __DIR__ . '/../..' . '/app/Controllers/HomeController.php',
        'CRUDMVC\\Core\\App' => __DIR__ . '/../..' . '/app/Core/App.php',
        'CRUDMVC\\Core\\DB' => __DIR__ . '/../..' . '/app/Core/DB.php',
        'CRUDMVC\\Core\\Views' => __DIR__ . '/../..' . '/app/Core/Views.php',
        'CRUDMVC\\Models\\EmployeeModel' => __DIR__ . '/../..' . '/app/Models/EmployeeModel.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit62ef22b0784f027f2f53afea63c06dac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit62ef22b0784f027f2f53afea63c06dac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit62ef22b0784f027f2f53afea63c06dac::$classMap;

        }, null, ClassLoader::class);
    }
}
