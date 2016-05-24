<script type="text/javascript" src="<?php echo asset("js/jquery-1.12.1.min.js") ?>"></script>
<script type="text/javascript" src="<?php echo asset("bootstrap/js/bootstrap.min.js") ?>"></script>
<script type="text/javascript" src="<?php echo asset("js/funcionMenu.js") ?>"></script>
<!--<script type="text/javascript" src="<?php echo asset("js/script.js") ?>"></script>-->
</head>
<body>
<center>
        

    <div class="sonido">
        <b style="color: #ffffff">Fiesta Buga</b>
        <div style="margin-left:10px"><audio id="audio" width="300" height="32" src="http://live.rcnmundo.com/fiestabuga.mp3"></audio>
            <button class="btn btn-primary btn-sm btn-round collapsed fa fa-play" id="play"></button>
            <button class="btn btn-primary btn-sm btn-round collapsed fa fa-pause" id="pause">
            </button>
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

    <div class="mas">
        <!-- Single button -->
        <div class="btn-group dropup">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b> Mas Emisoras</b><span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="<?php echo url("http://www.radios.com.co/rumba-cali/") ?>"  target="_blank"><b>Rumba Estero</b></a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo url("http://envivo.tropicanafm.com/") ?>"  target="_blank"><b>Tropicana</b></a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo url("http://www.colombia.com/radio/i3365/candelo-stereo") ?>"  target="_blank"><b>Candelo Estereo</b></a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo url("http://www.rcnmundo.com/lamega") ?>"  target="_blank"><b>La Mega</b></a></li>
            </ul>
        </div>
    </div>