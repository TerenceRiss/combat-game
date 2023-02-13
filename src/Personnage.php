<?php

namespace Riss\VeillePhp;

class Personnage {
    
   public $nom;
   public $atk;
   public $armor;
   public $vie;

   public function __construct($nom, $atk, $armor, $vie){
    $this->nom = $nom;
    $this->atk = $atk;
    $this->armor = $armor;
    $this->vie = $vie;
   }
  
    //  fonctioner de regeneration
    public function  regenerer ($vie = null) {
        if (is_null($vie)){

            $this->vie = $this->vie+50;
        } else {
            $this->vie+=$vie;
        }
    }

    // fonction pour attaquer de facon aléatoire 
    public function bonus (){
        $dice = random_int(1,6);
        
        dump($dice);
        if ($dice<3){
            return 20;
        }else {
            return 0;
        }
    }   
    // fonction pour faire mourir le hero 
    public function mort (){
        return $this->vie <= 0;
    }

    // fonction pour infliger des degats a la cible et calclule enntre le bonus moins la vie 
    public function attaque ($cible){
        $cible->vie = $cible->vie - max(0,($this->atk - $cible->bonus() - $this->armor));
        dump($cible);
    }

 }

//  a faire : seul le hero doit recevoir un bonus , et le combat doit finir quand le hero ou les ennemis sont mort 
//  quand un ennemie est mort il ne doit plus attaquer 