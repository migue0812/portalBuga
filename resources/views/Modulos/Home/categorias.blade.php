@include('Templates.Frontend.head')
@include('Templates.Frontend.header')

<!-- Pages Content -->
<div class="container">
    <div class="row">
        <div class="box">
            <!-- Page Header -->
            <div class="col-lg-12">
                <div class="visitNav">
                    <div>
                        <h2 class="text-center ">Categorias</h2>
                    </div>
                </div>
                <hr class="tagline-divider-cont">
            </div>
            <!-- /.row -->

            <!-- Projects Row -->
            <div class="row">
                <!-- Categoria 1-->
                <?php
                foreach ($categorias as $categoria):
                    ?>
                    <div class="col-md-4 portfolio-item">
                        <a href="#">
                            <img class="img-responsive" src="<?php echo asset("$categoria->img_ruta") ?>" alt="">
                        </a>
                        <h3>
                            <a href="<?php echo url("home/categorias/det/" . $categoria->cat_id) ?>"><?php echo $categoria->cat_nombre ?></a>
                        </h3>
                        <p class="text-justify"><?php echo ((strlen($categoria->cat_descripcion) > 100) ? substr(($categoria->cat_descripcion), 0, 100) . " ..." : ($categoria->cat_descripcion)) ?></p>
                    </div>
                <?php endforeach ?>
                <!-- /.row -->

                <!-- Projects Row -->
                <
                <div id="fb-root"></div>
                <script>(function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id))
                            return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.6";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>

                <div class="fb-comments" data-href="https://www.facebook.com/groups/860979787324031/?fref=ts" data-numposts="5"></div>
            </div>

            <!-- /.container -->
            @include('Templates.Frontend.footer')
            @include('Templates.Frontend.foot')
