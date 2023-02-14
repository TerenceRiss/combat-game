<?php
require "vendor/autoload.php";

use Riss\VeillePhp\Personnage;



$hero = new Personnage ("Fatima", 15,20,200, true );
$hero->regenerer();
dump($hero);

$minion = new Personnage ("minion",10,0,10);
dump($minion);

$lieutenantMinion = new Personnage("lieutenant Minion",30,0,30);
dump($lieutenantMinion);

$chefMinion = new Personnage("Chef Minion",100,0,100);
dump($chefMinion);

$chefMinion->attaque($hero);
$minion->attaque($hero);
$lieutenantMinion->attaque($hero);
dump($hero->mort());

$hero->attaque($minion);
$hero->attaque($lieutenantMinion);
$hero->attaque($chefMinion);
dump($minion->mort(),$lieutenantMinion->mort(),$chefMinion->mort());

$chefMinion->attaque($hero);
$minion->attaque($hero);
$lieutenantMinion->attaque($hero);
dump($hero->mort());


$hero->attaque($minion);
$hero->attaque($lieutenantMinion);
$hero->attaque($chefMinion);
dump($minion->mort(),$lieutenantMinion->mort(),$chefMinion->mort());


$hero->attaque($minion);
$hero->attaque($lieutenantMinion);
$hero->attaque($chefMinion);
dump($minion->mort(),$lieutenantMinion->mort(),$chefMinion->mort());


$hero->attaque($minion);
$hero->attaque($lieutenantMinion);
$hero->attaque($chefMinion);
dump($minion->mort(),$lieutenantMinion->mort(),$chefMinion->mort());


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="personnage.css">
    <title>Document</title>
</head>
<body>
    <div class="game">
        <div class="hero_container">
            <h1>Fatima</h1>
            
        <div class="perso1">
                <img class="persos hero" src="hero-removebg-preview.png" alt="">
                <label for="file">Vie</label>
                <progress id="file" max="10" value="70"> 10% </progress>
        </div>

            <form action="">        
                <button id="attaquer">Attaquer</button>
            </form>
        </div>
        <div class="badboy_container">
            <div class="ennemie">
                <h1>Minions'Team</h1>
                <div class="perso1" >
                    <img class="persos minion touched" src="minion-removebg-preview (1).png" alt="">
                    <label for="file">Vie</label>
                    <progress id="file" max="10" value="10"> 10% </progress>
                </div>
                
                <div class="perso1" >    
                    <img class="persos lieutenand touched" src="lieutenand.png" alt="">
                    <label for="file">Vie</label>
                        <progress id="file" max="30" value="70"> 70% </progress>
                </div>

                <div class="perso1" >
                     <img class="persos chef touched" src="chefM-removebg-preview.png" alt="">
                     <label for="file">Vie</label>
                        <progress id="file" max="100" value="100"> 100% </progress>
                </div>
            </div>
            <div class="form" >

                <form action="">
                    <!-- <p>Nom: <span id="nom"></span></p>
                    <p>Attaque: <span id="atk"></span></p>
                    <p>Armure: <span id="armor"></span></p>
                    <p>Vie: <span id="vie"></span></p>
                    <p>goodBoy: <span id="goodBoy"></span></p> -->
                    <button id="attaquer">Attaquer</button>
                </form>

            </div>
        </div>
    </div>
    <script src="personnage.js"></script>
  </body>
</html>
