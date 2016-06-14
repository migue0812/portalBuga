@include('Templates.Frontend.head')
@include('Templates.Frontend.header')

<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12 desarrollo">
                <div class="visitNav">
                    <div>
                        <h2 style="text-align: center;">Desarrollo</h2>
                    </div>
                </div>
                <hr class="tagline-divider-cont">
            </div>

            <!-- Page Content -->
            <div class="container text-center actividades">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <a href="https://www.facebook.com/BienestarCDTI/?fref=ts" title="CDTI SENA" target="_blank" class="info">
                            <div class="socialicons">
                                <img class="queHacerIcon img-circle img-responsive img-center" src="<?php echo asset("img/senaLog.png") ?>" alt="Descansar?">
                            </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <a href="<?php echo url("home/historia") ?>" class="info">
                            <div class="socialicons">
                                <img class="queHacerIcon  img-responsive img-center" src="<?php echo asset("img/histoBuga.png") ?>">
                            </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <a href="<?php echo url("home/sitios/det/9") ?>" class="info">
                            <div class="socialicons">
                                <img class="queHacerIcon img-circle img-responsive img-center" src="<?php echo asset("img/bugaLog.png") ?>" alt="Comer?">
                            </div>
                    </div>
                </div>
            </div>

            @include('Templates.Frontend.footer')
            @include('Templates.Frontend.foot')


