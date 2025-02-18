<?php 


//implements = implémenter l'interface InterfaceArme
class Projectile implements InterfaceArme{
    // Attribus :
    private ?string $type;

    // Constructor : 
    public function __construct(?int $munition, ?string $type){
        $this-> munition = $munition;
        $this-> type = $type;
    }
    
    // Methodes : 
    public function attaquer():int{
        $coupProjectile = rand(1,10);
        echo `Attaque de projectile : $coupProjectile pts`;
        return $coupProjectile;

    }
    public function afficher():void{
        echo 'Affichage du projectile';
    }


}


