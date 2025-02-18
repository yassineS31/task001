<?php

// Classe abstraite 

abstract class AbstractPersonnage{
    // Attribus
    private ?string $nom;
    private ?InterfaceArme $arme;
    private ?string $type;



    // Constructor :

    public function __construct(?string $nom,?InterfaceArme $arme,?string $type){
        $this->nom = $nom;
        $this->arme = $arme;
        $this->type = $type;
    }

    // ######### Méthodes ########### 

    //Getters :

    public function getNom():string{
        return $this->nom;
    }
    public function getArme():?InterfaceArme{
        return $this->arme;
    }
    public function getType():string{
        return $this->type;
    }

    // SETTERS : 

    public function setNom($NewName):AbstractPersonnage{
        $this->nom = $NewName;
        return $this;
    }

    public function setArme(?InterfaceArme $arme):AbstractPersonnage{
        $this->arme= $arme;
        return $this;
    }
    public function setType(?string $newType):AbstractPersonnage{
        $this->type=$newType;
        return $this;
    }

     public function attaquer():?InterfaceArme{

        return $this->arme;
     }

     
      abstract public function afficher():void;

}




