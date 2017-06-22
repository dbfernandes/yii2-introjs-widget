<?php

namespace dbfernandes\introjs\themes;

use yii\web\AssetBundle;

class NazaninAsset extends AssetBundle
{

    public $sourcePath = '@bower/intro.js';
    public $basePath = '@webroot/assets';
    public $css = ['themes/introjs-nazanin.css'];
    public $depends = ['dbfernandes\introjs\IntrojsAsset'];

}
