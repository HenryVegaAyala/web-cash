<?php

use yii\helpers\Url;

?>

<header class="clearfix">
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo Url::home() ?>">
                    <img alt="" src="images/logo/logo.png" style="min-width: 120px; width: 120px">
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="drop"><a class="active" href="./">Inicio</a></li>
                    <li class="drop"><a href="/que-es-jetcash">¿Qué es JetCash?</a>
                        <ul class="drop-down">
                            <li><a href="/como-lo-obtengo">¿Cómo lo obtengo?</a></li>
                            <li><a href="/que-puedo-realizar">¿Qué puedo realizar?</a></li>
                            <li><a href="/que-tarifas-manejan">¿Qué tarifas manejan?</a></li>
                        </ul>
                    </li>
                    <li><a href="/servicios-adicionales">Servicios adicionales</a>
                    </li>
                    <li><a href="/preguntas-frecuentes">Preguntas frecuentes</a></li>
                    <li><a href="/agentes">Agentes</a></li>
                    <li><a href="/clientes">Clientes</a></li>
                    <li><a href="/comercios">Comercios</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>