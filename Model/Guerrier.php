<?php

class Guerrier extends AbstractPersonnage{


    public function attaquer():?InterfaceArme{

        echo "Attaque du Guerrier";
        return $this->getArme();
    }
    public function afficher(): void{

        echo "Affichage du Guerrier";
    }
}