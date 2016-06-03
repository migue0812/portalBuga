@include('Templates.Frontend.register')

<div class="container">


    <h2 class="title"></h2>

    <!--  ----------------------------------------------------------------------->

    <!--  Iniciar sesion-->

    <div id="signupbox" class="regbox  col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info" >

            <div class="panel-heading">
                <div class="panel-title">Recuperar Contraseña</div>

            </div> 
            <div  class="panel-body pad" >
                 @if (Session::has("correoNoExiste"))
                <div class="alert alert-danger center-block" role="alert">{{Session::get("correoNoExiste")}}</div>
                @endif 
                @if (Session::has("correoEnviado"))
                <div class="alert alert-info center-block" role="alert">{{Session::get("correoEnviado")}}</div>
                @endif 
                <form id="loginform" class="form-horizontal" role="form" method="post" action="{{url('usuario/cuenta/recupass')}}">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="input-group ingre">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="email" class="form-control" name="email" id="email" value="" placeholder="Escribe tu correo">                                        
                    </div>

                    <!--<div class="input-group">
            <div class="checkbox">
              <label>
                <input id="login-remember" type="checkbox" name="remember" value="1"> Recordarme
              </label>
            </div>
          </div>-->
                    <div class="form-group marg">
                        <div class="col-sm-12 controls">
                            <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Enviar</button>
                        </div>
                    </div>


                    <div class="col-sm-12">
                        <a id="btn-volver" href="{{url('home/index')}}" class="btn btn-info"><i class="fa fa-mail-reply"> Volver Inicio</i></a>
                    </div>
                </form>     
            </div>                     
        </div> 
    </div> 

</div>


@include('Templates.Frontend.foot')
