<script type="text/javascript" src="<?php echo asset("js/jquery-1.12.1.min.js") ?>"></script>
<script type="text/javascript" src="<?php echo asset("bootstrap/js/bootstrap.min.js") ?>"></script>
<script type="text/javascript" src="<?php echo asset("js/funcionMenu.js") ?>"></script>
<!--<script type="text/javascript" src="<?php echo asset("js/script.js") ?>"></script>-->
</head>
<body>

    

<center>
  
    
     <div class="sonido">
        <b style="color: #FFF; margin-left: 10px">Buga Estereo</b>
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