<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>
<!-- Comienzo Slides -->
<!-- Carousel Header -->

<!-- Final Slides -->
<div class="container">
    <div class="row">
        <div class="box">
            <div class="visitNav">
                <div>
                    <h2 style="text-align: center;">Detalles del Eventos</h2>
                </div>
            </div>
            <hr>

            <!-- Projects Row -->

            <div class="col-md-6 portfolio-item">
                <a href="se devuleve al index">
                    <img class="img-responsive" src="<?php echo asset("$eveDetalle->img_ruta") ?>" alt="">
                </a>

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
    </style>

    <center><h6 style="margin-top:20px;">Calcular ruta</h6></center>
    <center><form id="calculate-route" name="calculate-route" action="#" method="get">
      <label for="from">Desde:</label>
      <input type="text" id="from" name="from" required="required" placeholder="Una dirección" size="40" />
      <a id="from-link" href="#">Obtener mi posición</a>
      <br />
      <label for="to">Hacia:</label>
      <input type="text" id="to" name="to" required="required" placeholder="Otra dirección" size="40" />
      <a id="to-link" href="#">Obtener mi posición</a>
      <br />
      <input type="submit" />
      <input type="reset" />
        </form></center>
    <div id="map"></div>
    <p id="error"></p>
            </div>
            <div class="botoness">
                   <div class="col-md-2 portfolio-item">
                    <h3 title="Luhar" class="icon-home fa-fw"><b>:</b></h3>
                    <p><?php echo("$eveDetalle->eve_direccion") ?></p>
                </div>
                <div class="col-md-2 portfolio-item">
                    <h3 title="Direccion" class="icon-location fa-fw"><b>:</b></h3>
                    <p><?php echo("$eveDetalle->eve_direccion") ?></p>
                </div>
                <div class="col-md-2 portfolio-item">
                    <h3 title="Duraccion" class=" icon-calendar fa-fw"><b>:</b></h3><p>Del <?php echo("$eveDetalle->eve_fecha_inicio") ?> hasta el <?php echo("$eveDetalle->eve_fecha_fin") ?></p>
                </div>
                <div class="col-md-2 portfolio-item">
                    <h3 title="Valor Por Persona" class=" icon-user fa-fw"><b>:</b></h3>
                    <p><?php echo("$eveDetalle->eve_valor_boleta") ?></p>
                </div>
                <div class="col-md-2 portfolio-item">
                    <h3 title="Celular" class="icon-mobile"><b>:</b></h3>
                    <p><?php echo("$eveDetalle->eve_telefono_contacto") ?></p>
                </div>
                <div class="col-md-2 portfolio-item">
                    <h3 title="Hora" class="icon-clock"><b>:</b></h3>
                    <p><?php echo("$eveDetalle->eve_fecha_hora") ?></p>
                </div>
                <div class="col-md-2 portfolio-item">
                    <h3 title="Correo" class=" icon-mail fa-fw"><b>:</b></h3>
                    <p><?php echo("$eveDetalle->eve_correo_contacto") ?></p>
                </div>
            </div>
            <div class="col-md-5 col-sm-11 portfolio-item">
                <h2 style="margin-top: 60px;"><?php echo("$eveDetalle->eve_nombre") ?></h2>
                <p style="margin-top:20px; "class="text-justify"><?php echo("$eveDetalle->eve_descripcion") ?></p>
            </div>
    
   
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

            
            <?php include ("/../../Templates/Frontend/footer.php") ?>
            <?php include ("/../../Templates/Frontend/foot.php") ?>

    </div>
    </div>
       
            