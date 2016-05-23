<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'name' => 'Sistem Kearsipan',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'defaultRoute' => 'kearsipan/default/home',
    'controllerMap' => [
        'file' => 'mdm/upload/FileController', // use to show or download file
    ],
    'modules' =>  [
        'gridview' =>  [
            'class' => '\kartik\grid\Module'
        ],
        'treemanager' =>  [
            'class' => '\kartik\tree\Module',
            // other module settings, refer detailed documentation
        ],
        'settings' => [
            'class' => 'pheme\settings\Module',
            'sourceLanguage' => 'en'
        ],
        'kearsipan' => [
            'class' => 'app\modules\kearsipan\Module',
        ],
        // Yii2 RBAC
        'rbac' => [
            'class' => 'dektrium\rbac\Module',
            'admins' => ['julian'],
        ],
        // Yii2 User
        'user' => [
            'class' => 'dektrium\user\Module',
            // 'enableUnconfirmedLogin' => true,
            'enableUnconfirmedLogin' => true,
            'confirmWithin' => 21600,
            'cost' => 12,
            'mailer' => [
                'sender' => ['no-reply@kersipan.dev' => 'My Company']
            ],
            'admins' => ['julian'],
            // Yii2 User Controllers Overrides
            'controllerMap' => [
                'admin' => 'cinghie\yii2userextended\controllers\AdminController',
                'settings' => 'cinghie\yii2userextended\controllers\SettingsController',
            ],
            // Yii2 User Models Overrides
            'modelMap' => [
                'RegistrationForm' => 'cinghie\yii2userextended\models\RegistrationForm',
                'Profile'          => 'cinghie\yii2userextended\models\Profile',
                'SettingsForm'     => 'cinghie\yii2userextended\models\SettingsForm',
                'User'             => 'cinghie\yii2userextended\models\User',
            ],
        ],
        // Yii2 User Extended
        'userextended' => [
            'class' => 'cinghie\yii2userextended\Module',
            'avatarPath' => '@webroot/img/users/', // Path to your avatar files
            'avatarURL'  => '@web/img/users/', // Url to your avatar files
            'showTitles' => true, // Set false in adminLTE
        ],
    ],
    'components' => [
        'settings' => [
            'class' => 'pheme\settings\components\Settings'
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                   '@dektrium/rbac/views' => '@vendor/cinghie/yii2-user-extended/views',
                   '@dektrium/user/views' => '@vendor/cinghie/yii2-user-extended/views',
                    '@dektrium/user/views/security' => '@app/views/security',
                    '@app/views' => '@app/modules/custom'
                ],
            ],
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '5wEuNuqLjsN_4ut5MxFVeZRXupBN-9zS',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'dektrium\user\models\User',
            'enableAutoLogin' => true,
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager'
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        
       'urlManager' => [
           'enablePrettyUrl' => true,
           'showScriptName' => false,
           'rules' => [
           ],
       ],
        
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
