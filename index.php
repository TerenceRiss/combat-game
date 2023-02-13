<?php
require "vendor/autoload.php";

use Riss\VeillePhp\Personnage;



$hero = new Personnage ("Fatima", 15,20,200 );
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

$chefMinion->attaque($hero);
$minion->attaque($hero);
$lieutenantMinion->attaque($hero);

$hero->attaque($minion);
$hero->attaque($lieutenantMinion);
$hero->attaque($chefMinion);

$hero->attaque($minion);
$hero->attaque($lieutenantMinion);
$hero->attaque($chefMinion);
