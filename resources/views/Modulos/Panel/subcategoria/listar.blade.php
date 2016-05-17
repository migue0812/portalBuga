
<script>
    $(document).ready(function () {
        console.log("document loaded");
        $('.usuario').addClass('active');

    });

    $(window).load(function () {
        console.log("window loaded");
        $('.usuario').addClass('active');
    });

</script>
@include('Templates.Backend.headPanel')
@include('Templates.Backend.asidePanel')

        <!-- MENU INICIO-->
<!--        <div>
        <li class="mt">
          <a href="{{url('admin/bienvenido')}}">
            <i class="fa fa-dashboard"></i>
            <span>Bienvenido</span>
          </a>
        </li>

        <li class="sub-menu">
          <a href="javascript:;" >
            <i class="fa fa-desktop"></i>
            <span>Categoria</span>
          </a>
          <ul class="sub">
            <li><a href="{{url('admin/categoria/crear')}}">Crear</a></li>
            <li><a href="{{url('admin/categoria/editar')}}">Editar</a></li>
            <li><a href="{{url('admin/categoria/reporte')}}">Reporte</a></li>
            <li><a href="{{url('admin/categoria/listar')}}">Listar</a></li>
          </ul>
        </li>
        
        <li class="sub-menu">
          <a class="active" href="javascript:;" >
            <i class="fa fa-cogs"></i>
            <span>Subcategoria</span>
          </a>
          <ul class="sub">
            <li><a  href="{{url('admin/subcategoria/crear')}}">Crear</a></li>
            <li><a  href="{{url('admin/subcategoria/editar')}}">Editar</a></li>
            <li><a  href="{{url('admin/subcategoria/reporte')}}">Reporte</a></li>
            <li class="active"><a  href="{{url('admin/subcategoria/listar')}}">Listar</a></li>
          </ul>
        </li>
        
        <li class="sub-menu">
          <a href="javascript:;" >
            <i class="fa fa-book"></i>
            <span>Sitio</span>
          </a>
          <ul class="sub">
            <li><a  href="{{url('admin/sitio/crear')}}">Crear</a></li>
            <li><a  href="{{url('admin/sitio/editar')}}">Editar</a></li>
            <li><a  href="{{url('admin/sitio/reporte')}}">Reporte</a></li>
            <li><a  href="{{url('admin/sitio/listar')}}">Listar</a></li>
          </ul>
        </li>
        
        <li class="sub-menu">
          <a href="javascript:;" >
            <i class="fa fa-tasks"></i>
            <span>Evento</span>
          </a>
          <ul class="sub">
            <li><a  href="{{url('admin/evento/crear')}}">Crear</a></li>
            <li><a  href="{{url('admin/evento/editar')}}">Editar</a></li>
            <li><a  href="{{url('admin/evento/reporte')}}">Reporte</a></li>
            <li><a  href="{{url('admin/evento/listar')}}">Listar</a></li>
          </ul>
        </li>
        
        <li class="sub-menu">
          <a href="javascript:;" >
            <i class="fa fa-th"></i>
            <span>Configuracion</span>
          </a>
          <ul class="sub">
            <li><a  href="{{url('admin/configurar/crear')}}">Crear</a></li>
            <li><a  href="{{url('admin/configurar/editar')}}">Editar</a></li>
            <li><a  href="{{url('admin/configurar/reporte')}}">Reporte</a></li>
            <li><a  href="{{url('admin/configurar/listar')}}">Listar</a></li>
          </ul>
        </li>
      </ul>
       BARRA LATERAL MENU FIN
    </div>-->
 
  <!--BARRA LATERAL FIN-->

  <!-- **********************************************************************************************************************************************************
  MENU DE CONTENIDO
  *********************************************************************************************************************************************************** -->
  <!--CONTENIDO INICIO-->
  <section id="main-content">
    <section class="wrapper">

      <div class="row">
        <div class="col-lg-12 main-chart">
          <div class="row mt">
            <div class="col-md-12">
              <div class="content-panel table-responsive">
                <table class="table table-striped table-advance table-hover">
                  <h4><i class="fa fa-angle-right"></i> Subcategoria</h4>
                  <hr>
                  <thead>
                    <tr>
                      <th><i class="fa fa-bullhorn"></i> Nombre</th>
                      <th style="width: 400px"><i class="fa fa-bullhorn"></i> Descripcion </th>
                      <th><i class=" fa fa-edit"></i> Activo</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($subcategorias as $subcategoria) {?>
                    <tr>
                      <td><a href="basic_table.html#"><?php echo $subcategoria->subcat_nombre ?></a></td>

                      <td><a href="basic_table.html#"><?php echo ((strlen($subcategoria->subcat_descripcion) > 50) ? substr(($subcategoria->subcat_descripcion), 0, 100) . " ..." : ($subcategoria->subcat_descripcion)) ?></a></td>
                      
                      <td><?php $act= $subcategoria->est_id;if ($act== '1'):?><span class="label label-info label-mini">Si</span><?php else:?><span class="label label-warning label-mini">No</span><?php endif ?></td>
                      <td>
                        <a href="<?php echo url("admin/subcategoria/detalle/" . $subcategoria->subcat_id); ?>" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
                        <a href="<?php echo url("admin/subcategoria/editar/" . $subcategoria->subcat_id); ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo url("admin/subcategoria/desactivar/" . $subcategoria->subcat_id); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                      </td>
                    </tr>
                    
                    
<!--                    <tr>
                      <td>
                        <a href="basic_table.html#">Company Ltd</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">historia</a>
                      </td>

                      <td>
                        <span class="label label-info label-mini">Due</span>
                      </td>

                      <td>
                        <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <a href="basic_table.html#">Dashgum co</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">historia</a>
                      </td>

                      <td>
                        <span class="label label-warning label-mini">Due</span>
                      </td>
                      <td>
                        <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <a href="basic_table.html#">Another Co</a>
                      </td>

                      <td>
                        <a href="basic_table.html#">historia</a>
                      </td>

                      <td>
                        <span class="label label-success label-mini">Paid</span>
                      </td>

                      <td>
                        <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                        <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                      </td>
                    </tr>-->
                     <?php } ?>
                  </tbody>
                </table>
              </div><!-- /content-panel -->
            </div><!-- /col-md-12 -->
          </div>
        </div>
      </div>
    </section>
  </section>


</section>
<!--MENU CONTENIDO FIN-->

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

<script>
    $(document).ready(function () {
        console.log("document loaded");
        $('.usuario').addClass('active');

    });

    $(window).load(function () {
        console.log("window loaded");
        $('.usuario').addClass('active');
    });

</script>
@include('Templates.Backend.footPanel')




