<script type="text/javascript" src="<?php echo asset("js/jquery-1.12.1.min.js") ?>"></script>
<script type="text/javascript" src="<?php echo asset("bootstrap/js/bootstrap.min.js") ?>"></script>
<script type="text/javascript" src="<?php echo asset("js/funcionMenu.js") ?>"></script>
<!--<script type="text/javascript" src="<?php echo asset("js/script.js") ?>"></script>-->
<script src="<?php echo asset("http://maps.google.com/maps/api/js?sensor=true") ?>"></script>
<script src="<?php echo asset("http://ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js") ?>"></script>
</head>
<body>
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
                function (response, status)
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
    $(document).ready(function () {
        // If the browser supports the Geolocation API
        if (typeof navigator.geolocation == "undefined") {
            $("#error").text("Your browser doesn't support the Geolocation API");
            return;
        }
        $("#from-link, #to-link").click(function (event) {
            event.preventDefault();
            var addressId = this.id.substring(0, this.id.indexOf("-"));
            navigator.geolocation.getCurrentPosition(function (position) {
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    "location": new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
                },
                function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK)
                        $("#" + addressId).val(results[0].formatted_address);
                    else
                        $("#error").append("No se puede obtener su direccion<br />");
                });
            },
                    function (positionError) {
                        $("#error").append("Error: " + positionError.message + "<br />");
                    },
                    {
                        enableHighAccuracy: true,
                        timeout: 10 * 1000 // 10 seconds
                    });
        });
        $("#calculate-route").submit(function (event) {
            event.preventDefault();
            calculateRoute($("#from").val(), $("#to").val());
        });
    });
</script>
    

<center>
  
    
     <div class="sonido">
        <b style="color: #FFF; margin-left: 10px">Buga Stereo</b>
        <div style="margin-left:10px"><audio id="audio" width="300" height="32" src="http://live.rcnmundo.com/fiestabuga.mp3"></audio>
            <button class="btn btn-primary btn-sm btn-round collapsed fa fa-play" id="play"></button>
            <button class="btn btn-primary btn-sm btn-round collapsed fa fa-pause" id="pause">
            </button>
            <img style="height: 32px; width: 30px; border-radius: 2px; margin-bottom: 3px" src="{{asset('img/unnamed.png')}}"/>
        </div>
    </div>



    <script>

        var audio = document.getElementById('stream');
        audio.volume = 1;

        //play when play is clicked
        $('#play2').click(function() {
            audio.play()
        })

        //pause when pause clicked
        $('#pause2').click(function() {
            audio.pause()
        })
    </script>
    <script>
        //Define the player 
        var player = document.getElementById('audio');
        //play when play is clicked
        $('#play').click(function() {
            player.play()
        })

        //pause when pause clicked
        $('#pause').click(function() {
            player.pause()
        })
    </script>