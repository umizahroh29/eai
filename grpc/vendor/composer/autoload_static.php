<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd66a4330899b261a42a135476a36832
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'User\\' => 5,
        ),
        'G' => 
        array (
            'Grpc\\' => 5,
            'Google\\Protobuf\\' => 16,
            'GPBMetadata\\Google\\Protobuf\\' => 28,
            'GPBMetadata\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'User\\' => 
        array (
            0 => __DIR__ . '/../..' . '/user/User',
        ),
        'Grpc\\' => 
        array (
            0 => __DIR__ . '/..' . '/grpc/grpc/src/lib',
        ),
        'Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/Google/Protobuf',
        ),
        'GPBMetadata\\Google\\Protobuf\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/protobuf/src/GPBMetadata/Google/Protobuf',
        ),
        'GPBMetadata\\' => 
        array (
            0 => __DIR__ . '/../..' . '/user/GPBMetadata',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd66a4330899b261a42a135476a36832::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd66a4330899b261a42a135476a36832::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
