<script type="text/javascript" src="<?php echo asset("js/jquery-1.12.1.min.js") ?>"></script>
<script type="text/javascript" src="<?php echo asset("bootstrap/js/bootstrap.min.js") ?>"></script>
<script type="text/javascript" src="<?php echo asset("js/funcionMenu.js") ?>"></script>
<script type="text/javascript" src="<?php echo asset("js/script.js") ?>"></script>
</head>
<body>
<center>
<div style="margin-left:10px"><audio id="audio" width="300" height="32" src="http://live.rcnmundo.com/fiestabuga.mp3"></audio>
<button class="btn btn-primary btn-sm btn-round collapsed" id="play">Play</button>
<button class="btn btn-primary btn-sm btn-round collapsed" id="pause">Pause
</button>


<audio id="stream" preload="none" style="width: 200px;">
<source src="http://192.99.150.52:9676/;" type="audio/mpeg">
</audio>
    <button class="btn btn-primary btn-sm btn-round collapsed" id="play2">Play</button>
<button class="btn btn-primary btn-sm btn-round collapsed" id="pause2">Pause
</button></div>
</center>



<script>
    
var audio = document.getElementById('stream');
audio.volume = 1;

//play when play is clicked
$('#play2').click(function(){
audio.play()
})

//pause when pause clicked
$('#pause2').click(function(){
audio.pause()
})
</script>
<script>
//Define the player 
var player = document.getElementById('audio');
//play when play is clicked
$('#play').click(function(){
player.play()
})

//pause when pause clicked
$('#pause').click(function(){
player.pause()
})
</script>                                                                                                                                                                                                                                                          