<?php

//implements = implémenter l'interface InterfaceArme
class Epee implements InterfaceArme{

    // Attribus :
    private ?int $durabilite;
    private ?string $type;

    // Constructor :
    public function __construct(?int $durabilite, ?string $type){
        $this-> durabilite = $durabilite;
        $this-> type = $type;
    }


    // Methodes :
    public function attaquer():int{
        $coupAttaque = rand(1,100);
        echo `Coup de l'epee : $coupAttaque pts.`;
        if($coupAttaque<10){
            $this->durabilite--;
            if($this->durabilite<=0){
                echo `L'épee s'est brisé !`;
            }
        }
        return $coupAttaque;
    }
    public function afficher():void{
        echo "Affichage de l'epee";

    }
}