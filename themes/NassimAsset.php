<?php

namespace dbfernandes\introjs\themes;

use yii\web\AssetBundle;

class NassimAsset extends AssetBundle
{

    public $sourcePath = '@bower/intro.js';
    public $basePath = '@webroot/assets';
    public $css = ['themes/introjs-nassim.css'];
    public $depends = ['dbfernandes\introjs\IntrojsAsset'];

}
