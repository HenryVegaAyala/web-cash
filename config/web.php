<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log','assetsAutoCompress'],
    'sourceLanguage' => 'es',
    'language' => 'es',
    'timeZone' => 'America/Lima',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'components' => [
        'assetManager' => [
            'appendTimestamp' => true,
            'converter' => [
                'class' => 'yii\web\AssetConverter',
                'commands' => [
                    'less' => ['css', 'lessc {from} {to} --no-color'],
                    'ts' => ['js', 'tsc --out {to} {from}'],
                ],
            ],
        ],
        'assetsAutoCompress' =>
            [
                'class' => '\skeeks\yii2\assetsAuto\AssetsAutoCompressComponent',
                'enabled' => true,
                'readFileTimeout' => 3,
                'jsCompress' => true,
                'jsCompressFlaggedComments' => true,
                'cssCompress' => true,
                'cssFileCompile' => true,
                'cssFileRemouteCompile' => false,
                'cssFileCompress' => true,
                'cssFileBottom' => false,
                'cssFileBottomLoadOnJs' => false,
                'jsFileCompile' => true,
                'jsFileRemouteCompile' => false,
                'jsFileCompress' => true,
                'jsFileCompressFlaggedComments' => true,
                'htmlCompress' => true,
                'noIncludeJsFilesOnPjax' => true,
                'htmlCompressOptions' =>
                    [
                        'extra' => false,
                        'no-comments' => true,
                    ],
            ],
        'request' => [
            'cookieValidationKey' => 'rc1vSZJ8HxzNLYoMXG8jd98rfbiKoS3h',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
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
        'db' => $db,

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [
                /**home**/
                '/' => 'site/index',
            ],
        ],

    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
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
