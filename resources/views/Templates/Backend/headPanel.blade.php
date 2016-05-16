<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Portal buga</title>

    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!--    <link href="{{asset('panel/css/zabuto_calendar.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('panel/js/gritter/css/jquery.gritter.css')}}" rel="stylesheet" type="text/css" />   -->
    <link href="{{asset('panel/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('panel/css/style-responsive.css')}}" rel="stylesheet">

    <script src="{{asset('panel/js/chart-master/Chart.js')}}"></script>

    <script type="text/javascript">
    $(function () {
        $("[data-toggle='tooltip']").tooltip();
    });
</script>


  </head>

  <body>


    <section id="container" >

      <!-- **********************************************************************************************************************************************************
      Contenido destacado BAR Y NOTIFICACIONES
      *********************************************************************************************************************************************************** -->

      <!-- Inicio de cabecera-->
      <header class="header black-bg">
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>

        <!--logo inico-->
        <a href="index.html" class="logo"><b>Panel Control</b></a>
        <!--logo fin-->

        <div class="nav notify-row" id="top_menu">


          <!--  inicio notificaciones -->
          <ul class="nav top-menu">                    
            <li id="header_inbox_bar" class="dropdown ">
              <a data-toggle="tooltip" data-placement="bottom" title="Pagina Principal" href="{{url('home/index')}}">
                <i class="fa fa-home"  ></i>
              </a>
            </li>

          </ul>
          <!--  Fin notificaciones-->

          <!--  inicio cerrar sesion-->
        </div>
        <div class="top-menu">
          <ul class="nav pull-right top-menu">
            <li><a class="logout" href="{{url("registro/logout")}}">cerrar sesion</a></li>
          </ul>
        </div>
      </header>
      <!--Fin cerrar sesion-->
      <!--FIN CABECERA-->

      <!-- **********************************************************************************************************************************************************
      MENÚ barra lateral principal
      *********************************************************************************************************************************************************** -->
      <!--BARRA LATERAL INICIO-->
      <aside>
        <div id="sidebar"  class="nav-collapse ">
          <!-- BARRA LATERAL MENU INICIO-->
          <ul class="sidebar-menu" id="nav-accordion">
            <!-- IMAGEN USUARIO INICIO-->
            <p class="centered"><a href="profile.html"><img src="{{asset('img/a05.png')}}" class="img-circle" width="60"></a></p>
            <h5 class="centered">TPS BUGA</h5>
            <!-- IMAGEN USUARIO FIN-->