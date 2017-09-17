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
                'agentdetail/<page:[0-9]+>'=>'site/agentdetail',
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
            ],
        ],
    ],
    'params' => $params,
];
