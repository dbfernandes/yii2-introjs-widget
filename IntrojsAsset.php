<?php

namespace dbfernandes\introjs;

use yii\web\AssetBundle;

class IntrojsAsset extends AssetBundle
{

    public $sourcePath = '@bower/intro.js';
    public $basePath = '@webroot/assets';
    public $js = ['intro.js'];
    public $css = ['introjs.css'];
    public $depends = ['yii\web\JqueryAsset'];

}
