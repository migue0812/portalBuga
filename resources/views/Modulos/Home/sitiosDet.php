<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>

<script src="http://maps.google.com/maps/api/js?sensor=true&language=es"></script>
<link  href="http://code.google.com//apis/maps/documentation/javascript/examples/default.css" rel="stylesheet" type="text/css">
<style>
    #directions-panel {
        position: absolute;
    height: 450px;
    right: 0;
    width: 400px;
    overflow: auto;
    background-color: rgba(0,0,0,.85);
    z-index: 1;

    }
    
     .directions-outpanelc {
        position: absolute;
    height: 450px;
    right: 0;
    width: 400px;
    overflow: auto;
    
    z-index: 1;

    }
    .directions-outpanel {
        float: right;

    }
    #from-link{
        width: 100%;
        position: absolute;
    }

    #map-canvas {
        margin-right: 400px;
    }

    #map-canvas2 {
        margin-right: 400px;
    }
.bigmap{
       height: 450px;
    
    width: 450px !important; 
    }
    .smallmap{
       height: 150px !important;
    
    width: 400px !important; 
    }
/*    #control #from {
       max-width: 370px;
}*/

#control {
       left: 0 !important;
       white-space: nowrap !important;
}
.max-widthX{
     max-width: 330px;
}
    .gmnoprint img { max-width: none !important; }
    label.error {
    position: absolute;
    background-color: transparent;
    right: 5%;
    padding-top: 25px;
    font-size: 16px !important;
    color:red;
}
.gm-style-mtc div{
          top: 20px !important;
    left: -12px !important;
    position: relative !important;
    padding: 4px 4px 4px 4px !important;
    height: 16px;
    background-color: transparent !important;
}
.gm-style-mtc div div {
            top: 0px !important;
    width: 50px;
/*    left: 100px !important;*/
    padding: 0px 0px 0px 15px !important;
    position: absolute !important;
}
.gm-style-mtc div div span label{
    top:0px;
}
.gm-style .gm-style-mtc label{
    color: rgba(0, 0, 0, .6);
}
.gm-style-mtc div div div {
        
     padding: 4px 4px 4px 4px !important;
}
.gm-svpc {
/*    top: -6px !important;*/
}
.gmnoprint.gm-bundled-control.gm-bundled-control-on-bottom {
    top: 40px;
}
/*.gmnoprint {
    top: 30px !important;
}*/
    #control {
        background: #fff;
        padding: 5px;
        font-size: 14px;
        font-family: Arial;
        border: 1px solid #ccc;
        box-shadow: 0 2px 2px rgba(33, 33, 33, 0.4);
        display: none;
        
    }
/*    .gmnoprint{
    top:15px;
    }*/
   

    @media print {
        #map-canvas {
            height: 500px;
            margin: 0;
        }

        #directions-panel {
            float: none;
            width: auto;
        }
    }
    
     /*---------ver sitio google maps-------------*/
  /*---------ver sitio-------------*/
  /*---------ver sitio-------------*/
      
 #map {position:relative;
        width: 500px;
        height: 400px;
        margin-top: 10px;
      }
      #directions {
      position:relative;
      top: 300px;
    width: 38%;
    float: right; }
      
      .rutacont{
             /* display: none; */
    position: relative;
    display: inline;
    /* left: 490px; */
    /* top: 600px; */
    width: 400px;
          
      }      
      #fbshare{
  position: relative;
    top: -22px;
    }
  .dircont{
          display: inline;
    width: 450px;
  }
      
  .descricont{
    position:relative;  
    height: 100%
  }
  .diruti{
/*      position: relative;
    top: 130px;*/
padding: 0px 20px 0px 20px;
  }
  #directions-panel {
    
    width: 450px !important;
  }
  .adp-substep .adp-stepicon {
    
    background-color: lightcyan !important;
    border-radius: 2.5px ;
    width: 17px !important;
    height: 17px !important;
}

</style>

<div class="container">
    <div class="row">
        <div class="box">
            <div class="visitNav">
                <div>
                    <h2 style="text-align: center;">Detalles del Sitio</h2>
                </div>
            </div>
            <hr class="tagline-divider-cont">

            <!-- Projects Row -->
            <div class="container portImg">
                <div class="row ">
                    <div class="col-md-6 portfolio-item">
                        <a href="">
                            <img class="img-responsive" src="<?php echo asset("$sitDetalle->img_ruta") ?>" alt="">


                        </a>
                    </div>
                    <div class="col-md-2 portfolio-item">
                        <h4 class="icon-location"><b>:</b></h4>
                        <p><?php echo ($sitDetalle->sit_direccion) ?></p>
                    </div>
                    <div class="col-md-2 portfolio-item">
                        <h4 class=" icon-phone"><b>:</b></h4><p><?php echo ($sitDetalle->sit_telefono) ?></p>
                    </div>
                    <div class="col-md-5 col-sm-11 portfolio-item">
                        <h2 style="margin-top: 60px;"><?php echo ($sitDetalle->sit_nombre) ?></h2>
                        <p class="text-justify"><?php echo ($sitDetalle->sit_descripcion) ?></p>
                    </div>
                </div>
                
                <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i> Encuentranos en Facebook Como: <br>
                <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i> Siguenos en Twitter: <br>
                <i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i> Tambien estamos En Google Plus: <br>           

                <div class="stars">
 <div class="ec-stars-wrapper col-lg-10">
                                        <spam  class="tittlePunt">Atención :</spam>
                                        <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
                                        <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
                                        <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
                                        <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
                                        <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
                                    </div>
            </div>

<!-- efecto imgs -->
            <h2 style="text-align: center;">Imagenes Del Sitio</h2>
            <hr class="tagline-divider-cont">
            <?php foreach ($imagen as $imagenes): ?>
<div class="col-md-4 col-sm-6 evento-item">
            <a href="#eventoModal1" class="evento-link" data-toggle="modal">
                <div class="evento-hover">
                    <div class="evento-hover-content">                        
                    </div>
                </div>
                <img src="<?php echo asset("$imagenes->img_ruta") ?>" class="img-responsive" alt="">
            </a>            
        </div>

            
<!-- efecto IMG GRANDE(modal1) -->
<div class="portfolio-modal modal fade" id="eventoModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="box">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <!-- Project Details Go Here -->
                        <h2 style="margin-top: 20px; text-align: center"><?php echo ($sitDetalle->sit_nombre) ?></h2>
                        
                        <img class="img-responsive img-centered" src="<?php echo asset("$imagenes->img_ruta") ?>" class="img-responsive" alt="">
                        
                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!--inicio html geolocacion-->
<!--inicio html geolocacion-->
<!--inicio html geolocacion-->

    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
      function calculateRoute(from, to) {
        // Center initialized to Naples, Italy
        var myOptions = {
          zoom: 10,
          center: new google.maps.LatLng(40.84, 14.25),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        // Draw the map
        var mapObject = new google.maps.Map(document.getElementById("map"), myOptions);
        var directionsService = new google.maps.DirectionsService();
        var directionsRequest = {
          origin: from,
          destination: to,
          travelMode: google.maps.DirectionsTravelMode.DRIVING,
          unitSystem: google.maps.UnitSystem.METRIC
        };
        directionsService.route(
          directionsRequest,
          function(response, status)
          {
            if (status == google.maps.DirectionsStatus.OK)
            {
              new google.maps.DirectionsRenderer({
                map: mapObject,
                directions: response
              });
            }
            else
              $("#error").append("No se puede obtener su ruta<br />");
          }
        );
      }
      $(document).ready(function() {
        // If the browser supports the Geolocation API
        if (typeof navigator.geolocation == "undefined") {
          $("#error").text("Your browser doesn't support the Geolocation API");
          return;
        }
        $("#from-link, #to-link").click(function(event) {
          event.preventDefault();
          var addressId = this.id.substring(0, this.id.indexOf("-"));
          navigator.geolocation.getCurrentPosition(function(position) {
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({
              "location": new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
            },
            function(results, status) {
              if (status == google.maps.GeocoderStatus.OK)
                $("#" + addressId).val(results[0].formatted_address);
              else
                $("#error").append("No se puede obtener su direccion<br />");
            });
          },
          function(positionError){
            $("#error").append("Error: " + positionError.message + "<br />");
          },
          {
            enableHighAccuracy: true,
            timeout: 10 * 1000 // 10 seconds
          });
        });
        $("#calculate-route").submit(function(event) {
          event.preventDefault();
          calculateRoute($("#from").val(), $("#to").val());
        });
      });
    </script>
    <style type="text/css">
      #map {
        width: 500px;
        height: 400px;
        margin-top: 10px;
      }
      
      #frommm {
         margin-left: 20px;
      }
      
      #to {
         margin-left: 20px;
      }
      
      
    </style>

    <center><h6 style="margin-top:20px; margin-right: 50px;">Calcular ruta</h6></center>
    <center><form id="calculate-route" name="calculate-route" action="#" method="get">
            <label for="from">Desde:
      <input type="text" id="frommm" name="from" required="required" placeholder="Una dirección" size="60" />
      <a id="" href="#">Obtener mi posición</a>
      <br />
      <label for="to">Hacia:</label>
      <input type="text" id="to" name="to" required="required" placeholder="Otra dirección" size="60" />
      <a id="to-link" href="#">Obtener mi posición</a>
      <br />
      <input type="submit" />
      <input type="reset" />
        </form></center>
    <div id="map"></div>
    <p id="error"></p>
         


<?php include ("/../../Templates/Frontend/footer.php") ?>
<?php include ("/../../Templates/Frontend/foot.php") ?>