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
 <img src="img/pikachu.gif" id="pikachu" alt="pikachu">
 <img src="img/charmeleon-b.gif" id="charmelon" alt="charmeleon">
 <img src="img/background.png" id="background" alt="background">
</body>
</html>