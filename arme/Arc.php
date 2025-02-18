<?php 



//implements = implémenter l'interface InterfaceArme
class Arc implements InterfaceArme{
    // Attribus :

    private ?int $munition=10;
    private ?string $type;

    // Constructor 
    public function __construct(?int $munition, ?string $type){
        $this-> munition = $munition;
        $this-> type = $type;
    }

    // Methodes :
    public function attaquer():int{
        if($this->munition>0){
            $coupAttaque = rand(1,10);
            $this->munition--;
            return $coupAttaque;
        }else {
            echo 'Plus de flèche disponible !';
            return 0;
        }
    }
    public function afficher():void{
        echo "Affichage de l'Arc";
    }
    

    
}


