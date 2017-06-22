# yii2-introjs-widget
```
http://usablica.github.io/intro.js/
http://usablica.github.io/intro.js/example/index.html
```

### composer.json
---
```json
"require": {
    "dbfernandes/yii2-introjs-widget": "~1.0"
},
```

Assets
---
```php
//Base Assets
dbfernandes\introjs\IntrojsAsset::register($this);

//Themes Assets
dbfernandes\introjs\themes\DarkAsset::register($this);
dbfernandes\introjs\themes\NassimAsset::register($this);
dbfernandes\introjs\themes\NazaninAsset::register($this);
dbfernandes\introjs\themes\RoyalAsset::register($this);
dbfernandes\introjs\themes\FlattenerAsset::register($this);
dbfernandes\introjs\themes\ModernAsset::register($this);
```
