<?php

namespace dbfernandes\introjs\themes;

use yii\web\AssetBundle;

class DarkAsset extends AssetBundle
{

    public $sourcePath = '@bower/intro.js';
    public $basePath = '@webroot/assets';
    public $css = ['themes/introjs-dark.css'];
    public $depends = ['dbfernandes\introjs\IntrojsAsset'];

}
