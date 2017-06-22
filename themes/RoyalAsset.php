<?php

namespace dbfernandes\introjs\themes;

use yii\web\AssetBundle;

class RoyalAsset extends AssetBundle
{

    public $sourcePath = '@bower/intro.js';
    public $basePath = '@webroot/assets';
    public $css = ['themes/introjs-royal.css'];
    public $depends = ['dbfernandes\introjs\IntrojsAsset'];

}
