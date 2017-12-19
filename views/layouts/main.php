<?php

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; <?php echo Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <?php if (Yii::$app->user->isGuest) { ?>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300,100,200' rel='stylesheet'
              type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <?php echo Html::cssFile('@web/css/vendor/animate.css?v=' . filemtime(Yii::getAlias('@webroot/css/vendor/animate.css'))) ?>
        <?php echo Html::cssFile('@web/css/vendor/bootstrap.css?v=' . filemtime(Yii::getAlias('@webroot/css/vendor/bootstrap.css'))) ?>
        <?php echo Html::cssFile('@web/css/vendor/flexslider.css?v=' . filemtime(Yii::getAlias('@webroot/css/vendor/flexslider.css'))) ?>
        <?php echo Html::cssFile('@web/css/vendor/font-awesome.css?v=' . filemtime(Yii::getAlias('@webroot/css/vendor/font-awesome.css'))) ?>
        <?php echo Html::cssFile('@web/css/vendor/jquery.bxslider.css?v=' . filemtime(Yii::getAlias('@webroot/css/vendor/jquery.bxslider.css'))) ?>
        <?php echo Html::cssFile('@web/css/vendor/magnific-popup.css?v=' . filemtime(Yii::getAlias('@webroot/css/vendor/magnific-popup.css'))) ?>
        <?php echo Html::cssFile('@web/css/vendor/owl.carousel.css?v=' . filemtime(Yii::getAlias('@webroot/css/vendor/owl.carousel.css'))) ?>
        <?php echo Html::cssFile('@web/css/vendor/owl.theme.css?v=' . filemtime(Yii::getAlias('@webroot/css/vendor/owl.theme.css'))) ?>
        <?php echo Html::cssFile('@web/css/vendor/settings.css?v=' . filemtime(Yii::getAlias('@webroot/css/vendor/settings.css'))) ?>
        <?php echo Html::cssFile('@web/css/style.css?v=' . filemtime(Yii::getAlias('@webroot/css/style.css'))) ?>
    <?php } else { ?>
        <?php echo Html::cssFile('@web/css/vendor/bootstrap.min.css?v=' . filemtime(Yii::getAlias('@webroot/css/vendor/bootstrap.min.css'))) ?>
        <?php echo Html::cssFile('@web/css/vendor/font-awesome.css?v=' . filemtime(Yii::getAlias('@webroot/css/vendor/font-awesome.css'))) ?>
        <?php echo Html::cssFile('@web/css/vendor/dataTables.bootstrap4.css?v=' . filemtime(Yii::getAlias('@webroot/css/vendor/dataTables.bootstrap4.css'))) ?>
        <?php echo Html::cssFile('@web/css/vendor/sb-admin.css?v=' . filemtime(Yii::getAlias('@webroot/css/vendor/sb-admin.css'))) ?>
    <?php } ?>
    <?php echo Html::csrfMetaTags() ?>
    <title><?php echo Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="preloader">
    <div id="loader"></div>
</div>
<div id="container">
    <?php if (Yii::$app->user->isGuest) { ?>
        <?php echo $this->render('header') ?>
        <?php echo $content ?>
        <?php echo $this->render('footer') ?>
    <?php } else { ?>
        <?php echo $this->render('/panel/header') ?>
        <div class="container-fluid">
            <?php echo $content ?>
        </div>
        <?php echo $this->render('/panel/footer') ?>
    <?php } ?>
</div>
<?php if (Yii::$app->user->isGuest) { ?>
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
<?php } else { ?>
    <?php echo Html::jsFile('@web/js/all.js?v=' . filemtime(Yii::getAlias('@webroot/js/all.js'))) ?>
    <?php echo Html::jsFile('@web/js/vendor/jquery.min.js?v=' . filemtime(Yii::getAlias('@webroot/js/vendor/jquery.min.js'))) ?>
    <?php echo Html::jsFile('@web/js/vendor/bootstrap.bundle.min.js?v=' . filemtime(Yii::getAlias('@webroot/js/vendor/bootstrap.bundle.min.js'))) ?>
    <?php echo Html::jsFile('@web/js/vendor/sb-admin.min.js?v=' . filemtime(Yii::getAlias('@webroot/js/vendor/sb-admin.min.js'))) ?>
<?php } ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
