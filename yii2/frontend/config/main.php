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
        'eauth'=>[
            'class' => 'nodge\eauth\EAuth',
            'popup' => true,
            'cache' => false,
            'cacheExpire' => 0,
            'httpClient' => [
                // uncomment this to use streams in safe_mode
                //'useStreamsFallback' => true,
            ],
            'services' =>[
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
                    'clientId' => '150939452166147',
                    'clientSecret' => '02a0df25956df56a6a7dcbe91c2961a9',
                ],
            ],
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
        'urlManager' => [

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
//                'login/<service:google|facebook|etc>' => 'site/login',
            ],
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
