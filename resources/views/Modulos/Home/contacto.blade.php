@include('Templates.Frontend.head')
@include('Templates.Frontend.header')
<div class="container">
    <div class="row">
        <div class="box">

            <div class="clearfix"></div>

            <div class="col-lg-12">
                <div class="col-lg-12 desarrollo">
                    <div class="contacto">
                        <div>
                            <h2 style="text-align: center;">Contactanos</h2>
                        </div>
                    </div>
                    <hr class="tagline-divider-cont">
                </div>
             @if (Session::has("mensaje"))
                    <div class="alert alert-success alert-dismissible center-block" role="alert">{{Session::get("mensaje")}}</div>
                    @endif
                <form role="form" method="post" action="{{url('home/contacto/crear')}}">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre">
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Correo Electrónico</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="sel1">Motivo</label>
                            <select class="form-control" id="sel1" name="motivo" id="motivo">
                                <option value="Pregunta">Pregunta</option>
                                <option value="Queja">Queja</option>
                                <option value="Reclamación">Reclamación</option>
                                <option value="Sugerencia">Sugerencia</option>
                                <option value="Felicitación">Felicitación</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-lg-12">
                            <label>Mensaje</label>
                            <textarea class="form-control" rows="6" name="descripcion" id=""></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="hidden" name="save" value="contact">
                            <button type="submit" class="btn btn-default">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
 @include('Templates.Frontend.footer')
 @include('Templates.Frontend.foot')