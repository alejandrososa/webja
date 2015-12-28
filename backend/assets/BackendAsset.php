<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class BackendAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/font-material.css',
        'css/bootstrap.css',
        'css/materialadmin.css',
        'css/font-awesome.min.css',
        'css/material-design-iconic-font.min.css',

        'css/theme-default/libs/select2/select2.css?1424887856',
		'css/theme-default/libs/multi-select/multi-select.css?1424887857',
		'css/theme-default/libs/bootstrap-datepicker/datepicker3.css?1424887858',
		'css/theme-default/libs/jquery-ui/jquery-ui-theme.css?1423393666',
		'css/theme-default/libs/bootstrap-colorpicker/bootstrap-colorpicker.css?1424887860',
		'css/theme-default/libs/bootstrap-tagsinput/bootstrap-tagsinput.css?1424887862',
		'css/theme-default/libs/typeahead/typeahead.css?1424887863',
		'css/theme-default/libs/dropzone/dropzone-theme.css?1424887864',
    ];
    public $js = [

        'js/libs/utils/html5shiv.js',
        'js/libs/utils/respond.min.js',

        //'js/libs/jquery/jquery-1.11.2.min.js',
        'js/libs/jquery/jquery-migrate-1.2.1.min.js',
		'js/libs/jquery-ui/jquery-ui.min.js',
        'js/libs/bootstrap/bootstrap.min.js',
		'js/libs/spin.js/spin.min.js',
		'js/libs/autosize/jquery.autosize.min.js',
		'js/libs/select2/select2.min.js',
		'js/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js',
		'js/libs/multi-select/jquery.multi-select.js',
		'js/libs/inputmask/jquery.inputmask.bundle.min.js',
		'js/libs/moment/moment.min.js',
		'js/libs/bootstrap-datepicker/bootstrap-datepicker.js',
		'js/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js',
		'js/libs/typeahead/typeahead.bundle.min.js',
		'js/libs/dropzone/dropzone.min.js',
		'js/libs/nanoscroller/jquery.nanoscroller.min.js',

		'js/core/source/App.js',
		'js/core/source/AppNavigation.js',
		'js/core/source/AppOffcanvas.js',
		'js/core/source/AppCard.js',
		'js/core/source/AppForm.js',
		'js/core/source/AppNavSearch.js',
		'js/core/source/AppVendor.js',
		'js/core/demo/Demo.js',


        'js/back.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
