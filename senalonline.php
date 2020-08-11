<!DOCTYPE html >
<html>

<!-- ########## -->
<!--    Head    -->
<head>
  <title>El Ágora</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>


<!-- ########## -->
<!--    Body    -->
<body>


<figure id="mainPlayer" class="mainPlayer">

  <figcaption><b>The Early Jazz Radio - Señal online</b></figcaption> 

  <audio id="audioPlayer" controls autoplay="autoplay" onended="nextSong()">
  <source src="EJR/Thelonious_Monk_Tape_5_1971_Side_A.mp3" type="audio/mp3">

    Your browser does not support the audio element.
  </audio>

</figure>


  <b>Artista:</b><br>
    Por implementar...

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
