<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitEncryption
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OCA\\Encryption\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OCA\\Encryption\\' => 
        array (
            0 => __DIR__ . '/..' . '/../lib',
        ),
    );

    public static $classMap = array (
        'OCA\\Encryption\\AppInfo\\Application' => __DIR__ . '/..' . '/../lib/AppInfo/Application.php',
        'OCA\\Encryption\\Command\\DisableMasterKey' => __DIR__ . '/..' . '/../lib/Command/DisableMasterKey.php',
        'OCA\\Encryption\\Command\\EnableMasterKey' => __DIR__ . '/..' . '/../lib/Command/EnableMasterKey.php',
        'OCA\\Encryption\\Controller\\RecoveryController' => __DIR__ . '/..' . '/../lib/Controller/RecoveryController.php',
        'OCA\\Encryption\\Controller\\SettingsController' => __DIR__ . '/..' . '/../lib/Controller/SettingsController.php',
        'OCA\\Encryption\\Controller\\StatusController' => __DIR__ . '/..' . '/../lib/Controller/StatusController.php',
        'OCA\\Encryption\\Crypto\\Crypt' => __DIR__ . '/..' . '/../lib/Crypto/Crypt.php',
        'OCA\\Encryption\\Crypto\\DecryptAll' => __DIR__ . '/..' . '/../lib/Crypto/DecryptAll.php',
        'OCA\\Encryption\\Crypto\\EncryptAll' => __DIR__ . '/..' . '/../lib/Crypto/EncryptAll.php',
        'OCA\\Encryption\\Crypto\\Encryption' => __DIR__ . '/..' . '/../lib/Crypto/Encryption.php',
        'OCA\\Encryption\\Exceptions\\MultiKeyDecryptException' => __DIR__ . '/..' . '/../lib/Exceptions/MultiKeyDecryptException.php',
        'OCA\\Encryption\\Exceptions\\MultiKeyEncryptException' => __DIR__ . '/..' . '/../lib/Exceptions/MultiKeyEncryptException.php',
        'OCA\\Encryption\\Exceptions\\PrivateKeyMissingException' => __DIR__ . '/..' . '/../lib/Exceptions/PrivateKeyMissingException.php',
        'OCA\\Encryption\\Exceptions\\PublicKeyMissingException' => __DIR__ . '/..' . '/../lib/Exceptions/PublicKeyMissingException.php',
        'OCA\\Encryption\\HookManager' => __DIR__ . '/..' . '/../lib/HookManager.php',
        'OCA\\Encryption\\Hooks\\Contracts\\IHook' => __DIR__ . '/..' . '/../lib/Hooks/Contracts/IHook.php',
        'OCA\\Encryption\\Hooks\\UserHooks' => __DIR__ . '/..' . '/../lib/Hooks/UserHooks.php',
        'OCA\\Encryption\\KeyManager' => __DIR__ . '/..' . '/../lib/KeyManager.php',
        'OCA\\Encryption\\Migration\\SetMasterKeyStatus' => __DIR__ . '/..' . '/../lib/Migration/SetMasterKeyStatus.php',
        'OCA\\Encryption\\Recovery' => __DIR__ . '/..' . '/../lib/Recovery.php',
        'OCA\\Encryption\\Session' => __DIR__ . '/..' . '/../lib/Session.php',
        'OCA\\Encryption\\Settings\\Admin' => __DIR__ . '/..' . '/../lib/Settings/Admin.php',
        'OCA\\Encryption\\Settings\\Personal' => __DIR__ . '/..' . '/../lib/Settings/Personal.php',
        'OCA\\Encryption\\Users\\Setup' => __DIR__ . '/..' . '/../lib/Users/Setup.php',
        'OCA\\Encryption\\Util' => __DIR__ . '/..' . '/../lib/Util.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitEncryption::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitEncryption::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitEncryption::$classMap;

        }, null, ClassLoader::class);
    }
}