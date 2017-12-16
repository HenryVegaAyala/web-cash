<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>" class="no-js">
<head>
    <meta charset="<?php echo Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300,100,200' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <?php echo Html::csrfMetaTags() ?>
    <title><?php echo Html::encode($this->title) ?></title>
    <?php //echo Html::cssFile('@web/css/jetcash.min.css?v=' . filemtime(Yii::getAlias('@webroot/css/jetcash.min.css'))) ?>
    <?php echo Html::cssFile('@web/css/vendor/bootstrap.css?v=' . filemtime(Yii::getAlias('@webroot/css/vendor/bootstrap.css'))) ?>
    <?php echo Html::cssFile('@web/css/vendor/owl.carousel.css?v=' . filemtime(Yii::getAlias('@webroot/css/vendor/owl.carousel.css'))) ?>
    <?php echo Html::cssFile('@web/css/vendor/owl.theme.css?v=' . filemtime(Yii::getAlias('@webroot/css/vendor/owl.theme.css'))) ?>
    <?php echo Html::cssFile('@web/css/vendor/jquery.bxslider.css?v=' . filemtime(Yii::getAlias('@webroot/css/vendor/jquery.bxslider.css'))) ?>
    <?php echo Html::cssFile('@web/css/vendor/magnific-popup.css?v=' . filemtime(Yii::getAlias('@webroot/css/vendor/magnific-popup.css'))) ?>
    <?php echo Html::cssFile('@web/css/vendor/font-awesome.css?v=' . filemtime(Yii::getAlias('@webroot/css/vendor/font-awesome.css'))) ?>
    <?php echo Html::cssFile('@web/css/vendor/animate.css?v=' . filemtime(Yii::getAlias('@webroot/css/vendor/animate.css'))) ?>
    <?php echo Html::cssFile('@web/css/vendor/flexslider.css?v=' . filemtime(Yii::getAlias('@webroot/css/vendor/flexslider.css'))) ?>
    <?php echo Html::cssFile('@web/css/vendor/settings.css?v=' . filemtime(Yii::getAlias('@webroot/css/vendor/settings.css'))) ?>
    <?php echo Html::cssFile('@web/css/style.css?v=' . filemtime(Yii::getAlias('@webroot/css/style.css'))) ?>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

<div id="preloader">
    <div id="loader">&nbsp;</div>
</div>

<div id="container">
    <?php echo $this->render('header') ?>
    <?php //echo $content ?>
    <?php echo $this->render('footer') ?>
</div>

<?php //echo Html::jsFile('@web/js/all.js?v=' . filemtime(Yii::getAlias('@webroot/js/all.js'))) ?>
<?php echo Html::jsFile('@web/js/vendor/jquery.min.js?v=' . filemtime(Yii::getAlias('@webroot/js/vendor/jquery.min.js'))) ?>
<?php echo Html::jsFile('@web/js/vendor/jquery.migrate.js?v=' . filemtime(Yii::getAlias('@webroot/js/vendor/jquery.migrate.js'))) ?>
<?php echo Html::jsFile('@web/js/vendor/owl.carousel.min.js?v=' . filemtime(Yii::getAlias('@webroot/js/vendor/owl.carousel.min.js'))) ?>
<?php echo Html::jsFile('@web/js/vendor/jquery.magnific-popup.min.js?v=' . filemtime(Yii::getAlias('@webroot/js/vendor/jquery.magnific-popup.min.js'))) ?>
<?php echo Html::jsFile('@web/js/vendor/jquery.bxslider.min.js?v=' . filemtime(Yii::getAlias('@webroot/js/vendor/jquery.bxslider.min.js'))) ?>
<?php echo Html::jsFile('@web/js/vendor/jquery.appear.js?v=' . filemtime(Yii::getAlias('@webroot/js/vendor/jquery.appear.js'))) ?>
<?php echo Html::jsFile('@web/js/vendor/jquery.countTo.js?v=' . filemtime(Yii::getAlias('@webroot/js/vendor/jquery.countTo.js'))) ?>
<?php echo Html::jsFile('@web/js/vendor/bootstrap.js?v=' . filemtime(Yii::getAlias('@webroot/js/vendor/bootstrap.js'))) ?>
<?php echo Html::jsFile('@web/js/vendor/jquery.imagesloaded.min.js?v=' . filemtime(Yii::getAlias('@webroot/js/vendor/jquery.imagesloaded.min.js'))) ?>
<?php echo Html::jsFile('@web/js/vendor/jquery.isotope.min.js?v=' . filemtime(Yii::getAlias('@webroot/js/vendor/jquery.isotope.min.js'))) ?>
<?php echo Html::jsFile('@web/js/vendor/retina-1.1.0.min.js?v=' . filemtime(Yii::getAlias('@webroot/js/vendor/retina-1.1.0.min.js'))) ?>
<?php echo Html::jsFile('@web/js/vendor/plugins-scroll.js?v=' . filemtime(Yii::getAlias('@webroot/js/vendor/plugins-scroll.js'))) ?>
<?php echo Html::jsFile('@web/js/vendor/waypoint.min.js?v=' . filemtime(Yii::getAlias('@webroot/js/vendor/waypoint.min.js'))) ?>
<?php echo Html::jsFile('@web/js/vendor/jquery.stellar.min.js?v=' . filemtime(Yii::getAlias('@webroot/js/vendor/jquery.stellar.min.js'))) ?>
<?php echo Html::jsFile('https://maps.googleapis.com/maps/api/js?key=AIzaSyCfMnpOPXS3ByOSEkSJXfGFDnJiKsklYIQ') ?>
<?php echo Html::jsFile('@web/js/vendor/gmap3.min.js?v=' . filemtime(Yii::getAlias('@webroot/js/vendor/gmap3.min.js'))) ?>
<?php echo Html::jsFile('@web/js/vendor/jquery.themepunch.plugins.min.js?v=' . filemtime(Yii::getAlias('@webroot/js/vendor/jquery.themepunch.plugins.min.js'))) ?>
<?php echo Html::jsFile('@web/js/vendor/jquery.themepunch.revolution.min.js?v=' . filemtime(Yii::getAlias('@webroot/js/vendor/jquery.themepunch.revolution.min.js'))) ?>
<?php echo Html::jsFile('@web/js/vendor/script.js?v=' . filemtime(Yii::getAlias('@webroot/js/vendor/script.js'))) ?>
<?php echo Html::jsFile('@web/js/jetcash.js?v=' . filemtime(Yii::getAlias('@webroot/js/jetcash.js'))) ?>
<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
