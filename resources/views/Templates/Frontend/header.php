<div class="animated brand">Buga</div>
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
            <ul class="nav navbar-nav">
                <li>
                    <a  href="index"><span style="font-size: 23px;" class="homeIcon glyphicon glyphicon-home"></span></a>
                </li>
                <li class="dropdown">
                    <a style="padding-right: 0px;padding-left: 0px;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo url("home/categorias") ?>">Todas</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?php echo url("home/categorias/det") ?>">Deporte</a></li>
                        <li><a href="">Religion</a></li>
                    </ul>
                </li>
                <li>
                    <a style="padding-right: 0px;"href="<?php echo url("home/sitios") ?>">Sitios</a>
                </li>
                <li>
                    <a style="padding-right: 0px;"href="<?php echo url("home/eventos") ?>">Eventos</a>
                </li>
                <li>
                    <a style="padding-right: 0px;"href="<?php echo url("registro") ?>">Ingresar</a>
                </li>
                <li>
                    <a style="padding-right: 0px;" href="<?php echo url("registro") ?>" onClick="$('#loginbox').hide();
                            $('#signupbox').show()">Registrar</a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

