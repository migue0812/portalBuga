<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>
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
             
                <form role="form">
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label>Nombre</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Correo Electrónico</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="sel1">Pqrs</label>
                            <select class="form-control" id="sel1">
                                <option>Pregunta</option>
                                <option>Queja</option>
                                <option>Reclamacion</option>
                                <option>No Se e_e"</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-lg-12">
                            <label>Mensaje</label>
                            <textarea class="form-control" rows="6"></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="hidden" name="save" value="contact">
                            <button type="submit" class="btn btn-default">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
            <?php include ("/../../Templates/Frontend/footer.php") ?>
            <?php include ("/../../Templates/Frontend/foot.php") ?>