yii-showcase
============

Showcase for tactic modules

How to
============
```
git submodule add git://github.com/alari/yii-framework.git framework
cd framework
./yiic webapp ..
cd ..
git submodule add git://github.com/alari/yii-staticPages.git protected/modules/staticPages
git submodule add git://github.com/alari/yii-imagesHolder.git protected/modules/imagesHolder
git submodule add git://github.com/alari/yii-user.git protected/modules/user
git submodule add git://github.com/alari/yii-i18n2ascii.git protected/extensions/i18n2ascii
git submodule add git://github.com/alari/yii-adminGen.git protected/modules/adminGen
git submodule add git://github.com/alari/giix.git protected/extensions/giix
git submodule add git://github.com/alari/yii-imagine.git protected/extensions/imagine
```

Migrations
============
```
cd protected
./yiic migrate --migrationPath=imagesHolder.migrations
./yiic migrate --migrationPath=staticPages.migrations
./yiic migrate --migrationPath=user.migrations
./yiic migrate
```

Giix config
============
```
    'import' => array(
        #...
        'ext.giix.components.*',
        #...
    ),
    #...
    'modules' => array(
        #...
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'generatorPaths' => array(
                'ext.giix.generators', // giix generators
            ),
        ),
        #...
    ),

```