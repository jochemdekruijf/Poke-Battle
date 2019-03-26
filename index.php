<?php

require "pokemon.php";


$pikachu =  new Pokemon('pickachu', '100', 'electric', 'water',"Pickachuuuuuuuuuuuuu!","40");

print_r('<pre>'. $pikachu . '</pre>');

$pikachu->sayOneliner();


?>
<!DOCTYPE html>
<html>
<head>
	<title>Pokémon</title>
	<link rel="stylesheet" type="text/css" href="css/pokemon.css">
	<meta charset="utf-8">
</head>
<body>
       <div id="pokemon">
           <img src="img/pikachu.gif" id="pikachu" alt="pikachu">
           <img src="img/charmeleon-b.gif" id="charmelon" alt="charmeleon">
            <img src="img/background.png" id="background" alt="background">
            <img src="img/gameboy.png" id="gameboy" alt="gameboy">
           <p id="description_text">Sample <br>
               Attack was ineffetive,<br>
               damage reduced by 5.

           </p>
        </div>
</body>
</html>