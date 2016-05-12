@include('Templates.Frontend.register')

<div class="container">
  
  <!--  botones red social-->
  <div class="social">
    <span class="line"></span>
    <ul>
      <li class="facebook">
        <a href="" target="_blank">
          <i class="fa fa-facebook fa-2x"></i>
        </a>
      </li>
      <li class="twitter">
        <a href="" target="_blank">
          <i class="fa fa-twitter fa-2x"></i>
        </a>
      </li>
      <li class="youtube">
        <a href="#" target="_blank">
          <i class="fa fa-youtube fa-2x"></i>
        </a>
      </li>
      <li class="instagram">
        <a href="#" target="_blank">
          <i class="fa fa-instagram fa-2x"></i>
        </a>
      </li>
      <li class="pinterest">
        <a href="#" target="_blank">
          <i class="fa fa-pinterest fa-2x"></i>
        </a>
      </li>
    </ul>
  </div>

  <h2 class="title">Ingresa Con</h2>

  <!-- FIN botones red social-->

  <!--  ----------------------------------------------------------------------->

  <!--  Iniciar sesion-->

  <div id="signupbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info" >

      <div class="panel-heading">
        <div class="panel-title">Login</div>
        <div class="forget">
          <a class="cr" href="#">Se te olvido tu contraseña?</a>
        </div>
      </div> 

      <div  class="panel-body pad" >
        <form id="loginform" class="form-horizontal" role="form" method="post" action="login">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

          <div class="input-group ingre">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input id="login-username" type="email" class="form-control" name="email" id="email" value="" placeholder="Example@gmail.com">                                        
          </div>

          <div class="input-group ingre">
            <span class="input-group-addon"><i class="fa fa-key"></i></span>
            <input id="login-password" type="password" class="form-control" name="password" id="password" placeholder="******">
          </div>

          <div class="input-group">
            <div class="checkbox">
              <label>
                <input id="login-remember" type="checkbox" name="remember" value="1"> Recordarme
              </label>
            </div>
          </div>

          <div class="form-group marg">
            <div class="col-sm-12 controls">
              <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Entrar</button>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-12 control">
              <div class="account">
                No tienes una cuenta! 
                <a href="#" onClick="$('#signupbox').hide();
                    $('#loginbox').show()">
                  Registrate Aqui!!
                </a>
              </div>
            </div>
          </div> 

          <div class="col-sm-12">
            <a id="btn-volver" href="{{url('home/index')}}" class="btn btn-info"><i class="fa fa-mail-reply"> Volver Inicio</i></a>
          </div>
        </form>     
      </div>                     
    </div> 
  </div> 



  <!--  Registro-->

  <div id="loginbox" class="regbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="panel-title">Registrese</div>
        <div class="signinlink" style="">
          <a href="#" class="cr" onclick="$('#loginbox').hide(); $('#signupbox').show()">Iniciar sesion</a>
        </div>
      </div>  
      <div class="panel-body" >
        <form id="signupform" class="form-horizontal" role="form">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

          <div class="panel-title text-center title">Datos Usuario</div>

          <hr>

          <div class="input-group ingre">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Ingrese Nombre Usuario">                                        
          </div>

          <div class="input-group ingre">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            <input type="text" class="form-control" name="email" id="email" placeholder="Example@buga.com">                                        
          </div>

          <div class="input-group ingre">
            <span class="input-group-addon"><i class="fa fa-key"></i></span>
            <input type="text" class="form-control " name="password" id="password" placeholder="Ingrese Contraseña">                                        
          </div>

          <div class="input-group ingre">
            <span class="input-group-addon"><i class="fa fa-chain-broken"></i></span>
            <input type="text" class="form-control" name="password" id="password" placeholder="Confirmar Contraseña">                                        
          </div>

          <hr>
          <div class="panel-title text-center title">Datos Personales</div>

          <hr>


          <div class="form-group">
            <label for="nombre" class="col-md-12 ">Nombre</label>
            <div class="col-md-12">
              <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese Nombre">
            </div>
          </div>

          <div class="form-group">
            <label for="apellidos" class="col-md-12">Apellidos</label>
            <div class="col-md-12">
              <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Ingrese Apellidos">
            </div>
          </div>

          <div class="form-group">
            <label for="fecha_nacimiento" class="col-md-12">Fecha De Nacimiento</label>
            <div class="col-md-12">
              <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Fecha Nacimiento" />
            </div>
          </div>

          <div class="form-group">
            <label for="genero" class="col-md-12">Genero</label>
            <div class="col-md-12">
              <select class="form-control" name="" id="">
                <option value="">hombre</option>
                <option value="">mujer</option>
              </select>
            </div>
          </div>


          <div class="form-group">                                    
            <div class="col-md-12">
              <button type="button" class="btn btn-success center-block"><i class="fa fa-sign-in"></i> &nbsp Ingresar</button>
            </div>
          </div>

          <hr>

          <div class="col-sm-12">
            <a id="btn-volver" href="{{url('home/index')}}" class="btn btn-info"><i class="fa fa-mail-reply"> Volver Inicio</i></a>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>


@include('Templates.Frontend.foot')