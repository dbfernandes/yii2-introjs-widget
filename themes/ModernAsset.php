<?php

namespace dbfernandes\introjs\themes;

use yii\web\AssetBundle;

class ModernAsset extends AssetBundle
{

    public $sourcePath = '@bower/intro.js';
    public $basePath = '@webroot/assets';
    public $css = ['themes/introjs-modern.css'];
    public $depends = ['dbfernandes\introjs\IntrojsAsset'];

}
