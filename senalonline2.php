<!DOCTYPE html >
<html>

<!-- ########## -->
<!--    Head    -->
<head>
  <title>El Ágora</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <meta http-equiv="refresh" content="900" > -->
    <!-- <link rel="stylesheet" href="css/main.css" /> -->
</head>


<!-- ########## -->
<!--    Body    -->
<body>

<!-- 
  Para radio:
  src=<?php echo 'EJR/'.$files[rand(2,$nfiles)] ?>
	 
  Para transmitir especiales
  src="especiales/emision1.mp3">
-->

<figure id="mainPlayer" class="mainPlayer">
  <?php
    $mypath = '/var/www/html/schizoidXXI/';
    $files  = scandir($mypath);
    $nfiles = count($files) - 2;
    $file   = $files[rand(2,$nfiles)];
    $name   = str_replace("_", " ", $file);
    $name   = str_replace("-", " / ", $name);
  ?>

  <figcaption><b>21st Century Schizoid Radio - Señal online</b></figcaption> 

  <audio id="audioPlayer" controls autoplay="autoplay" onended="nextSong()">
  <source src=<?php echo "schizoidXXI/".$file?> type="audio/mp3">

    Your browser does not support the audio element.
  </audio>

</figure>


  <b>Artista:</b><br>
    <?php echo substr($name,0,-4)?>

  <script>
    var myPlayer = document.getElementById("audioPlayer");

      play();
      function play() {
        myPlayer.play();
      }
	  
      function nextSong() {
        location.reload();
      }

  </script>
    
</body>
</html>
