<div class="brand">Buga</div>
<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
    
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
            <a class="navbar-brand" href="index.html">Buga</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul id="lineShort"  class="nav navbar-nav">
                <li>
                    <a  href="index"><span style="font-size: 23px;" class="homeIcon glyphicon glyphicon-home"></span></a>
                </li>
                <li class="dropdown">
                    <a class="navPer" style="padding-right: 0px;padding-left: 0px;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo url("home/categorias") ?>">Todas</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo url("home/categorias/det") ?>">Deporte</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="">Religion</a></li>
                        <li role="separator" class="divider"></li>
                    </ul>
                </li>
                <li>
                    <a class="navPer" style="padding-right: 0px;padding-left: 0px;" href="<?php echo url("home/sitios") ?>">Sitios</a>
                </li>
                <li>
                    <a class="navPer" style="padding-right: 0px;padding-left: 0px;"href="<?php echo url("home/eventos") ?>">Eventos</a>
                </li>
                <?php if ((Session::has("usuarioLogueado") !== true) && (Session::has("usuarioAdmin") !== true)): ?>
                <li>
                    <a class="navPer" style="padding-right: 0px;padding-left: 0px;"href="<?php echo url("login") ?>">Ingresar</a>
                </li>
                <li>
                    <a class="navPer" style="padding-right: 0px;padding-left: 0px;" href="<?php echo url("registro") ?>" onClick="$('#loginbox').hide();
                            $('#signupbox').show()">Registrar</a>
                </li>
                <?php elseif (Session::has("usuarioLogueado")): ?>
                <?php if ((Session::get("usuarioGenero")=== 'M')): ?>
                        <img src="<?php echo asset("img/Male.png") ?>" /><?php echo ' ' . Session::get("usuarioLogueado") ?></a>
                        <?php else: ?>
                       <img src="<?php echo asset("img/Female.png") ?>" /><?php echo ' ' . Session::get("usuarioLogueado") ?></a>
                       <?php endif ?>
                <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo url("itinerario") ?>">Mi itinerario</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo url("usuario/editar") ?>">Configuración</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo url("registro/logout") ?>">Cerrar Sesión</a></li>
                            </ul>
                        </li>

            </ul>
            <ul id="ejm2"  class="nav navbar-nav">
            <?php elseif (Session::has("usuarioAdmin")): ?>
            <?php if ((Session::get("usuarioGenero")=== 'M')): ?>
                        <img src="<?php echo asset("img/Male.png") ?>" /><?php echo ' ' . Session::get("usuarioAdmin") ?>
                        <?php else: ?>
                       <img src="<?php echo asset("img/Female.png") ?>" /><?php echo ' ' . Session::get("usuarioAdmin") ?>
                       <?php endif ?>
            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo url("admin/panel/bienvenido") ?>">Panel de control</a></li>
                                <li role="separator" class="divider"></li>
                                
                                <li><a href="<?php echo url("registro/logout") ?>">Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    </ul>
            <?php endif ?>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

