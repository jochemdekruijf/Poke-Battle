<?php

require "pokemon.php";
require "attack.php";
require "resistance.php";
require "weakness.php";


$pikachu =  new Pokemon('pikachu', '100', 'electric', 'water',"Pikachuuuuuuuuuuuuu!","40");
$pikachu->attack = new Attack("attack 1",20);
$pikachu->resistance = new resistance("typeR",10);
$pikachu->weakness = new weakness("typeW",2);


$pokemon2 =  new Pokemon('pokemon2', '100', 'fire', 'earth',"pokemon2Line","40");
$pokemon2->attack = new Attack("attack 1",20);
$pokemon2->resistance = new resistance("typeR",10);
$pokemon2->weakness = new weakness("typeW",2);
// echo "<pre>";
//  var_dump($pikachu);
//  var_dump($pokemon2);
// echo "</pre>";




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
            <img src="img/Battle.png" id="battle" alt="background">
            <img src="img/gameboy.png" id="gameboy" alt="gameboy">
           <p id="description_text">Sample text<br>
               Attack was ineffetive,<br>
               damage reduced by 5.
           </p>
           <button class="invisible" id="a"></button>
           <button class="invisible" id="b"></button>
        </div>
</body>
</html>