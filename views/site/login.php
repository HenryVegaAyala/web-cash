<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\Pjax;

$this->title = 'Panel - Iniciar Sesión';
$descriptions = 'Panel - JetCash';
?>

<div id="content">
    <div class="section-content services-section">
        <div class="title-section">
            <div class="container">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h1>
                        <?php echo Html::encode($descriptions) ?>
                    </h1>

                    <?php
                    Pjax::begin();
                    $form = ActiveForm::begin(
                        [
                            'enableAjaxValidation' => false,
                            'enableClientValidation' => false,
                            'validateOnChange' => false,
                            'method' => 'post',
                            'options' => [
                                'class' => 'form-horizontal form-label-left',
                                'data-pjax' => true,
                            ],
                            'id' => 'login-form',
                        ]
                    ); ?>


                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <?php echo $form->field($model, 'username')
                            ->textInput(['class' => 'form-control', 'placeholder' => 'Usuario'])
                            ->label(false) ?>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <?php echo $form->field($model, 'password')
                            ->passwordInput(['class' => 'form-control', 'placeholder' => 'Contraseña'])
                            ->label(false) ?>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <?php echo Html::submitButton('Iniciar Sesión',
                            ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    </div>

                    <?php
                    ActiveForm::end();
                    Pjax::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>