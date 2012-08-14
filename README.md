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