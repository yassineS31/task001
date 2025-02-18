<?php


class Mage extends AbstractPersonnage{

    private ?int $mana;

    public function attaquer(): ?InterfaceArme{

        echo "Attaque du Mage";
        return $this->getArme();
    }
    public function afficher(): void{

        echo "Affichage du Mage";
    }
}