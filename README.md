yii-showcase
============

Showcase for Tactic Shared Components

How to install
============

```
git clone git@github.com:alari/yii-showcase.git
cd yii-showcase

git submodule init
git submodule update

mkdir assets
chmod a+w assets
mkdir protected/runtime
chmod a+w protected/runtime

cd protected
./yiic migrate --migrationPath=imagesHolder.migrations
./yiic migrate --migrationPath=staticPages.migrations
./yiic migrate --migrationPath=user.migrations
./yiic migrate
```

How to create something similar
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

git submodule add https://github.com/yiiext/activerecord-relation-behavior.git protected/extensions/yiiext/behaviors/activerecord-relation

git submodule -q foreach git pull -q origin master
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