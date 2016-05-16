@include('Templates.Backend.headPanel')


<!-- MENU INICIO-->

<li class="sub-menu">
  <a class="active" href="javascript:;" >
    <i class="fa fa-user"></i>
    <span>CUENTA</span>
  </a>
  <ul class="sub">
    <li><a  href="{{url('usuario/cuenta/editar')}}">Editar</a></li>
    <li><a  href="{{url('usuario/cuenta/eliminar')}}">Eliminar Cuenta</a></li> 
  </ul>
</li>

</ul>
<!-- BARRA LATERAL MENU FIN-->
</div>
</aside>
<!--BARRA LATERAL FIN-->

<!-- **********************************************************************************************************************************************************
MENU DE CONTENIDO
*********************************************************************************************************************************************************** -->
<!--CONTENIDO INICIO-->
<section id="main-content">
  <section class="wrapper">

    <div class="row">
      <div class="col-lg-12 main-chart">




      </div>
    </div><!-- /row -->
  </section>
</section>
<!--MENU CONTENIDO FIN-->
</section>

<!--PIE DE PAGINA INICIO-->

<footer class="site-footer">
  <div class="text-center">
    &copy; 2016 <a href="#">TPS BUGA</a>
    <a href="index.html#" class="go-top">
      <i class="fa fa-angle-up"></i>
    </a>
  </div>
</footer>
<!--PIE DE PAGINA FIN-->
@include('Templates.Backend.footPanel')




