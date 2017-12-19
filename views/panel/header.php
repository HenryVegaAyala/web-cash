<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo Url::home() ?>">Panel Principal - JetCash</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Inicio">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#home"
                   data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-sitemap"></i>
                    <span class="nav-link-text">Incio</span>
                </a>
                <ul class="sidenav-second-level collapse" id="home">
                    <li>
                        <a href="#">Inicio</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Que es JetCash">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#jetcashDescriptions"
                   data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-sitemap"></i>
                    <span class="nav-link-text">Información de JetCash</span>
                </a>
                <ul class="sidenav-second-level collapse" id="jetcashDescriptions">
                    <li>
                        <a href="#">Como lo Obtengo</a>
                    </li>
                    <li>
                        <a href="#">Como lo puedo realizar</a>
                    </li>
                    <li>
                        <a href="#">Que tarifas manejar</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Terminos y Condiciones">
                <a class="nav-link" href="charts.html">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Terminos y Condiciones</span>
                </a>
            </li>
            <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Servicios Adicionales">-->
            <!--    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti"-->
            <!--       data-parent="#exampleAccordion">-->
            <!--        <i class="fa fa-fw fa-sitemap"></i>-->
            <!--        <span class="nav-link-text">Menu Levels</span>-->
            <!--    </a>-->
            <!--    <ul class="sidenav-second-level collapse" id="collapseMulti">-->
            <!--        <li>-->
            <!--            <a href="#">Second Level Item</a>-->
            <!--        </li>-->
            <!--        <li>-->
            <!--            <a href="#">Second Level Item</a>-->
            <!--        </li>-->
            <!--        <li>-->
            <!--            <a href="#">Second Level Item</a>-->
            <!--        </li>-->
            <!--        <li>-->
            <!--            <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third-->
            <!--                Level</a>-->
            <!--            <ul class="sidenav-third-level collapse" id="collapseMulti2">-->
            <!--                <li>-->
            <!--                    <a href="#">Third Level Item</a>-->
            <!--                </li>-->
            <!--                <li>-->
            <!--                    <a href="#">Third Level Item</a>-->
            <!--                </li>-->
            <!--                <li>-->
            <!--                    <a href="#">Third Level Item</a>-->
            <!--                </li>-->
            <!--            </ul>-->
            <!--        </li>-->
            <!--    </ul>-->
            <!--</li>-->
            <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Preguntas Frecuentes">-->
            <!--    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti"-->
            <!--       data-parent="#exampleAccordion">-->
            <!--        <i class="fa fa-fw fa-sitemap"></i>-->
            <!--        <span class="nav-link-text">Menu Levels</span>-->
            <!--    </a>-->
            <!--    <ul class="sidenav-second-level collapse" id="collapseMulti">-->
            <!--        <li>-->
            <!--            <a href="#">Second Level Item</a>-->
            <!--        </li>-->
            <!--        <li>-->
            <!--            <a href="#">Second Level Item</a>-->
            <!--        </li>-->
            <!--        <li>-->
            <!--            <a href="#">Second Level Item</a>-->
            <!--        </li>-->
            <!--        <li>-->
            <!--            <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third-->
            <!--                Level</a>-->
            <!--            <ul class="sidenav-third-level collapse" id="collapseMulti2">-->
            <!--                <li>-->
            <!--                    <a href="#">Third Level Item</a>-->
            <!--                </li>-->
            <!--                <li>-->
            <!--                    <a href="#">Third Level Item</a>-->
            <!--                </li>-->
            <!--                <li>-->
            <!--                    <a href="#">Third Level Item</a>-->
            <!--                </li>-->
            <!--            </ul>-->
            <!--        </li>-->
            <!--    </ul>-->
            <!--</li>-->
            <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Agentes">-->
            <!--    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti"-->
            <!--       data-parent="#exampleAccordion">-->
            <!--        <i class="fa fa-fw fa-sitemap"></i>-->
            <!--        <span class="nav-link-text">Menu Levels</span>-->
            <!--    </a>-->
            <!--    <ul class="sidenav-second-level collapse" id="collapseMulti">-->
            <!--        <li>-->
            <!--            <a href="#">Second Level Item</a>-->
            <!--        </li>-->
            <!--        <li>-->
            <!--            <a href="#">Second Level Item</a>-->
            <!--        </li>-->
            <!--        <li>-->
            <!--            <a href="#">Second Level Item</a>-->
            <!--        </li>-->
            <!--        <li>-->
            <!--            <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third-->
            <!--                Level</a>-->
            <!--            <ul class="sidenav-third-level collapse" id="collapseMulti2">-->
            <!--                <li>-->
            <!--                    <a href="#">Third Level Item</a>-->
            <!--                </li>-->
            <!--                <li>-->
            <!--                    <a href="#">Third Level Item</a>-->
            <!--                </li>-->
            <!--                <li>-->
            <!--                    <a href="#">Third Level Item</a>-->
            <!--                </li>-->
            <!--            </ul>-->
            <!--        </li>-->
            <!--    </ul>-->
            <!--</li>-->
            <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Clientes">-->
            <!--    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti"-->
            <!--       data-parent="#exampleAccordion">-->
            <!--        <i class="fa fa-fw fa-sitemap"></i>-->
            <!--        <span class="nav-link-text">Menu Levels</span>-->
            <!--    </a>-->
            <!--    <ul class="sidenav-second-level collapse" id="collapseMulti">-->
            <!--        <li>-->
            <!--            <a href="#">Second Level Item</a>-->
            <!--        </li>-->
            <!--        <li>-->
            <!--            <a href="#">Second Level Item</a>-->
            <!--        </li>-->
            <!--        <li>-->
            <!--            <a href="#">Second Level Item</a>-->
            <!--        </li>-->
            <!--        <li>-->
            <!--            <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third-->
            <!--                Level</a>-->
            <!--            <ul class="sidenav-third-level collapse" id="collapseMulti2">-->
            <!--                <li>-->
            <!--                    <a href="#">Third Level Item</a>-->
            <!--                </li>-->
            <!--                <li>-->
            <!--                    <a href="#">Third Level Item</a>-->
            <!--                </li>-->
            <!--                <li>-->
            <!--                    <a href="#">Third Level Item</a>-->
            <!--                </li>-->
            <!--            </ul>-->
            <!--        </li>-->
            <!--    </ul>-->
            <!--</li>-->
            <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Comercios">-->
            <!--    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti"-->
            <!--       data-parent="#exampleAccordion">-->
            <!--        <i class="fa fa-fw fa-sitemap"></i>-->
            <!--        <span class="nav-link-text">Menu Levels</span>-->
            <!--    </a>-->
            <!--    <ul class="sidenav-second-level collapse" id="collapseMulti">-->
            <!--        <li>-->
            <!--            <a href="#">Second Level Item</a>-->
            <!--        </li>-->
            <!--        <li>-->
            <!--            <a href="#">Second Level Item</a>-->
            <!--        </li>-->
            <!--        <li>-->
            <!--            <a href="#">Second Level Item</a>-->
            <!--        </li>-->
            <!--        <li>-->
            <!--            <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third-->
            <!--                Level</a>-->
            <!--            <ul class="sidenav-third-level collapse" id="collapseMulti2">-->
            <!--                <li>-->
            <!--                    <a href="#">Third Level Item</a>-->
            <!--                </li>-->
            <!--                <li>-->
            <!--                    <a href="#">Third Level Item</a>-->
            <!--                </li>-->
            <!--                <li>-->
            <!--                    <a href="#">Third Level Item</a>-->
            <!--                </li>-->
            <!--            </ul>-->
            <!--        </li>-->
            <!--    </ul>-->
            <!--</li>-->
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <?php echo Html::a('Cerrar Sesión', ['/site/logout', 'id' => Yii::$app->user->identity->id],
                    ['data-method' => 'post', 'class' => 'nav-link']) ?>
            </li>
        </ul>
    </div>
</nav>
<div class="content-wrapper">
