<?php

namespace alexeevdv\data\popup;

class AssetBundle extends \yii\web\AssetBundle
{
    public $sourcePath = "@vendor/alexeevdv/yii2-data-popup/assets";

    public $js = [
        'js/data-popup.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
