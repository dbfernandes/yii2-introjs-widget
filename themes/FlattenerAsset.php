<?php

namespace dbfernandes\introjs\themes;

use yii\web\AssetBundle;

class FlattenerAsset extends AssetBundle
{

    public $sourcePath = '@bower/intro.js';
    public $basePath = '@webroot/assets';
    public $css = ['themes/introjs-flattener.css'];
    public $depends = ['dbfernandes\introjs\IntrojsAsset'];

}
