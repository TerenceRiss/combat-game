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

  
    public function  regenerer ($vie = null) {
        if (is_null($vie)){

            $this->vie = $this->vie+50;
        } else {
            $this->vie+=$vie;
        }
    }

 

    
    public function bonus (){
        if (!$this->goodBoy){
            return 0;
        }
        
        $dice = random_int(1,6);
        
        if ($dice<=3){
            echo $this->nom . " a reçu un bonus d'armure! \n";
            return 20;
        }else {
            return 0;
        }
    }   

    public function mort (){
        return $this->vie <= 0;
    }

    public function attaque ($cible){
        if ($cible->mort()){
            echo "la cible est morte, impossible d'attaquer\n";
            return;
        }
        $cible->vie = $cible->vie - max(0,($this->atk - $cible->bonus() - $cible->armor));
        dump($cible);
    }

 }

