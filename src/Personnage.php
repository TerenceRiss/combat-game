<?php

namespace Riss\VeillePhp;

class Personnage {
    
   public $nom;
   public $atk;
   public $armor;
   public $vie;
   public $goodBoy;

   public function __construct($nom, $atk, $armor, $vie, $goodBoy = false){
    $this->nom = $nom;
    $this->atk = $atk;
    $this->armor = $armor;
    $this->vie = $vie;
    $this->goodBoy = $goodBoy;
    
}

  
    //  fonctioner de regeneration
    public function  regenerer ($vie = null) {
        if (is_null($vie)){

            $this->vie = $this->vie+50;
        } else {
            $this->vie+=$vie;
        }
    }

    // public function goodOne ($goodBoy){
    //     if ($goodBoy->hero);
    // }

    // fonction pour attaquer de facon aléatoire 
    public function bonus (){
        if (!$this->goodBoy){
            return 0;
        }
        $dice = random_int(1,6);
        
        // dump($dice);
        if ($dice<=3){
            echo $this->nom . " a reçu un bonus d'armure! \n";
            return 20;
        }else {
            return 0;
        }
    }   
    // fonction pour faire mourir le hero ou les ennemies 
    public function mort (){
        return $this->vie <= 0;
    }

    // fonction pour infliger des degats a la cible et calclule enntre le bonus moins la vie 
    //  quand un ennemie est mort il ne doit plus attaquer 
    public function attaque ($cible){
        if ($cible->mort()){
            echo "la cible est morte, impossible d'attaquer\n";
            return;
        }
        $cible->vie = $cible->vie - max(0,($this->atk - $cible->bonus() - $cible->armor));
        dump($cible);
    }

 }

//  seul le hero doit recevoir un bonus , et le combat doit finir quand le hero ou les ennemis sont mort 