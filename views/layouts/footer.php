<?php

use yii\helpers\Url;

?>
<footer>
    <div class="social-section">
        <ul class="social-icons triggerAnimation animated" data-animate="tada">
            <li>
                <span style="font-size: 20px; color: #FFFFFF">Llámanos <big>+51-1 611 5050</big> ó síguenos en:
                </span>
            </li>
            <li>
                <a class="facebook" target="_blank" href="https://www.facebook.com" >
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
        </ul>
    </div>

    <div class="up-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="widget footer-widget text-widget">
                        <h1>JetCash</h1>
                        <p>Empresa Peruana de Soluciones de Dinero Electrónico S.A. autorizada por la SBS.</p>
                        <p>Av. Camino Real 391-395, San Isidro</p>
                        <p>+51-1 611 5050</p>
                        <img src="images/logo/mc.png" alt="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="widget footer-widget text-widget">
                        <h1>Mapa de Sitio</h1>
                        <div class="col-md-6">
                            <ul style="list-style-type: none; margin-left: -30px; font-size: 14px">
                                <li><a href="<?php echo Url::home() ?>" style="color: #fff">Inicio</a></li>
                                <li><a href="/que-es-jet-cash" style="color: #fff">¿Qué es JetCash?</a></li>
                                <li><a href="/que-puedo-realizar" style="color: #fff">¿Qué puedo realizar?</a></li>
                                <li><a href="/sevicios-adicionales" style="color: #fff">Servicios adicionales</a></li>
                                <li><a href="/preguntas-frecuentes" style="color: #fff">Preguntas frecuentes</a></li>
                                <li><a href="/que-tarifas-manejan" style="color: #fff">Tarifario</a></li>
                                <li><a href="/agentes" style="color: #fff">Agentes</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul style="list-style-type: none; margin-left: -30px; font-size: 14px">
                                <li>
                                    <a href="/comercios" style="color: #fff">Comercios</a></li>
                                <li>
                                    <a href="/contactanos" style="color: #fff">Contáctanos</a></li>
                                <li>
                                    <a href="/atencion-al-cliente" style="color: #fff">Atención al Cliente</a></li>
                                <li>
                                    <a href="/libro-de-reclamaciones" style="color: #fff">Libro de Reclamaciones</a>
                                </li>
                                <li>
                                    <a href="/terminos-y-condiciones.pdf" target="_blank" style="color: #fff">Términos y
                                        Condiciones</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="widget footer-widget subscribe-widget">
                        <h1>Suscríbete</h1>
                        <p>Suscríbete y recibirás nuestras novedades y promociones semanales.</p>
                        <form class="subscribe-form">
                            <input type="text" id="e-mail" name="e-mail" placeholder="Email" required="required"/>
                            <input type="submit" id="submit" value="Suscribir"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12" style="background: #f9fafb; line-height:50px; vertical-align: middle">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p style="text-align: left">JetCash - Todos los derechos reservados 2017.</p>
                </div>
                <div class="col-md-6">
                    <p style="text-align: right">
                        <a href="https://www.indecopi.gob.pe/inicio" target="_blank">
                            <img src="images/logo/indecopi.png" style="height:30px">
                        </a>
                        <a href="http://www.sbs.gob.pe/" target="_blank">
                            <img src="images/logo/sbs.png" style="height:30px">
                        </a>

                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>