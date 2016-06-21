<?php
$categorias = DB::select("SELECT * FROM bdp_categoria, bdp_imagen WHERE bdp_imagen.cat_id = bdp_categoria.cat_id");
?>
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
            <a class="navbar-brand" href="<?php echo url("home/index") ?>">Buga</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul id="lineShort"  class="nav navbar-nav">
                <li class="hidden-xs"  >
                    <a  href="<?php echo url("home/index") ?>"><span style="font-size: 20px;" class="homeIcon glyphicon glyphicon-home" title="Inicio"></span></a>
                </li>
                <?php if ((Session::has("usuarioLogueado") !== true) && (Session::has("usuarioAdmin") !== true)): ?>
                <?php elseif (Session::has("usuarioLogueado") | (Session::has("usuarioAdmin"))): ?>
                    <?php if ((Session::get("usuarioGenero") === 'M')): ?>
                        <li class="centerImg visible-xs">
                            <img class="imgTam" src="<?php echo asset("img/Male.png") ?>" />
                        </li>
                    <?php else: ?>
                        <li class="centerImg visible-xs">
                            <img class="imgTam" src="<?php echo asset("img/Female.png") ?>" />
                        </li>
                    <?php endif ?>
                <?php endif ?>
                <li class="dropdown navPerCat" >
                    <a style="padding-right: 0px;padding-left: 0px;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Categorias">Categorias<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo url("home/categorias") ?>" title="Todas">Todas</a></li>
                        <li role="separator" class="divider"></li>
                        <?php foreach ($categorias as $categoria): ?>
                            <li><a href="<?php echo url("home/categorias/det/" . $categoria->cat_id) ?>"><?php echo $categoria->cat_nombre ?></a></li>
                        <?php endforeach ?>
                    </ul>
                </li>
                <li class="navPer">
                    <a  style="padding-right: 0px;padding-left: 0px;" href="<?php echo url("home/sitios?page=1") ?>" title="Sitios">Sitios</a>
                </li>
                <li class="navPer">
                    <a  style="padding-right: 0px;padding-left: 0px;"href="<?php echo url("home/eventos?page=1") ?> " title="Eventos">Eventos</a>
                </li>
                <?php if ((Session::has("usuarioLogueado") !== true) && (Session::has("usuarioAdmin") !== true)): ?>
                    <li class="navPer">
                        <a  style="padding-right: 0px;padding-left: 0px;"href="<?php echo url("login") ?>" title="Ingresar">Ingresar</a>
                    </li>
                    <li class="navPer">
                        <a style="padding-right: 0px;padding-left: 0px;" href="<?php echo url("registro") ?>"title="Registar" onClick="$('#loginbox').hide();
                                $('#signupbox').show()">Registrar</a>
                    </li>
                <?php elseif (Session::has("usuarioLogueado")): ?>
                    <?php if ((Session::get("usuarioGenero") === 'M')): ?>
                        <li class="navPerImg hidden-xs">
                            <?php $foto = Session::get("usuarioAvatar");
                            if (!empty($foto)): ?>
                            <img class="imgTam" src="<?php echo asset("$foto") ?>" />
                            <?php else: ?>
                            <img class="imgTam" src="<?php echo asset("img/Male.png") ?>" />
                        <?php endif ?>
                        </li>
                        <li class="dropdown navPer" >
                            <a style="padding-right: 0px;padding-left: 0px;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Categorias"><?php echo ' ' . Session::get("usuarioLogueado") ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo url("itinerario") ?>" title="Itinerario">Mi itinerario</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo url("usuario/cuenta") ?>" title="Configuración">Configuración</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo url("registro/logout") ?>" title="Cerrar Sesión">Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="navPerImg hidden-xs">
                            <?php $foto = Session::get("usuarioAvatar");
                            if (!empty($foto)): ?>
                            <img class="imgTam" src="<?php echo asset("$foto") ?>" />
                            <?php else: ?>
                            <img class="imgTam" src="<?php echo asset("img/Female.png") ?>" />
                        <?php endif ?>
                        </li>
                        <li class="dropdown navPer" >
                            <a style="padding-right: 0px;padding-left: 0px;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Categorias"><?php echo ' ' . Session::get("usuarioLogueado") ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo url("itinerario") ?>" title="Mi itinerario">Mi itinerario</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo url("usuario/cuenta") ?>" title="Configuración">Configuración</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo url("registro/logout") ?>" title="Cerrar Sesión">Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    <?php endif ?>

                <?php elseif (Session::has("usuarioAdmin")): ?>
                    <?php if ((Session::get("usuarioGenero") === 'M')): ?>
                        <li class="navPerImg hidden-xs">
                            <img class="imgTam" src="<?php echo asset("img/Male.png") ?>" />
                        </li>
                        <li class="dropdown navPer" >
                            <a style="padding-right: 0px;padding-left: 0px;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Categorias"><?php echo ' ' . Session::get("usuarioAdmin") ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo url("admin/bienvenido") ?>" title="Panel de control">Panel de control</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo url("registro/logout") ?>" title="Cerrar Sesión">Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="navPerImg hidden-xs">
                            <img class="imgTam" src="<?php echo asset("img/Female.png") ?>" />
                        </li>
                        <li class="dropdown navPer" >
                            <a style="padding-right: 0px;padding-left: 0px;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" title="Categorias"><?php echo ' ' . Session::get("usuarioAdmin") ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo url("admin/bienvenido") ?>" title="Panel de control">Panel de control</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo url("registro/logout") ?>" title="Cerrar Sesión">Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    <?php endif ?>
                <?php endif ?>
                <li class="pull-left">
                    <a title="Busqueda">
                        <form action="<?php echo url("home/busqueda/buscar") ?>" method="post">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <input type="search" id="nombre" name="nombre" placeholder="Buscar" title="Busqueda">
                        </form>
                    </a>
                </li>
            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

