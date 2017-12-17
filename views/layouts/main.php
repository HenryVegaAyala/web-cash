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
        <?php echo $content ?>
    <?php } ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
