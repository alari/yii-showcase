<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Yii: Tactics Modules Showcase',

    'sourceLanguage' => '00',
    'language' => 'ru',

    // preloading 'log' component
    'preload' => array('log'),

    // autoloading model and component classes
    'import' => array(
        // For imagesHolder
        'application.modules.imagesHolder.models.*',
        // Defaults
        'application.models.*',

        'application.components.*',
        // For user module
        'application.modules.user.models.*',
        'application.modules.user.components.*',
        // For giix
        'ext.giix.components.*',
        // For catalogue
        'application.modules.catalogue.models.*',
        // For shared core
        'ext.shared-core.*',
        'ext.shared-core.form.*'
    ),

    'modules' => array(
        // uncomment the following to enable the Gii tool

        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '12345',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('*'),
            'generatorPaths' => array(
                'ext.giix.generators', // giix generators
            ),
        ),

        'adminGen',

        'catalogue'=>array(
            'categoryModelClass' => 'Category',
            'productModelClass' => 'Product'
        ),

        'imagesHolder' => array(
            'types' => array(
                'pic' => array(
                    'maxNum' => 1,
                    'preview' => 'tiny',
                    'default' => 'big',
                    'sizes' => array(
                        "big" => "800x600",
                        "tiny" => "120x120 thumb"
                    )
                ),
                'list' => array(
                    'maxNum' => 0,
                    'preview' => 'tiny',
                    'default' => 'big',
                    'sizes' => array(
                        "big" => "300x300",
                        "tiny" => "600x600"
                    )
                ),
            )
        ),

        'user' => array(
            'hash' => 'md5',
            'sendActivationMail' => true,
            'loginNotActiv' => false,
            'activeAfterRegister' => false,
            'autoLogin' => true,
            'registrationUrl' => array('/user/registration'),
            'recoveryUrl' => array('/user/recovery'),
            'loginUrl' => array('/user/login'),
            'returnUrl' => array('/user/profile'),
            'returnLogoutUrl' => array('/user/login'),
        ),

        'staticPages' => array(
            "regions" => array(
                "" => "-",
            ),
            'view' => '//showcase/staticPage',
            'modelClass' => 'Page'
        ),
    ),

    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'class' => 'WebUser',
            'allowAutoLogin' => true,
            'loginUrl' => array('/user/login'),
        ),

        'i18n2ascii' => array(
            'class' => 'application.extensions.i18n2ascii.I18n2ascii'
        ),

        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(
                'page/<id:[\w\-]+>' => 'staticPages/staticPages/view',

                'product/<id:[\w\-]+>' => 'catalogue/product/view',

                'gii' => 'gii',
                'gii/<controller:\w+>' => 'gii/<controller>',
                'gii/<controller:\w+>/<action:\w+>' => 'gii/<controller>/<action>',

                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        'request' => array(
            'baseUrl' => '',
        ),


        'db' => array(
            'tablePrefix' => 'tbl_',
            'connectionString' => 'mysql:host=localhost;dbname=showcase',
            'emulatePrepare' => true,
            'username' => 'showcase',
            'password' => 'showcase',
            'charset' => 'utf8',
        ),

        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
                // uncomment the following to show log messages on web pages
                /*
                    array(
                        'class'=>'CWebLogRoute',
                    ),
                    */
            ),
        ),

        'imagine' => array(
            'class' => "ext.imagine.ImagineYii"
        )
    ),

    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com',
    ),
);
