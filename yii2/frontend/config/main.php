<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);
use lav45\translate\models\Lang;

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'language' => 'ru',
    'sourceLanguage' => 'ru-RU',
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'google' => [
                    'class' => 'yii\authclient\clients\Google',
                    'clientId' => '598850333846-3ug79p24sdtous07bmukoutudhb0bbnm.apps.googleusercontent.com',
                    'clientSecret' => 'OyNTdOhsifNxM7KztsbT2sk8',
                ],
                'facebook' => [
                    'class' => 'yii\authclient\clients\Facebook',
                    'clientId' => '150939452166147',
                    'clientSecret' => '02a0df25956df56a6a7dcbe91c2961a9',
                ],
            ],
        ],
        'eauth' => [
            'class' => 'nodge\eauth\EAuth',
            'popup' => true, // Use the popup window instead of redirecting.
            'cache' => false, // Cache component name or false to disable cache. Defaults to 'cache' on production environments.
            'cacheExpire' => 0, // Cache lifetime. Defaults to 0 - means unlimited.
            'httpClient' => [
                // uncomment this to use streams in safe_mode
                //'useStreamsFallback' => true,
            ],
            'services' => [ // You can change the providers and their classes.
                'google_oauth' => [
                    // register your app here: https://code.google.com/apis/console/
                    'class' => 'nodge\eauth\services\GoogleOAuth2Service',
                    'clientId' => '598850333846-3ug79p24sdtous07bmukoutudhb0bbnm.apps.googleusercontent.com',
                    'clientSecret' => 'OyNTdOhsifNxM7KztsbT2sk8',
                    'title' => 'Google (OAuth)',
                ],
                'facebook' => [
                    // register your app here: https://developers.facebook.com/apps/
                    'class' => 'nodge\eauth\services\FacebookOAuth2Service',
                    'clientId' => '...',
                    'clientSecret' => '...',
                ],
            ],
        ],
        'assetManager' => [
            'bundles' => [
                'dosamigos\google\maps\MapAsset' => [
                    'options' => [
                        'key' => 'AIzaSyBDZFHf0n9jmDWlWRjMBwtYiOxfEwVsuEY',
                        'callback'=>'initMap'
                    ]
                ]
            ]
        ],
        'urlManager' => [
//            [
            'class' => 'codemix\localeurls\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'languages' => ['en', 'uk', 'ru'],
            'rules' => [
                'blog/<url>'=>'blog/one',
                'blog'=>'blog/index',
                'propertydetail/<id:[0-9]+>'=>'site/propertydetail',
                'propertylisting/<page:[0-9]+>'=>'site/propertylisting',
                'agentdetail/<id:[0-9]+>'=>'site/agentdetail',
            ],
//],
//            ['class' => 'lav45\translate\web\UrlManager',
//            'enablePrettyUrl' => true,
//            'showScriptName' => false,
//            'rules' => [
//                [
//                    'class' => 'yii\web\UrlRule', // If there is no need to substitute the language, you can use the base class
//                    'pattern' => '',
//                    'route' => 'site/index',
//                ],
//                [
//                    'pattern' => '<_lang:' . Lang::PATTERN . '>/<id:\d+>',
//                    'route' => 'site/view',
//                ],
//                [
//                    'pattern' => '<_lang:' . Lang::PATTERN . '>',
//                    'route' => 'site/index',
//                ]
//            ],]
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/translations',
                    'sourceLanguage' => 'ru',
                    'fileMap' => [
                        'app' => 'app.php',
                        //'app/error' => 'error.php',
                    ],
                ],
                'eauth' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@eauth/messages',
                ],
            ],
        ],
    ],
    'params' => $params,
];
