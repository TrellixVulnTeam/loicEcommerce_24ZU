<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc5f64c972ca3c21533b986287cc5e6a3
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'B' => 
        array (
            'Bpost\\BpostApiClient\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Bpost\\BpostApiClient\\' => 
        array (
            0 => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src',
        ),
    );

    public static $classMap = array (
        'TijsVerkoyen\\Bpost\\Bpack247' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpack247\\Customer' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpack247\\CustomerPackStation' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Label' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Order' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Order\\Address' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Order\\Box' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Order\\Box\\At247' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Order\\Box\\AtBpost' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Order\\Box\\AtHome' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Order\\Box\\Customsinfo\\CustomsInfo' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Order\\Box\\IBox' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Order\\Box\\International' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Order\\Box\\National' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Order\\Box\\Openinghour\\Day' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Order\\Box\\Option\\AutomaticSecondPresentation' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Order\\Box\\Option\\CashOnDelivery' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Order\\Box\\Option\\Insurance' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Order\\Box\\Option\\Messaging' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Order\\Box\\Option\\SaturdayDelivery' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Order\\Box\\Option\\Signature' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Order\\Customer' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Order\\Line' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Order\\ParcelsDepotAddress' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Order\\PugoAddress' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Order\\Receiver' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Bpost\\Order\\Sender' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Exception' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\FormHandler' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Geo6' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Geo6\\Day' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Geo6\\Poi' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
        'TijsVerkoyen\\Bpost\\Geo6\\Service' => __DIR__ . '/..' . '/antidot-be/bpost-api-library/src/tijsverkoyen_classes.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc5f64c972ca3c21533b986287cc5e6a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc5f64c972ca3c21533b986287cc5e6a3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc5f64c972ca3c21533b986287cc5e6a3::$classMap;

        }, null, ClassLoader::class);
    }
}
