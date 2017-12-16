<?php
/**
 * @link      http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license   http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since  2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300,100,200',
        'https://fonts.googleapis.com/css?family=Open+Sans',
        'css/vendor/animate.css',
        'css/vendor/bootstrap.css',
        'css/vendor/flexslider.css',
        'css/vendor/font-awesome.css',
        'css/vendor/jquery.bxslider.css',
        'css/vendor/magnific-popup.css',
        'css/vendor/owl.carousel.css',
        'css/vendor/owl.theme.css',
        'css/vendor/settings.css',
        'css/style.css',
    ];
    public $js = [
        'js/vendor/jquery.min.js',
        'js/vendor/jquery.migrate.js',
        'js/vendor/owl.carousel.min.js',
        'js/vendor/jquery.magnific-popup.min.js',
        'js/vendor/jquery.bxslider.min.js',
        'js/vendor/jquery.appear.js',
        'js/vendor/jquery.countTo.js',
        'js/vendor/bootstrap.js',
        'js/vendor/jquery.imagesloaded.min.js',
        'js/vendor/jquery.isotope.min.js',
        'js/vendor/retina-1.1.0.min.js',
        'js/vendor/plugins-scroll.js',
        'js/vendor/waypoint.min.js',
        'js/vendor/jquery.stellar.min.js',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyCfMnpOPXS3ByOSEkSJXfGFDnJiKsklYIQ',
        'js/vendor/gmap3.min.js',
        'js/vendor/jquery.themepunch.plugins.min.js',
        'js/vendor/jquery.themepunch.revolution.min.js',
        'js/vendor/script.js',
        'js/jetcash.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
