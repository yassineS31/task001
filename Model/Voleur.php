<?php

class Voleur extends AbstractPersonnage{


    public function attaquer():?InterfaceArme{

        echo "Attaque du voleur";
        return $this->getArme();
    }
    public function afficher(): void{

        echo "Affichage du voleur";
    }
}